<?php
include("conn.php");
session_start();

shell_exec("./servo_py/first.py");

if ($_POST['action'] == 'Perfect!') {
    
    $newURL = 'disposalComplete.php?id=';
	header('Location: '.$newURL.$id);
} else if ($_POST['action'] == 'No, this is not!') {
    $newURL = 'disposalComplete_Incorrect.php?id=';
	header('Location: '.$newURL.$id);
} else {

}

?>