<?php
    
    //Kiểm tra xem form điều chỉnh trang [L07_sualop.php]
    if (isset($_GET["btnOK"]) == FALSE) {
        header("location:Lab07_DanhSachLop.php");
        exit();
    }
    
    //Lấy connection
    include_once '../ThuVien/connectDB.php';
    
    //Lấy hết dữ liệu của form điều chỉnh để lưu lên databse
    $id=$_GET["txtID"];
    $tg=$_GET["txtTG"];
    $ct=$_GET["txtCT"];
    $hp=$_GET[txtHP];
    
    //Viết lệnh update
    $sql ="update tbLopHoc set TGNhapHoc= '$tg', ChuongTrinh='$ct',HocPhi=$hp where MaLop='$id' ;";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE){
        echo "<h3 style='color:blue'>Lỗi sai Điều Chỉnh thông tin lớp học</h3>";
        exit();
    }
    else{
    //quay ve lai trang danh sach lop
    header("location:Lab07_DanhsachLop.php");
    }
    
    
?>

