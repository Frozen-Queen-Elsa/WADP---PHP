<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Generator</title>
    </head>
    <body>
        <h2>Generator</h2>
        <hr>
        <?php
            srand();
            
            function  TaoSoNgauNhien($n){
                for($i=0;$i<$n;$i++){
                    $r= rand(10, 100);  //Tạo số ngẫu nhiên
                    yield $r;
                }
                return -1;
            }
            $ds= TaoSoNgauNhien(10);
            echo '<h3>10 số ngẫu nhiên</h3>';
            echo '<ol>';
                foreach ($ds as $item){
                    echo "<li>   $item </li>";
                }
            echo '</ol>';
            echo '<b> Giá trị return : ' . $ds->getReturn() . '<br>' ;
            ?>
    </body>
</html>
