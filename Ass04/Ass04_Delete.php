<?php


//Kiểm tra xem form điều chỉnh trang [Ass04_FlightControl.php]
if (isset($_GET["code"]) == FALSE) {
    header("location:Ass04_FlightControl.php");
    exit();
}

//Lấy connection
include_once '../ThuVien/connectDB_phpDB.php';

//Lấy  dữ liệu của form điều chỉnh để lưu lên databse
$code = $_GET["code"];



//Viết lệnh update
$sql = "delete from tbflights where AircraftCode = '$code' ;";

//Thi hành lệnh truy vấn từ biến connection
$r = mysqli_query($link, $sql);

if ($r == FALSE) {
    echo "<h3 style='color:blue'>Lỗi sai Xóa thông tin Flight</h3>";
    exit();
} else {
    //quay ve lai trang danh sach lop
    header("location:Ass04_FlightControl.php");
}
?>