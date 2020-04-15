<?php
    include_once '../ThuVien/connectDB.php';
?>

<!DOCTYPE html>
<!--
    Liệt kê danh sách các bảng trong CSDL [1906]
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Danh sách các bảng trong DB [1907DB]</h2>
        <hr>        
        
        <?php
            $sql="show tables from $dbName";
            $r= mysqli_query($link, $sql);
            
            $a_tables= mysqli_fetch_all($r);
            
            foreach ($array as $key => $value) {
                echo $value[0];
            }
            
            echo "<pre>";
            print_r($a_tables);
            echo "</pre>";
        ?>
    </body>
</html>
