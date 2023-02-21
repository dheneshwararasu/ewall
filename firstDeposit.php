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
        <?php	
        include("conn.php");

        session_start();
        $tp = strval($_GET['tp']);
        $result = mysqli_query($con,"SELECT * FROM `users` WHERE `tp` = '$tp'");
        while($row = mysqli_fetch_array($result)){
            $name = $row["name"];
            $id = $row["no"];
            $points = $row["points"];
        }
        ?>

        </div>
            <h1 style="
                font-size: 50px;
                font-weight: bold;
                font-family: sans-serif;
                text-align: center;
                color: white;">Hi, <?php echo $name ?>
            </h1>

            <div style="
                width: 800px;
                height: 180px;
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
                height: 180px;
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
                grid-row-gap: 50px;" href="insertEWaste.php"></a>
                <img  style="height: 100px; margin-top: -25px;" src="img/deposit.png" alt="">
                <h1 style="
                padding: 30px;
                font-size: 40px;
                font-weight: bold;
                font-family: sans-serif;
                text-align: center;
                color: white;
                text-decoration: none;">Make your first deposit</h1></div>
            
            </div> 
            <?php mysqli_close($con); ?>
</body>
</html>