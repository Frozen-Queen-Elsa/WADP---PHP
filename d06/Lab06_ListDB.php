<?php
    include_once '../ThuVien/connectDB.php';
?>

<!DOCTYPE html>
<!--
    Liệt kê danh sách các CSDL có trong máy chủ DB MYSQL
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ListDB</title>
    </head>
    <body>
        
        <h2>Danh sách Databases</h2>
        <hr>
        
        <?php
            $query = "Show Databases";
            $r = mysqli_query($link, $query);
            $a_db = mysqli_fetch_all($r);
            
            echo "<pre>";
            print_r($a_db);
            echo "</pre>";
        ?>
    </body>
</html>
