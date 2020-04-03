<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Scalar Type 2</title>
    </head>
    <body>
        <h2>Scalar Type Demo 2</h2>
        <h3>With Parameter Type Declaration</h3>
        <hr>
        <?php
            function cong(int $x,int $y){
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
