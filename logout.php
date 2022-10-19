<?php
  session_start();

    include './includes/fun.php';
    unset($_SESSION['users']);
    session_destroy();


    header("Location: ".urll('login.php'));
    