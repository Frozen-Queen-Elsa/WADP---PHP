<?php
    include_once '../ThuVien/connectDB.php';
?>

<!DOCTYPE html>
<!--
    Kiểm tra tài khoản đang nhập trong trang [Lab06_Login] có hợp lệ không?
    Bằng cách đối chiếu bộ dữ liệu nhập với các mẩu tin trong bảng [tbUser]
    Nếu có, thông báo thành công. Ngược lại thông báo thất bại
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //kiem tra trang [L06_login.html] da duoc chay chua
        if (isset($_POST["btnOK"]) == FALSE) {
            header("location:Lab06_Login.html");
            exit();
        }
        $tenDN = $_POST["txtUser"];
        $mkDN = $_POST["txtPass"];
        $sql = "select * from tbUser where user='$tenDN' and password='$mkDN'";
       
        //thuc hien linh truy van SQL
        $r = mysqli_query($link, $sql);
        
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if (mysqli_num_rows($r) > 0) {
            echo "<h2 style='color:blue'>Chúc mừng ! Bạn đã đăng nhập thành công !</h2>";
        } else {
            echo "<h3 style='color:red'>Tài khoản đăng nhập không hợp lệ . <br>Xin vui lòng nhập lại !</h3>";
        }
        ?>
    </body>
</html>
