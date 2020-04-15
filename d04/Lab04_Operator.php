<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Operator</title>
    </head>
    <body>
        <div class="container">
            <h2>Operators</h2>
        <?php
            $x=57;$y=26;
            
            echo '<h3>Phép toán số học</h3>';
            echo "<p>$x / $y = ". ($x/$y)."</p>";
            echo "<p>intdiv ($x / $y) = ". intdiv($x,$y)."</p>";
            
            echo "<p>$x % $y = ". ($x%$y)."</p>";
            
            echo '<h3>Phép toán luận lý nhị phân (bitwise)</h3>';
            echo "<p> $x & $y = " . ($x&$y). "</p>";
            echo "<p> $x | $y = " . ($x|$y). "</p>";
            echo "<p> $x ^ $y = " . ($x^$y). "</p><br>";
            
            $n=3;
            echo '<h3>Phép toán luận lý dịch chuyển(shift bitwise)</h3>';
            echo "<p> $x << $n = " . ($x<<$n). "</p>";
            echo "<p> $x >> $n = " . ($x>>$n). "</p>";
            
//            
//            57 = 0011 1001(biểu diễn nhị phân 57)
//            26 = 0001 1010 (biểu diễn nhị phân 26)
//            24 = 0001 1000 (bitwise AND) 2^3 + 2^4
//            -------------------------------------
//            57 = 0011 1001(biểu diễn nhị phân 57)
//            26 = 0001 1010 (biểu diễn nhị phân 26)
//            59 = 0011 1011 (bitwise OR) 2^0 + 2^1 + 2^3 + 2^4 + 2^5
//            -------------------------------------
//            57 = 0011 1001(biểu diễn nhị phân 57)
//            26 = 0001 1010 (biểu diễn nhị phân 26)
//            35 = 0010 0011 (bitwise XOR) 2^5 + 2^1 + 2^0 = 35
//            -------------------------------------
//            DỊCH CHUYỂN SANG TRÁI 3 bit (<<)
//            57 = 0011 1001(biểu diễn nhị phân 57)
//            (001)1100 1000 (left shift 3 bits) 
//            0001 1100 1000  2^3 + 2^6 + 2^7 + 2^8
//                            tương đương phép nhân : 57*2^3 = 57*8
//            -------------------------------------
//            DỊCH CHUYỂN SANG PHẢI 3 bit (>>)
//            57 = 0011 1001(biểu diễn nhị phân 57)
//                 0000 0111(001) (Right shift 3 bits)
//                            tương đương phép chia : 57/2^3 = 57/8 = 7(dư 1)
//            -------------------------------------
//            
            
        ?>
        </div>
    </body>
</html>
