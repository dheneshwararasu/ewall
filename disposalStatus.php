<?php
include("conn.php");
session_start();

if ($_POST['action'] == 'Perfect!') {
    exec('/usr/bin/python3 servo_py/first.py')
    $newURL = 'disposalComplete.php?id=';
	header('Location: '.$newURL.$id);
} else if ($_POST['action'] == 'No, this is not!') {
    $newURL = 'disposalComplete_Incorrect.php?id=';
	header('Location: '.$newURL.$id);
} else {

}

?>