<?php 
$con=mysqli_connect("localhost","root","","register") or die("connection Failed");



if($_FILES['file']['name'])
{
if(strpos($_FILES['file']['name'], 'php') == false)
{
$rand=rand(1,999999);
$target="qrcode/";
$path=$rand.$_FILES['file']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
if($ext=='png' || $ext=='jpg' || $ext=='jpeg' || $ext=='JPG' || $ext=='gif')
{
$target=$target.basename($path);
move_uploaded_file($_FILES['file']['tmp_name'], $target);
}
}

$sql="INSERT INTO `signup` (`username`,`email`,`password`,`image`) VALUES ('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."','".$path."')";
}
else{
$sql="INSERT INTO `signup` (`username`,`email`,`password`) VALUES ('".$_POST['username']."','".$_POST['email']."','".$_POST['password']."')";

}


if(mysqli_query($con,$sql)){
    echo 1;
}else{
    echo 0;
}

?>