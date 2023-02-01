<!DOCTYPE html>
<html>
    <head>
        <title>WALL-E Kiosk | INNOVUS</title>
    </head>
    <body>
        <?php
        $command = escapeshellcmd('python py/rfid/readCard.py'); 
        $output= "hello";
        echo $output;
        ?>
    </body>
</html>