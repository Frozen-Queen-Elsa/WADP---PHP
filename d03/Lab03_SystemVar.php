<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>System Var</title>
    </head>
    <body>
        <h2>System Variables</h2>
        <hr>
        <?php
            echo "<b>SERVER_SOFTWARE : </b> ".$_SERVER['SERVER_SOFTWARE'] ."<br>";
            echo "<b>SERVER_NAME : </b> ".$_SERVER['SERVER_NAME'] ."<br>";
            echo "<b>SERVER_PROTOCOL : </b> ".$_SERVER['SERVER_PROTOCOL'] ."<br>";
            echo "<b>SERVER_PORT : </b> ".$_SERVER['SERVER_PORT'] ."<br>";
            echo "<b>SERVER_BROWSER : </b> ".$_SERVER['SERVER_BROWSER'] ."<br>";
        ?>
    </body>
</html>
