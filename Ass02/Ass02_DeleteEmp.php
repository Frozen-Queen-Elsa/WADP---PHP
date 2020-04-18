<?php

    //Kiểm tra xem form điều chỉnh trang [L07_sualop.php]
    if (isset($_GET["id"]) == FALSE) {
        header("location:Ass02_Admin.php");
        exit();
    }
    
    //Lấy connection
    include_once '../ThuVien/connectDB_phpDB.php';
    
    //Lấy  dữ liệu của form điều chỉnh để lưu lên databse
    $id=$_GET["id"];
    
    
    
    //Viết lệnh update
    $sql ="delete from tbemployee where empID = '$id' ;";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE){
        echo "<h3 style='color:blue'>Lỗi sai Xóa thông tin Employeec</h3>";
        exit();
    }
    else{
    //quay ve lai trang danh sach lop
    header("location:Ass02_Admin.php");
    }
    

?>