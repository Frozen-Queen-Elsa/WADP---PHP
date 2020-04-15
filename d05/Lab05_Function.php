<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Function</h2>
        <hr>
        <?php
            //Hàm f1, nhân đôi số x
            function f1($x) {
                $x=$x*$x; //pow($x,2)
                echo "Trong hàm f1(),x = $x <br>";
            }
            
            //Hàm f2, nhân đôi số x- trả về giá trị bp
            function f2(&$x) {
                $x=$x*$x; //pow($x,2)
                echo "Trong hàm f2(),x = $x <br>";
            }
            
            function f3(&$x=7) {
                $x=$x*$x; //pow($x,2)
                echo "Trong hàm f2(),x = $x <br>";
            }
            
            $n=5;
            echo "n = $n <br>";
            
            f1($n);
            echo ">> Sau khi gọi f1(n), n = $n<br><br>";
            
            f2($n);
            echo ">> Sau khi gọi f2(n), n = $n<br><br>";
            
            $n=5;
            f3($n);
            echo ">> Sau khi gọi f3(n), n = $n<br><br>";
            
             f3();
            echo ">> Sau khi gọi f3(), n = $n<br><br>";
            
        ?>
    </body>
</html>
