<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Wall Index</title>
    <?php
        // specify the path to your Python script
        $python_script_path = escapeshellcmd('python3 servo_py/initialize.py');
        $output = shell_exec($python_script_path);
        echo $output;
    ?>
</head>
<body style="
margin: auto;
background-image: url(img/index-background.jpg);
background-size: cover;
">
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
        <div style="">
            <h1 style="
                font-size: 70px;
                font-family: sans-serif;
                color: white;">let's make the change now!</h1>
        </div>
            <a style="
                background-color: white;
                width: 650px;
                border-radius: 72px;
                font-size: 50px;
                font-weight: bold;
                font-family: sans-serif;
                line-height: 100px;
                text-align: center;
                color: #3F504C;
                text-decoration: none;" href="userLoginTP.php">Get Started!</a>
    
    </div>
</body>
</html>