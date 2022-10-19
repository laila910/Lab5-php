<?php 

include './includes/header.php';
include './includes/fun.php';
include './DB/dbconnection.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {

 $username=Clean($_POST['username']);
 $Password = Clean($_POST["password"]);

 $errorMessages = [];

  //validate Username
  if (!Validate($username, 1)) {
    $errorMessages['username'] = 'error username Required!';
  } 
  if (!Validate($username, 2)) {   
    $errorMessages['username'] = 'error username must be > 3 '; 
  }
  //validate password
  if (!Validate($Password, 1)) {
    $errorMessages['Password'] = "password field Required";
  }
  if (!Validate($Password, 2)) {
    $errorMessages['Password'] = "password length must be > 3";
  }

  if (count($errorMessages) == 0) {

    $sql = "SELECT * FROM `users` WHERE `username`='$username'";
    $op = mysqli_query($conn, $sql);
    if (mysqli_num_rows($op) > 0) {
      header("Location: login.php");
      exit();
      

    } else {
      $sql = "INSERT INTO `users` (`username`,`password`) VALUES ('$username','$Password'); ";

      $op = mysqli_query($conn, $sql);
     
      header("Location: login.php");
     
    }
  } else {
    $_SESSION['errors'] = $errorMessages;
    header('Location: login.php');
  }
}





?>
  <!-- signUp Section -->
  <section id="signup" class="wrapper p-5">
    <div class="container">
      <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-6 col-xl-4 offset-xl-4 text-center">
     <?php if (isset($_SESSION['errors'])) {

           foreach ($_SESSION['errors'] as $data) {

             echo '* ' . $data . '<br>';
            }
unset($_SESSION['errors']);
}

?>
        <form class="rounded bg-white shadow p-5" id="myform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <h3 class="text-dark fw-bolder fs-2 mb-1">Create An Account</h3>
          <div class="fw-normal text-muted mb-1">
            Already Have Account? <a href="login.php" class="text-primary fw-bold text-decoration-none">Sign In</a>
          </div>

          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="floatingInput" name='username' placeholder="UserName">
            <label for="floatingInput">User Name</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name='password' placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button type="submit" id="signUpbtn" class="btn submit_btn w-100 my-1">Sign Up</button>

        </form>
      </div>

    </div>

  </section>
  <!-- End SignUp section -->
  <?php 
include './includes/footer.php';

?>