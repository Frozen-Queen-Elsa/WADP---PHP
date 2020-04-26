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
if (isset($_GET["code"]) == FALSE) {
    header("location:Ass04_FlightControl.php");
    exit();
}
$code = $_GET["code"];
$sql = "select * from tbflights where AircraftCode like '$code' ; ";

//Thi hành lệnh truy vấn từ biến connection
$r = mysqli_query($link, $sql);

if ($r == FALSE || mysqli_num_rows($r) == 0) {
    echo "<h3 style='color:blue'>Lỗi Sai !!! Không thể xem thông tin lớp học !!</h3>";
    exit();
}

//Lấy thông tin flight ra
$flight = mysqli_fetch_row($r);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="Ass04_Table.css" rel="stylesheet" type="text/css"/>
        <title>Detal Flight</title>
        <link href="Ass04_Table.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="container">
            <div class="register">
                <h2>Thông tin lớp</h2>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Departure time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from tbflights where AircraftCode = '$code' ;";
                        $r = mysqli_query($link, $sql);
                        $a_flight = mysqli_fetch_all($r);

                        foreach ($a_flight as $item) {
                            echo '<tr>';
                            echo "<td><b> $item[0] </b></td>";
                            echo "<td> $item[2] </td>";
                            echo "<td> $item[3] </td>";
                            echo "<td> $item[4] </td>";
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>



            </div>

        </div>
    </body>
</html>
