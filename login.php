<?php 
  session_start();

include './includes/header.php'; // include header 
include './DB/dbconnection.php'; // file to connect with Database
include './includes/fun.php'; // file to validate inputs
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = Clean($_POST['username']);
    $password = Clean($_POST['password']);

    $errorMessages = [];
    # Validate Inputs .... 
    if (!Validate($username, 1)) {

        $errorMessages['usernameRequired'] = "UserName field Required";
    }

    if (!Validate($username, 2)) {

        $errorMessages['username'] = "User Name length must be >=3 ";
    }


    if (!Validate($password, 1)) {

        $errorMessages['passwordRequired'] = "Password field Required";
    }


    if (!Validate($password, 2)) {

        $errorMessages['passwordLength'] = "Password length must be >= 3";
    }



    if (count($errorMessages) == 0) {

        $sql = "SELECT * FROM `users` where `username` ='$username' and `password` = '$password'";

        $op  =  mysqli_query($conn, $sql);


        if (mysqli_num_rows($op) == 1) {

            $data = mysqli_fetch_assoc($op);

            $_SESSION['users'] = $data;

            header("Location: myblog.php");
        } else {
            $errorMessages['messages'] = "Error in Login Try Again!!!";
        }
    }

    if (count($errorMessages) > 0) {

        $_SESSION['errors'] = $errorMessages;
    }
}


?>
<!-- Login section -->

 <section id="login" class="wrapper p-5">
    <div class="container">
      <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-6 col-xl-4 offset-xl-4 text-center">
      <?php
        # Display Error Messages ... 




        if (isset($_SESSION['errors'])) {

            foreach ($_SESSION['errors'] as $data) {

                echo '* ' . $data . '<br>';
            }
            unset($_SESSION['errors']);
        }

        ?>
        <form id="myForm" class="rounded bg-white shadow p-4" method='post' action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'>
          <h3 class="text-dark fw-bolder fs-2 mb-3">Login To <br><span id="website-name">My Webiste</span></h3>
          <div class="fw-normal text-muted mb-1">
            New here ? <a href="signUp.php" class="text-primary fw-bold text-decoration-none">Create An Account</a>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" name='username' placeholder="UserName">
            <label for="floatingInput">User Name</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name='password' placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button type="submit" id="loginbtn" class="btn submit_btn w-100 my-1">Login</button>
        </form>
      </div>
    </div>
  </section>
  <!-- End Login section -->

  <?php 
include './includes/footer.php';

?>