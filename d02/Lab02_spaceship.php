<!DOCTYPE html>

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Spaceship</title>
    </head>
    <body>
        <h2>Spaceship operator PHP</h2>
        <hr>
        <?php
            $x=10;
            $y=3;
            
            echo "<p> $x <=> $y = " . ($x <=> $y) . "</p>";
            echo "<p> $y <=> $x = " . ($y <=> $x) . "</p>";
            echo "<p> $x <=> $x = " . ($x <=> $x) . "</p>";
            
            $s1= "Seohyun";
            $s2= "Taeyeon";
            echo "<p> $s1 <=> $s2 = " . ($s1 <=> $s2) . "</p>";
            echo "<p> $s2 <=> $s1 = " . ($s2 <=> $s1) . "</p>";
            echo "<p> $s1 <=> $s1 = " . ($s1 <=> $s1) . "</p>";
            
            $a1= [1,2,3];
            $a2= [1,2,4];
            $a3= [1,2,2,0];
            echo '<br> a1 =';
            print_r($a1);
            echo '<br> a2 =';
            print_r($a2);
            echo '<br> a3 =';
            print_r($a3);
            
            echo '<p> $a1 <=> $a2 = ' . ($a1 <=> $a2) . '</p>';
            echo '<p> $a2 <=> $a1 = ' . ($a2 <=> $a1) . '</p>';
            echo '<p> $a1 <=> $a1 = ' . ($a1 <=> $a1) . '</p>';
            echo '<p> $a2 <=> $a3 = ' . ($a2 <=> $a3) . '</p>';
            
        ?>
    </body>
</html>
