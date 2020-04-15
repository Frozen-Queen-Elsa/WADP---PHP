<?php

/* 
    * Đây là hàm kết nối 
        * Cơ sở dữ liệu [1907DB], tài khoản đăng nhập : root , pass ko có
        * 
 */

    $serverDB= "localhost:3306";
    $dbName="1907DB";
    $username="root";
    $password="";

    $link= mysqli_connect($serverDB, $username, $password,$dbName);

    if($link==NULL){
        echo "Lỗi sai Kết Nối";
    }
    

?>
