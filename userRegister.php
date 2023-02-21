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

        </div>
            <h1 style="
                font-size: 50px;
                font-weight: bold;
                font-family: sans-serif;
                text-align: center;
                color: white;">Hi, what's your name?
            </h1>

            <div style="
            width: 90%; 
            height: 10%;">
                <form 
                style="
                height: 100%;
                padding: 10px;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-firection: row;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: center;
                webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -webkit-align-items:center;
                -ms-flex-align: center;
                align-items: center;
                grid-column-gap: 30px;" 
                method="post" action=" ">
                    <input
                    style="
                    width: 90%;
                    height: 90%;
                    border-radius: 20px;
                    background-color: grey;
                    outline-color: transparent;
                    color: white;
                    font-family: sans-serif;
                    font-weight: 500;
                    font-size: 25px;
                    text-align: center;
                    opacity: 0.5;" type="text" id="fname" name="fname" placeholder="Name as per ID">
                    
                    <input style="
                    background-color: transparent;
                    background-image: url(img/nextButton.png);
                    background-repeat: no-repeat;
                    background-size: contain;
                    background-position: 50% 50%;
                    width: 10%;
                    height: 100%;
                    border-color: transparent;
                    " type="button" value="">
                </form>
            </div>
    
    </div>
</body>
</html>