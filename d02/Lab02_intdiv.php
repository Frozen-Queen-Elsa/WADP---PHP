<?php
    $x=10;
    $y=3;
    $z=$x/$y;
    echo "";
        
    /*Muốn trên màn hình : 10/3=3.33333333*/
    echo "<h3>$x / $y =$z </h3>";
        
    $w=(int)($x/$y);
    echo "<h3> (int)($x / $y) =$w </h3>";
    
    $v= intdiv($x,$y);
    echo "<h3> intdiv($x,$y)=$v</h3>";
?>

