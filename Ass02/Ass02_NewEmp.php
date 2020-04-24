<?php
session_start();
include_once '../ThuVien/connectDB_phpDB.php';
if (isset($_SESSION["id"]) == FALSE) {
    header("location:Ass02_Login.html");
    exit();
}
if ($_SESSION["role"] == 1) {
    header("location:Ass02_Login.html");
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
                    <h2>Nhập Thông Tin Employee</h2>
                    <hr>
                    <form id= "formnhap" class="normal_form" action="Ass02_NewEmp_saveDB.php">
                        Employee ID : <input type="text" name="txtID" id="txtID" value="E10" required><br><br>
                        Pass : <input type="password" name="txtPass" id="txtPass" value="abc" required><br><br>
                        Full Name : <input type="text" name="txtName" id="txtName"  value="TaylorSwift" required><br><br>
                        Email : <input type="email" name="txtMail" id="txtMail"  value="taylor@gmail.com" required><br><br>
                        Role : <input type="number" name="txtRole" id="txtRole"  min="1" max ="2" value=2 required><br><br>
                        Salary : <input type="number" name="txtSal" id="txtSal"  min="100" max ="10000" value=9999 required><br><br>
                        <input type="submit" name="btnOK" value="Create">
                        <input type="reset" name="btnReset" value="Reset">
                    </form>
                    <br>
                    <a href="Ass02_Admin.php">List Of Employee</a> <br><br>
                </div>
            </section>
        </div>
        <script>
            document.getElementById("formnhap").onsubmit = function () {

                var id = document.getElementById("txtID").value;
                var name = document.getElementById("txtName").value;
                var password = document.getElementById("txtPassword").value;
                var mail = document.getElementById("txtMail").value;
                if (id.trim().length == 0) {
                    alert("ID Employee không được để trống");
                    document.getElementById("txtName").focus();
                    return false;
                }
                if (name.trim().length == 0) {
                    alert("Tên Employee không được để trống");
                    document.getElementById("txtName").focus();
                    return false;
                }
                if (password.trim().length == 0) {
                    alert("Password không được để trống");
                    document.getElementById("txtAuthor").focus();
                    return false;
                }
                if (mail.trim().length == 0) {
                    alert("Email không được để trống");
                    document.getElementById("txtMail").focus();
                    return false;
                }

            }

        </script>
    </body>
</html>
