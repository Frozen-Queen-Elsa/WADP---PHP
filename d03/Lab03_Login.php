<?php
    //Kiểm tra xem trang Lab02_login.html đã được chạy chưa?
    if(isset($_POST["btnOK"])==FALSE){
        //Chưa chạy trang html -> chuyển hướng về trang html
        header("location:Lab03_Login.html");
        exit();
    }
    
    /* 
        Lấy dữ liệu đăng nhập trên form của trang lab03_login.html
    */
    $user=$_POST["txtUser"];
    $pass=$_POST["txtPass"];
    
    
    //Reset biến cookie
    setcookie("taikhoan");
    setcookie("matkhau");
    
    
    if($user=="Seohyun" && $pass=="SNSD"){
        //Đăng nhập thành công
        //Tạo biến cookie, chứa tên và mật mã đăng nhập
        $expire =60+time(); //60s
        setcookie("taikhoan", $user, $expire);
        setcookie("matkhau", $pass, $expire);
        echo "<h2>Chào mừng $user !</h2>";
    }
    else{
        echo "<h2>Tài khoản đăng nhập không hợp lệ !!</h2>";
        echo "<h2>Vui lòng đăng nhập lại hoặc đăng ký tài khoản mới</h2>";
    }
?>

