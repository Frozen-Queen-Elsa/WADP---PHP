<!DOCTYPE html>
<!--
tao mang ket hop, co key la chuoi dat trong dau ""
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Associate Array Demo</h2>
        <hr>
        <p>Tao mang ket hop</p>
        <?php
        error_reporting(0);
                $a = array("sv03"=>"Dung","sv01"=> "Thu","sv02"=> "Kim","sv04"=> "An","sv05"=> "Huyen","sv06"=> "Bao","sv09"=> "Tan","sv07"=> "Trung","sv08"=> "Nghia");
        echo "<h3>Danh sach sinh vien</h3>";
        echo "<pre>";
        print_r($a);
        echo "<pre>";
        $dem = count($a);
        echo "<h3> Danh sach sinh vien bang vong lap for</h3>";
        for ($i = 0; $i < $dem; $i++) {
            $item = each($a);
            echo "maso : " . $item[key] . ", ";
            echo "ten: " . $item[value] ."<br>";
        }
        ?>
    </body>
</html>
