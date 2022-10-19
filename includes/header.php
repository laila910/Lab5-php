
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css"
            rel="stylesheet">
            <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5" id="navbar">
    <a class="navbar-brand" href="index.php">
        <b>My Webiste</b>
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav d-flex justify-content-between" style="width:50%; margin-left: auto;">
      <?php if (isset($_SESSION['users']['id'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="myblog.php">blog</a>
          </li>
          <?php } ?>
          <?php if (!isset($_SESSION['users']['id'])) { ?>
          <li class="nav-item">
            <a class="nav-link" id="login" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="signUp" href="signup.php">SignUp</a>
          </li>
          <?php }else{?>
         
          <li class="nav-item">
            <a class="nav-link" id="logout" href="logout.php"><b>Logout</b></a>
          </li>
          <?php }?>
     </ul>
    </div>
</nav>