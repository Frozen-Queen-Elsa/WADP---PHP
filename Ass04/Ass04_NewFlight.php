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
        <title>Add New Flight</title>
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!-- Style.css -->        
        <link href="../css/CodeMau_form.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <section>
                <div class="register">
                    <h2>Nhập Thông Tin Flight</h2>
                    <hr>
                    <form id="formnhap" class="normal_form" action="Ass04_NewFlight_saveDB.php">
                        Aircraft Code :<br> <input type="text" name="txtID" id="txtID" value="SH01" readonly><br><br>

                        Flight Type :<br> 
                        <select name="cbType" id="cbType">
                            <option value="Boeing">Airbus</option>
                            <option value="Airbus">Boeing</option>
                        </select><br><br> 
                        Source :<br> 
                        <select name="cbFrom" id="cbFrom">
                            <option value="Seoul">Seoul</option>
                            <option value="Tokyo">Tokyo</option>
                            <option value="Las Vegas">Las Vegas</option>
                            <option value="Moskow">Moskow</option>
                            <option value="New York">New York</option>
                            <option value="Ho Chi Minh">Ho Chi Minh</option>
                            <option value="Ha Noi">Ha Noi</option>
                            <option value="HongKong">HongKong</option>
                            <option value="Beijing">Beijing</option>
                            <option value="Paris">Paris</option>
                        </select><br><br> 
                        Destination :<br> 
                        <select name="cbTo" id="cbTo">
                            <option value="Tokyo">Tokyo</option>
                            <option value="Seoul">Seoul</option>
                            <option value="Las Vegas">Las Vegas</option>
                            <option value="Moskow">Moskow</option>
                            <option value="New York">New York</option>
                            <option value="Ho Chi Minh">Ho Chi Minh</option>
                            <option value="Ha Noi">Ha Noi</option>
                            <option value="HongKong">HongKong</option>
                            <option value="Beijing">Beijing</option>
                            <option value="Paris">Paris</option>
                        </select><br><br> 
                        Departure Time :<br> <input type="time" name="txtTime" id="txtTime"  value=12:00 required ><br><br>
                        Journey Hours :<br> <input type="number" name="txtHour" id="txtHour"  min=0 max =48 value=3 required<br><br>
                        <input type="submit" name="btnOK" value="Confirm">
                        <input type="reset" name="btnReset" value="Reset">
                    </form>
                    <br><hr><br>
                    <a href="Ass04_FlightControl.php"> >> Flight Control <<</a> <br><br>
                </div>
            </section>
        </div>
         <script>
            document.getElementById("formnhap").onsubmit = function () {

                var Hour = document.getElementById("txtHour").value.trim();
                var From = document.getElementById("cbFrom").value.trim();
                var To = document.getElementById("cbTo").value.trim();
                if (Hour <= 0) {
                    alert("Thời gian phải lớn hơn 0");
                    document.getElementById("txthour").focus();
                    return false;
                }
                if (From == To) {
                    alert("Hai địa điểm không được trùng nhau! Vui lòng chọn lại điểm đi/ điểm đến. ");
                    return false;
                }


            }

        </script>
    </body>
</html>
