<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Increase</title>
    </head>
    <body>
        <h2>Increase Operator</h2>
        <hr>
        <?php
            $x=20;
            echo "<h3> x = $x </h3>";
            for($i=1;$i<=5;$i++){
                echo '$i = '.$i . ", ++x = ".++$x."<br>";
            }
            
            $x=20;
            echo "<h3> x = $x </h3>";
            for($i=1;$i<=5;$i++){
                echo '$i = '.$i . ", x++ = ".$x++."<br>";
            }
            
            echo "<hr>";
            $s="X";
            echo "<h3> s= $s </h3>";
            for($i=1;$i<=5;$i++){
                echo '$i = '.$i . ", ++s = ".++$s."<br>";
            }
        ?>
    </body>
</html>
