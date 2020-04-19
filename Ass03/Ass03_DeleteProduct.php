<?php

    //Kiểm tra xem form điều chỉnh trang [Ass03_AdminProduct.php]
    if (isset($_GET["id"]) == FALSE) {
        header("location:Ass03_AdminProduct.php");
        exit();
    }
    
    //Lấy connection
    include_once '../ThuVien/connectDB_phpDB.php';
    
    //Lấy  dữ liệu của form điều chỉnh để lưu lên databse
    $id=$_GET["id"];
    
    
    
    //Viết lệnh update
    $sql ="delete from tbproducts where code = '$id' ;";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE){
        echo "<h3 style='color:blue'>Lỗi sai Xóa thông tin Product</h3>";
        exit();
    }
    else{
    //quay ve lai trang danh sach lop
    header("location:Ass03_AdminProduct.php");
    }
    

?>