<!DOCTYPE html>
<html>
    <head>
        <title>WALL-E Kiosk | INNOVUS</title>
    </head>
    <body>
        <?php $output= exec("py/rfid/readCard.py"); ?>
        <h1><?php echo $output; ?></h1>
    </body>
</html>