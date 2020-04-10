<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Statuc </title>
    </head>
    <body>
        <h2>Statuc Variables</h2>
        <hr>
        <?php
        function fnCount(){
            $x = 1;
            echo "<h3>fnCount(): x = $x </h3>";
            $x += 10;
        }
        
        function fnCount2(){
            static $x = 1;
            echo "<h3>fnCount2(): static x = $x </h3>";
            $x += 10;
        }
        fnCount(); // goi ham fnCount() lan nhat
        fnCount(); // goi ham fnCount() lan hai
        fnCount(); // goi ham fnCount() lan ba
        
        echo "*********";
        fnCount2(); // goi ham fnCount2() lan nhat
        fnCount2(); // goi ham fnCount2() lan hai
        fnCount2(); // goi ham fnCount2() lan ba
        ?>

    </body>
</html>
