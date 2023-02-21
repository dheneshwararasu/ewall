<?php
include("conn.php");
session_start();

$tp=mysqli_real_escape_string($con,$_POST['tp']);

$sql="SELECT * FROM users WHERE tp='$tp'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)<=0)
{
    echo "<script>window.location.href='userRegister.php';</script>";
}
if($row=mysqli_fetch_array($result))
{
	$_SESSION['users']=$row['name'];
    echo "<script>window.location.href='userProfile.php';</script>";
}
?>
