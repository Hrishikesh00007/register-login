<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

  <table class="table">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
     
    <?php 
session_start();
$con=mysqli_connect("localhost","root","","register") or die("connection Failed");
//error_reporting(0);


$sql="SELECT * FROM `signup` WHERE `id`='".$_SESSION['mid']."'";
$res=mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
if($num>0)
{
while($fetch=mysqli_fetch_array($res))
{
?>
    <tr>
<td ><?=$fetch['username']?></td>
<td ><?=$fetch['email']?></td>
<td ><?=$fetch['password']?></td>
<td ><?php if($fetch['image']){?><img src="qrcode/<?=$fetch['image']?>" height="100" width="100" /><?php }?></td>
</tr>
  <?php 
}
}
?>
 </tbody>
  </table>

<form action="logout.php" method="POST"> 
    <button type="submit">Logout</button> 
</form> 
<form action="register.php" method="POST"> 
    <button type="submit">Register</button> 
</form> 
</body>
</html>