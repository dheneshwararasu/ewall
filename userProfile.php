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
    include("conn.php");
    session_start();
    $id = strval($_GET['id']);
    $result = mysqli_query($con,"SELECT * FROM `users` WHERE `no` = '$id'");
    $row = mysqli_fetch_array($result);
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
    -webkit-box-pack: center;
    webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items:center;
    -ms-flex-align: center;
    align-items: center;">
        
        <div style="
        margin-right: 5%;
        margin-left: 5%;
        webkit-align-self: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;">
            <img src="img/innovuslogo.png" alt="Innovus Logo" style="height: 50px;">
            <h1 style="
            margin-top: 10%;
            font-family: sans-serif;
            font-weight: 400;
            font-size: 50px;
            color: white;
            ">Welcome back,</h1>
            <h2 style="
            font-family: sans-serif;
            font-size: 65px;
            color: white;
            word-wrap: break-word;

            "><?php echo $row["name"] ?></h2>
            <div style="
            background-color:white;
            border-radius: 40px;
            opacity: 0.5;
            width: 90%;
            padding-left: 5%;
            padding-right: 5%;">
            <h3 style="
            font-family: sans-serif;
            font-size: 35px;
            margin-left: 20px;
            margin-right: 20px;">Available points: <?php echo $row["points"] ?></h3>
            </div>
    
        </div>

        <div style="
        width: 400px;
        height: 579px;
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
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
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
        width: 400px;
        height: 579px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        grid-row-gap: 50px;" href="insertEWaste.php"></a>
        <img  style="height: 200px;" src="img/deposit.png" alt="">
        <h1 style="
        font-size: 50px;
        font-weight: bold;
        font-family: sans-serif;
        text-align: center;
        color: white;
        text-decoration: none;">Deposit</h1></div>

        <div style="
        width: 400px;
        height: 579px;
        margin-right: 5%;
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
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
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
        width: 400px;
        height: 579px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        grid-row-gap: 50px;" href=""></a>
        <img style="height: 200px;" src="img/redeemPoints.png" alt="">
        <h1 style="
        font-size: 50px;
        font-weight: bold;
        font-family: sans-serif;
        text-align: center;
        color: white;
        text-decoration: none;">Redeem Points</h1></div>
    
    </div>
</body>
</html>