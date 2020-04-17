<?php
    include_once '../ThuVien/connectDB.php';
?>

<!DOCTYPE html>
<!--
    In danh sách các lớp học trong bảng [tbLopHoc]
-->
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Danh Sách Lớp</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            
            <h2>Danh sách các lớp học</h2>
            <a href="Lab07_ThemLop.html">Thêm Lớp</a>
            <hr>
            <table class="table tab-content ">
                <thead>
                    <<tr>
                        <th>Mã Lớp</th>
                        <th>Thời gian nhập học</th>
                        <th>Chương trình</th>
                        <th>Nhập học</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                        $sql="select * from tblophoc";
                        $r= mysqli_query($link, $sql);

                        $a_lophoc= mysqli_fetch_all($r);
                        foreach ($a_lophoc as $item) {
                          echo '<tr>';
                          echo "<td> $item[0] </td>";
                          echo "<td> $item[1] </td>";
                          echo "<td> $item[2] </td>";
                          echo "<td> $item[3] </td>";
                          echo "<td>";
                          echo "<a href='Lab07_XemLop.php?id=$item[0]'>Display</a> | ";
                          echo "<a href='Lab07_SuaLop.php?id=$item[0]'>Edit</a> | ";
                          echo "<a href='Lab07_XoaLop.php?id=$item[0]'>Remove</a>";
                          echo "</td>";
                          echo '</tr>';
    
                        }
                    ?>
                </tbody>
               
            </table>
        <div>
    </body>
</html>
