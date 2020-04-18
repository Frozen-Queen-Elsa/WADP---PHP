<?php
    include_once '../ThuVien/connectDB_phpDB.php';
    
?>

<!DOCTYPE html>
<!--
    Kiểm tra tài khoản đang nhập trong trang [Ass02_Login] có hợp lệ không?
    Bằng cách đối chiếu bộ dữ liệu nhập với các mẩu tin trong bảng [tbUser]
    Nếu có, thông báo thành công. Ngược lại thông báo thất bại
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        
    </head>
    <body>
        <?php
        //kiem tra trang [L06_login.html] da duoc chay chua
        if (isset($_POST["btnOK"]) == FALSE) {
            header("location:Ass02_Login.html");
            exit();
        }
        $id = $_POST["txtID"];
        $pass = $_POST["txtPass"];
        $sql = "select * from tbemployee where empID='$id' and password='$pass'";
       
        //thuc hien linh truy van SQL
        $r = mysqli_query($link, $sql);
       
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if (mysqli_num_rows($r) > 0) {
            $emp = mysqli_fetch_row($r);
            if($emp[4]==1){
                header("location:Ass02_Staff.php");
            }
            else{
                header("location:Ass02_Admin.php");
            }
        } else {
            echo "<h3 style='color:red'>Tài khoản đăng nhập không hợp lệ . <br>Xin vui lòng nhập lại !</h3>";
        }
        ?>
    </body>
</html>
