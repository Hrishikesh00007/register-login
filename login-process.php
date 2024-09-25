<?php


$con = mysqli_connect("localhost", "root", "", "register") or die("connection Failed");

session_start();
$sql = "SELECT * FROM `signup` WHERE `email`='" . $_POST['email'] . "' AND `password`='" . $_POST['password'] . "'";
$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);
if ($num > 0) {
       $fetch = mysqli_fetch_array($res);
       $_SESSION['mid'] = $fetch['id'];

       header('location:dashboard.php');
} else {
       echo "<h1> Login failed. Invalid username or password.</h1>";
}
