<?php
    
    //Kiểm tra xem form điều chỉnh trang [Ass03_AdminProduct.php]
    if (isset($_GET["btnOK"]) == FALSE) {
        header("location:Ass03_AdminProduct.php");
        exit();
    }
    
    //Lấy connection
    include_once '../ThuVien/connectDB_phpDB.php';
    
    //Lấy hết dữ liệu của form điều chỉnh để lưu lên databse
        $id = $_GET["txtID"];
        $name = $_GET["txtName"];
        $price = $_GET["txtPrice"];
        $desc = $_GET["txtDesc"];
        
    
        
    //Viết lệnh update
    $sql ="UPDATE tbproducts SET name='$name',price=$price, descriptions ='$desc' WHERE code='$id' ;";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    if($r==FALSE){
        echo "<h3 style='color:blue'>Lỗi sai Điều Chỉnh thông tin Product</h3>";
        exit();
    }
    else{
    //quay ve lai trang danh sach lop
    header("location:Ass03_AdminProduct.php");
    }
    
    
?>

