<?php
    include_once '../ThuVien/connectDB.php';
?>

<!DOCTYPE html>
<!--
    In danh sách các lớp học trong bảng [tbLopHoc]
-->
<html>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            
            <h2>Danh sách các lớp học</h2>
            <hr>
            <table class="table tab-conten ">
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
                          echo '</tr>';
    
                        }
                    ?>
                </tbody>
               
            </table>
        <div>
    </body>
</html>
