<?php
session_start();
include './includes/header.php';

?>
<div>
    <div class='d-flex align-items-center flex-column bg-light p-5 mb-5 mt-4'>
        <h1 class='display-1'>Welcome <?php  if (isset($_SESSION['users']['id'])) { echo $_SESSION['users']['username'];}  ?> to my blog</h1>
        <img src="./img/welcome.jpg" alt="welcome image">
    </div>
</div>

<?php
include './includes/footer.php';
?>