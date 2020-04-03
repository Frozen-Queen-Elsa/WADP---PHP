<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Uniform 2</title>
    </head>
    <body>
        <h2>Uniform Variable Syntax PHP 2</h2>
        <hr>
        <?php
            $vehicle ="car";
            $car = "Toyota";
            
            echo '$car = ' .$car .'<br>';
            echo '$vehicle = '.$vehicle . '<br>';
            echo '$$vehicle = ' .$$vehicle . '<br>';
        ?>
    </body>
</html>
