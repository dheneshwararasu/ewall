<?php
include("conn.php");
session_start();

$tp=mysqli_real_escape_string($con,$_POST['tp']);

$sql="SELECT * FROM users WHERE tp='$tp'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)<=0)
{
    $newURL = 'userRegister.php?name=';
	header('Location: '.$newURL.$tp);
}
if($row=mysqli_fetch_array($result))
{
	$_SESSION['users']=$row['name'];
    $_SESSION['id']=$row['id'];
    $newURL = 'userLogin.php?id=';
	header('Location: '.$newURL.$id);
}
?>
