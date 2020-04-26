<?php
session_start();
include_once '../ThuVien/connectDB_phpDB.php';
if (isset($_SESSION["id"]) == FALSE) {
    header("location:Ass04_Login.html");
    exit();
}
if ($_SESSION["role"] == 1) {
    header("location:Ass04_Login.html");
    exit();
}
$id = $_SESSION["id"];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        if (isset($_GET["btnOK"]) == FALSE) {
            header("location:Ass04_NewFlight.php");
            exit();
        }


        $id = $_GET["txtID"];
        $type = $_GET["cbType"];
        $from = $_GET["cbFrom"];
        $to = $_GET["cbTo"];
        $time = $_GET["txtTime"];
        $hour = $_GET["txtHour"];
       
        $sql = "INSERT INTO tbflights(AircraftCode, FType, Source,Destination,DepTime,JourneyHrs) VALUES ('$id','$type','$from','$to','$time','$hour') ; ";
        
        
        //thuc hien lenh truy van SQL
        $r = mysqli_query($link, $sql);

        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if ($r == TRUE) {
            //Open trang danh sách Flight Control
            header("location:Ass04_FlightControl.php");
            exit();
        }
        
        echo "<h3>Lỗi sai DB : Không thể thêm Flight mới !</h3>";
        ?>




    </body>
</html>
