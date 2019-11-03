<?php

    session_start();
    if(!isset($_SESSION['user_login'])){
        header('location: login.php');
    }

?>

<?php include_once './header.php'; ?>

<a href="logout.php">Log Out</a>
<h1>welcome to admin</h1>

<!-- <h1>Welcome to Medicine Management Ststem</h1>
    <a href="./admin/login.php">Login</a> -->

<?php include_once 'footer.php'; ?>