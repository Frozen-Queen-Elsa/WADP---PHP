<?php

//Kiểm tra xem form điều chỉnh trang [Ass04_FlightControl.php]
if (isset($_GET["btnOK"]) == FALSE) {
    header("location:Ass04_FlightControl.php");
    exit();
}

//Lấy connection
include_once '../ThuVien/connectDB_phpDB.php';

//Lấy hết dữ liệu của form điều chỉnh để lưu lên databse
$id = $_GET["txtID"];
$type = $_GET["cbType"];
$from = $_GET["cbFrom"];
$to = $_GET["cbTo"];
$time = $_GET["txtTime"];
$hour = $_GET["txtHour"];

echo "code = '$id'<br> type = '$type'<br> from = '$from'<br> to = '$to'<br> time = $time<br> hour = $hour<br>";

//Viết lệnh update

$sql = "UPDATE tbflights SET FType='$type',Source='$from',Destination ='$to',DepTime ='$time',JourneyHrs='$hour' WHERE AircraftCode='$id' ;";

//Thi hành lệnh truy vấn từ biến connection
$r = mysqli_query($link, $sql);
if ($r == FALSE) {
    echo "<h3 style='color:blue'>Lỗi sai Điều Chỉnh thông tin Flight</h3>";
    exit();
} else {
    //quay ve lai trang danh sach Flight Control
    header("location:Ass04_FlightControl.php");
}
?>

