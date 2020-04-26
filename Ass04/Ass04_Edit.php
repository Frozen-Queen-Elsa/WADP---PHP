<?php
//Kiểm tra xem trang này có được chuyển từ trang [Ass03_AdminProduct.php]
if (isset($_GET["code"]) == FALSE) {
    //Quay về lại trang danh sách lớp
    header("location:Ass04_FlightControl.php");
    exit();
}

include_once '../ThuVien/connectDB_phpDB.php';
//Layh61 mã lớp muốn xem thông tin chi tiết
$code = $_GET["code"];

//Viết câu lệnh sql,Trích mẫu tin có mã trùng với biến id
$sql = "select * from tbflights where aircraftcode like '$code' ; ";

//Thi hành lệnh truy vấn từ biến connection
$r = mysqli_query($link, $sql);

if ($r == FALSE || mysqli_num_rows($r) == 0) {
    echo "<h3>Không tồn tại Flight Code</h3>";
    exit();
}

//Lấy thông tin lớp học ra
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
        <!-- Grid.css -->
        <link rel="stylesheet" href="../css/grid.css">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/cc7d5b8894.js" crossorigin="anonymous"></script>
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!-- Style.css -->        
        <link href="../css/CodeMau_form.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap.css -->        
        <!--        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <title>Edit Flight</title>
    </head>
    <body>
        <div class="container">
            <section>
                <div class="register">
                    <h2>Thay đổi thông tin Flight</h2>
                    <hr>

                    <form id="formnhap" class="normal_form" action="Ass04_Edit_saveDB.php">
                        Aircraft Code :<br> <input type="text" name="txtID" id="txtID" value="<?php echo $flight[0] ?>" readonly><br><br>

                        Flight Type :<br> 
                        <select name="cbType" id="cbType">
                            <option value="Airbus">Airbus</option>
                            <option value="Boeing">Boeing</option>
                        </select><br><br>  
                        Source :<br> 
                        <select name="cbFrom" id="cbFrom">
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
                        Destination :<br>
                        <select name="cbTo" id="cbTo">
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
                        Departure Time :<br> <input type="time" name="txtTime" id="txtTime"  value=<?php echo $flight[4] ?> required ><br><br>

                        Journey Hours :<br> <input type="number" name="txtHour" id="txtHour"  min=0 max =48 value=<?php echo $flight[5] ?> required<br><br>
                        <input type="submit" name="btnOK" value="Confirm">
                        <input type="reset" name="btnReset" value="Reset">
                    </form>
                    <br>
                    <hr>
                    <br>
                    <a href='Ass04_FlightControl.php'>Về lại trang trước </a>


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
