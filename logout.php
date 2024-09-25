<?php
session_start();
$con=mysqli_connect("localhost","root","","register") or die("connection Failed");
unset($_SESSION['mid']);
session_destroy();

header('location:login.php');
?>