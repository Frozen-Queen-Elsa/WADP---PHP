<?php

    session_start();
    
    //Đọc giá trị các biến session đã được lưu giữ 
    $ten =  $_SESSION["username"];
    $tuoi = $_SESSION["age"];
    
    echo "<h2>Hello, $ten</h2>";
    echo "<p>Năm nay bạn $tuoi phải không ?</p>";

?>
