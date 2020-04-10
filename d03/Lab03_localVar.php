<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Local Var</title>
    </head>
    <body>
        <h2>Local Variables</h2>
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
                $n1= $n2 * $n3;
                echo "<p> Trong hàm f() : <br>";
                echo "n1 = $n1 </p>";
            }
        ?>
    </body>
</html>
