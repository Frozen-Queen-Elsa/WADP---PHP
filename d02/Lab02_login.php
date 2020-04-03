<?php


    
    //Kiểm tra xem trang Lab02_login.html đã được chạy chưa?
    if(isset($_POST["btnOK"])==FALSE){
        //Chưa chạy trang html -> chuyển hướng về trang html
        header("location:Lab02_login.html");
        exit();
    }
    
    /* 
        Lấy dữ liệu đăng nhập trên form của trang lab_02_login.html
    */
    $username=$_POST["txtLogin"];
    $password=$_POST["txtPass"];
    
    echo "<h2>Chào $username , mật khẩu của bạn là $password </h2>";

?>

