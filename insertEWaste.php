<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Wall Index</title>
    
</head>
<body style="
margin: auto;
background-image: url(img/index-background.jpg);
background-size: cover;
">

<?php
    // specify the path to your Python script
    $python_script_path = escapeshellcmd('python3 servo_py/open door.py');
    $output = shell_exec($python_script_path);
    echo $output;
?>

<div style="
-webkit-backdrop-filter: blur(10px) brightness(60%);
backdrop-filter: blur(10px) brightness(60%);
position:absolute;
width: 100%;
height: 100%;"></div>
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
            <img style="width: 150px; margin-top: 3%;" src="img/deposit.png" alt="">
            
            <?php	
            include("conn.php");

            session_start();
            $tp = strval($_GET['id']);
            $result = mysqli_query($con,"SELECT * FROM `users` WHERE `tp` = '$tp'");
            $row = mysqli_fetch_array($result);
            ?>

            <h1 style="
                font-size: 50px;
                font-weight:400;
                font-family: sans-serif;
                text-align: center;
                color: white;">Insert your e-Waste into the bay.
            </h1>

            <div style="
                width: 800px;
                height: 100px;
                margin-right: 10px;
                margin-left: 10px;
                border-radius: 50px;
                webkit-align-self: center;
                -ms-flex-item-align: center;
                -ms-grid-row-align: center;
                align-self: center;
                background-color: grey;
                opacity: 100%;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                grid-row-gap: 50px;">
                <a style="
                position: absolute;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                width: 800px;
                height: 100px;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                grid-row-gap: 50px;" href="processingMV.php?depo=<?php echo $row["tp"] ?>&done=1"></a>
                <h1 style="
                font-size: 40px;
                font-weight: bold;
                font-family: sans-serif;
                text-align: center;
                color: white;
                text-decoration: none;">Done</h1></div>
            
            </div>  
</body>
</html>