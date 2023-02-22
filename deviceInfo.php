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
        
        <div style="
        margin-left: 5%;
        margin-right: 5%;
        left: 0%;
        top: auto;
        right: 0%;
        bottom: auto;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-top: 5%;
        margin-bottom: 5%;
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
        align-items: center;">

        <div style="">
            <img style="width: 30%;" src="img/duracell.png" alt="">
        </div>
        <div style="">
            <form 
            style="
            left: 0%;
            top: auto;
            right: 0%;
            bottom: auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-top: 5%;
            margin-bottom: 5%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-firection: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: left;
            webkit-justify-content: left;
            -ms-flex-pack: left;
            justify-content: left;
            -webkit-box-align: left;
            -webkit-align-items:left;
            -ms-flex-align: left;
            align-items: left;
            grid-row-gap: 10px;"
            action="" method="post">
                <label 
                style="
                color: white;
                font-family: sans-serif;
                font-weight: 500;
                font-size: 25px;" for="fname">Electronic waste type:</label>
                <input 
                style="width: 400px;
                height: 50px;
                border-radius: 20px;
                background-color: grey;
                outline-color: transparent;
                color: white;
                font-family: sans-serif;
                font-weight: 500;
                font-size: 25px;
                text-align: center;
                opacity: 0.5;" type="text">
                
                <label 
                style="
                color: white;
                font-family: sans-serif;
                font-weight: 500;
                font-size: 25px;" for="fname">Brand/Manufacturer:</label>
                <input style="width: 400px;
                height: 50px;
                border-radius: 20px;
                background-color: grey;
                outline-color: transparent;
                color: white;
                font-family: sans-serif;
                font-weight: 500;
                font-size: 25px;
                text-align: center;
                opacity: 0.5;" type="text">
                
                <label 
                style="
                color: white;
                font-family: sans-serif;
                font-weight: 500;
                font-size: 25px;" for="fname">Model:</label>
                <input style="width: 400px;
                height: 50px;
                border-radius: 20px;
                background-color: grey;
                outline-color: transparent;
                color: white;
                font-family: sans-serif;
                font-weight: 500;
                font-size: 25px;
                text-align: center;
                opacity: 0.5;" type="text">

                <div style="
                margin-left: 5%;
                margin-right: 5%;
                left: 0%;
                top: auto;
                right: 0%;
                bottom: auto;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                margin-top: 5%;
                margin-bottom: 5%;
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
                grid-column-gap: 15%;">

                <input 
                style="
                background-color: gray;
                color: white;
                width: 50%;
                height: 50px;
                border-radius: 10px;
                border-color: transparent;
                font-family: sans-serif;
                font-weight: 400;
                font-size: 20px;"
                type="button" value="Perfect!">

                <input 
                style="
                background-color: darkred;
                color: white;
                width: 50%;
                height: 50px;
                border-radius: 10px;
                border-color: transparent;
                font-family: sans-serif;
                font-weight: 400;
                font-size: 20px;"
                type="button" value="No, this is not!">

                </div>

                
            </form>
        </div>

        </div>
    </div>
</body>
</html>