<!DOCTYPE html>
<html>
    <head>
        <title>WALL-E Kiosk | INNOVUS</title>
    </head>
    <body>
        <?php
        $command = escapeshellcmd('python py/rfid/readCard.py'); 
        $output= shell_exec("$command");
        echo "hello," && $output;
        ?>
    </body>
</html>