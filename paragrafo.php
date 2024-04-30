<?php
$paragrafo= $_GET['paragrafo'];
$censura = $_GET['censura'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paragrafo</title>
</head>
<body>
     
    <p>
        TESTO: <b><?php echo $paragrafo; ?></b>   <?php echo strlen($paragrafo); ?>           
    </p>
    
    <p>
        TESTO CON CENSURA: <b><?php echo str_replace($censura, '***', $paragrafo); ?></b> <?php echo strlen($paragrafo); ?>
    </p>
</body>
</html>