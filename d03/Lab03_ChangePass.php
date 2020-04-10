<!DOCTYPE html>
<!--
    Trang cho phép các tk đang nhập rồi (dựa vào biến cookie), được quyền Change Password
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
            <?php
                //Kiểm tra người dùng đã đăng nhập chưa
                if(isset($_COOKIE["taikhoan"])==FALSE){
                    //Chưa đăng nhập  -> Chuyển về trang đăng nhập
                    header("location:Lab03_Login.html");
                    exit();
                }
                $user=$_COOKIE["taikhoan"];
            ?>
            
        <div class="container">
            <h2>Change Password</h2>
            <hr>
            <!-- Form change password  -->
            <form action="Lab03_CheckChangePass.php" method="POST">
                Username:
                    <input type="text" name="txtUser" value="<?php echo $user ?>" required> <br><br>
                Old Password: 
                    <input type="password" name="txtPass" required> <br><br>
                New Password: 
                    <input type="password" name="txtNewPass" required> <br><br>    
                    <input type="submit" name="btnOK" value="Login">
                    <input type="reset" name="btnReset" value="Reset">
            </form>
        </div>
    </body>
</html>
