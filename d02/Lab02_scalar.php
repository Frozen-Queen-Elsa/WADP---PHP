<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scalar Type</title>
    </head>
    <body
        <h2>Scalar Type Demo</h2>
        <h3>Without Declaration</h3>
        <hr>
        <?php
            function cong($x,$y){
                echo "$x + $y = " . ($x + $y) . "<br>";
            }
            
            $n1=5;
            $n2=10;
            cong($n1,$n2);
            
            $n3=12.345;
            cong($n1,$n3);
            
            $n4= "345";
            cong($n1,$n4);
        ?>
    </body>
</html>
