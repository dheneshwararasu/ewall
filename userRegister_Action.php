<?php
include("conn.php");
$tp = strval($_GET['name']);

$name = mysqli_real_escape_string($con, $_POST['name']);

$sql="INSERT INTO users(no, tp, name, points) VALUES('0', '$tp', '$name', '0')";

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

$newURL = 'firstDeposit.php?success=';
header('Location: '.$newURL.$tp);
?>