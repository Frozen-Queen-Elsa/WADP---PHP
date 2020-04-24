<?php
session_start();
include_once '../ThuVien/connectDB_phpDB.php';
if (isset($_SESSION["id"]) == FALSE) {
    header("location:Ass03_Login.html");
    exit();
}
if ($_SESSION["role"] == 1) {
    header("location:Ass03_Login.html");
    exit();
}
$id = $_SESSION["id"];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Emp</title>
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!-- Style.css -->        
        <link href="../css/CodeMau_form.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <section>
                <div class="register">
                    <h2>Nhập Thông Tin Product</h2>
                    <hr>
                    <form id="formnhap" class="normal_form" action="Ass03_NewProduct_saveDB.php">
                        Product Name : <input type="text" name="txtName" id="txtName"  value="Macha" required><br><br>       
                        Price : <input type="number" name="txtPrice" id="txtPrice"  min="10000" max ="200000" value=60000 required><br><br>
                        Description : <input type="text" name="txtDesc" id="txtDesc"   value='Box' ><br><br>
                        <input type="submit" name="btnOK" value="Create">
                        <input type="reset" name="btnReset" value="Reset">
                    </form>
                    <br>
                    <a href="Ass03_AdminProduct.php">List Of Product</a> <br><br>
                </div>
            </section>
        </div>
        <script>
            document.getElementById("formnhap").onsubmit = function () {

                
                var name = document.getElementById("txtName").value;
                
                
                if (name.trim().length == 0) {
                    alert("Tên Product không được để trống");
                    document.getElementById("txtName").focus();
                    return false;
                }
                
                
            }

        </script>
    </body>
</html>
