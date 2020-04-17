<?php 
    //Kiểm tra xem trang này có được chuyển từ trang [Lab07_DanhSachLop.php]
    if(isset($_GET["id"])==FALSE){
        //Quay về lại trang danh sách lớp
        header("location:Lab07_DanhSachLop.php");
        exit();
    }
    
    //Lấy connection
    include_once '../ThuVien/connectDB.php';
    
    //Lấy mã lớp muốn xem thông tin chi tiết
    $id=$_GET["id"];
    
    //Viết câu lệnh sql,Trích mẫu tin có mã lớp học trùng với biến id
    $sql ="select * from tbLopHoc where Malop like '$id' ; ";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE|| mysqli_num_rows($r) == 0){
        echo "<h3 style='color:blue'>Lỗi Sai !!! Không thể xem thông tin lớp học !!</h3>";
        exit();
    }
    
    //Lấy thông tin lớp học ra
    $lop = mysqli_fetch_row($r);
    
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Thông tin lớp</h2>
        <hr>
        <?php
            echo "<p><b>Mã Lớp Học:</b> $lop[0]</p>";
            echo "<p><b>Thời Gian Nhập Học:</b> $lop[1]</p>";
            echo "<p><b>Chương Trình:</b> $lop[2]</p>";
            echo "<p><b>Học Phí:</b> $lop[3]</p>";
        ?>
        <hr>
        <a href='L07_danhsachLop.php'>Ve lai trang truoc </a>
    </body>
</html>
