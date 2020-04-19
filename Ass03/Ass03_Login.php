<?php
    include_once '../ThuVien/connectDB_phpDB.php';
    
?>

<!DOCTYPE html>
<!--
    Kiểm tra tài khoản đang nhập trong trang [Ass03_Login] có hợp lệ không?
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
        //kiem tra trang [L06_login.html] da duoc chay chua
        if (isset($_POST["btnOK"]) == FALSE) {
            header("location:Ass03_Login.html");
            exit();
        }
        $id = $_POST["txtID"];
        $pass = $_POST["txtPass"];
        $sql = "select * from tbusers where username='$id' and password='$pass'";
       
        //thuc hien linh truy van SQL
        $r = mysqli_query($link, $sql);
       
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if (mysqli_num_rows($r) > 0) {
            $emp = mysqli_fetch_row($r);
            if($emp[4]==1){
                header("location:Ass03_ViewProduct.php");
            }
            else{
                header("location:Ass03_AdminProduct.php");
            }
        } else {
            echo "<h3 style='color:red'>Tài khoản đăng nhập không hợp lệ . <br>Xin vui lòng nhập lại!</h3>";
            
        }
        ?>
    </body>
</html>
