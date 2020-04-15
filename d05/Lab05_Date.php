<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Date</title>
    </head>
    <body>
        <h2>Date Demo</h2>
        <hr>
        <?php
            echo 'Today is : '.date("l")."<br>";    // Chữ l chứ ko phải là số 1 nhé
            
            //Set lại múi giờ   
            date_default_timezone_set("Asia/Saigon");
            $currentDate =getdate();
        
            echo "<pre>";
            print_r($currentDate);
            echo "</pre>";
            
            echo"<h3>Today : </h3>";
            echo $currentDate["weekday"]."<br>";
            echo $currentDate["month"]."<br>"; 
            echo $currentDate["year"]."<br>";
            
            //Hàm đổi chuỗi thành date
            $s_bd="19920309";
            $bd= strtotime($s_bd);
           
            $ngay=date("d",$bd);
            $thang=date("m",$bd);
            $nam=date("Y",$bd);
            echo "<p>My birthday : $ngay / $thang / $nam</p>"
        ?>
    </body>
</html>
