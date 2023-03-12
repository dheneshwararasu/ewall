<?php
include("conn.php");
session_start();

if ($_POST['action'] == 'Perfect!') {

    // specify the path to your Python script
    $python_script_path = escapeshellcmd('python3 servo_py/');
    $output = shell_exec($python_script_path);
    echo $output;

    $newURL = 'disposalComplete.php?id=';
	header('Location: '.$newURL.$id);
} else if ($_POST['action'] == 'No, this is not!') {
    $newURL = 'disposalComplete_Incorrect.php?id=';
	header('Location: '.$newURL.$id);
} else {

}

?>