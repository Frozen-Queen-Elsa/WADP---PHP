<?php
session_start();
include_once '../ThuVien/connectDB_phpDB.php';
?>

<!DOCTYPE html>
<!--
    Kiểm tra tài khoản đang nhập trong trang [Ass04_Login] có hợp lệ không?
    Bằng cách đối chiếu bộ dữ liệu nhập với các mẩu tin trong bảng [tbusers]
    Nếu có, thông báo thành công. Ngược lại thông báo thất bại
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>

    </head>
    <body>
        <?php
        //kiem tra trang [Ass04_login.html] da duoc chay chua
        if (isset($_POST["btnOK"]) == FALSE) {
            header("location:Ass04_Login.html");
            exit();
        }
        $id = $_POST["txtID"];
        $pass = $_POST["txtPass"];
        $sql = "select * from tbusers where username='$id' and password='$pass'";

        //thuc hien linh truy van SQL
        $r = mysqli_query($link, $sql);

        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if (mysqli_num_rows($r) > 0) {
            $product = mysqli_fetch_row($r);
            $_SESSION ["id"] = $product[0];
            $_SESSION ["role"] = $product[2];
            if ($product[2] == 1) {
                header("location:Ass04_View.php");
            } else {
                header("location:Ass04_FlightControl.php");
            }
        } else {
            echo "<h3 style='color:red'>Tài khoản đăng nhập không hợp lệ . <br>Xin vui lòng nhập lại!</h3>";
            unset($_SESSION ["id"]);
            unset($_SESSION ["role"]);
        }
        ?>
    </body>
</html>
