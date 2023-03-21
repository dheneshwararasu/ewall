<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Wall Index</title>
    <?php	
    include("conn.php");

    session_start();
    $tp = strval($_GET['depo']);
    $done = strval($_GET['done']);
    $result = mysqli_query($con,"SELECT * FROM `users` WHERE `tp` = '$tp'");
    $row = mysqli_fetch_array($result);
    ?>
    <meta http-equiv="refresh" content="5; url=deviceInfo.php" />
</head>
<body style="
margin: auto;
background-image: url(img/index-background.jpg);
background-size: cover;
">

<?php
    // specify the path to your Python script
    $python_script_path = escapeshellcmd('python3 servo_py/blue_doorClose.py');
    $output = shell_exec($python_script_path);
    echo $output;
?>

<div style="
-webkit-backdrop-filter: blur(10px) brightness(60%);
backdrop-filter: blur(10px) brightness(60%);
position:absolute;
width: 100%;
height: 100%;">
</div>
    <div style="
    position: fixed;
    left: 0%;
    top: auto;
    right: 0%;
    bottom: auto;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    margin-top: auto;
    margin-bottom: auto;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-firection: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items:center;
    -ms-flex-align: center;
    align-items: center;">
        
        <div style="
        width: auto;
        height: auto;">
        <img src="img/innovuslogo.png" alt="Innovus Logo" style="height: 50px;">

        </div>
        <?php
            // specify the path to your Python script
            $python_script_path = escapeshellcmd('python3 servo_py/blue_doorClose.py');
            $output = shell_exec($python_script_path);
            echo $output;
        ?>
            <img style="width: 100px; margin-top: 3%;" src="img/loading.gif" alt="">
            <h1 style="
                font-size: 50px;
                font-weight:500;
                font-family: sans-serif;
                text-align: center;
                color: white;">Please wait, we are looking into it!
            </h1>        
    </div>  
</body>
</html>