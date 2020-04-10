<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Global Var</title>
    </head>
    <body>
        <h2>Global Variables</h2>
        <hr>
        <?php
            $n1=100;
            //echo 'n1 = ' .$n1 . '<br>';
            echo "n1 = $n1 <br>";
            f();
            echo "n1 = $n1 <br>";
            //Khai báo hàm f()
            function f() {
                $n2= 10;
                $n3= 20;
                global $n1;
                $n1 = $n2 * $n3;
                echo "<p> Trong hàm f() : <br>";
                echo "<b>n1 = $n1 </b></p>";
            }
        ?>
    </body>
</html>
