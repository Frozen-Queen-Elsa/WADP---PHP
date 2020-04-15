<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>String</title>
    </head>
    <body>
        <?php
            $s1 = "Hoang Minh Tam";
            $s2= "Minh Tam";
            $s3= "T";
            
            echo 's2 ='.$s2."<br>";
            echo 'stroupper :'. strtoupper($s2)."<br>";
            echo "lenght :" . stristr($s2, $s3)."<br>";
            echo "stristr [Tìm chuỗi bắt đầu là T trong chuỗi s2] :" . stristr($s2, $s3)."<br>";
            echo "strrev :". strrev($s2)."<br>";
            
            echo "s2 =".$s2."<br>";
            echo "strpos [Tìm vị trí chữ T trong chuỗi s2] : ". strpos($s2, $s3)."<br>";
            echo "bin2hex : ". bin2hex($s2)."<br>";
            echo " ". strcmp($s1, $s3)."<br>";
            echo " ". strcmp($s2, $s1)."<br>";
        ?>
    </body>
</html>
