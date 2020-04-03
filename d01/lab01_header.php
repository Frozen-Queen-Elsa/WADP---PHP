<!DOCTYPE html>
<!--
    Demo hàm header(), chuyển hướng trang web bằng location
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>DEMO về hàm header() </h2>
        <hr>
        <p>Bấm vào link để đọc báo </p> 
        <?php
        $gio=date('H');
            echo 'Bây giờ là : '.date("H") . "<br/>";
            if($gio >7){
                echo '<p>Muộn rồi !! Làm việc đi !!</p>';
            }
            else{
                echo '<p>Đọc báo thôi !</p>';
                header("location:https://zingnews.vn/");
            }
        ?>
    </body>
</html>
