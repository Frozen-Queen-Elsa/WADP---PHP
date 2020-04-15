<!DOCTYPE html>
<!--
sap xep cac phan tu trong mang
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Array Sort</h2>
        <hr>
        <?php
        $team1 = ["Huy", "Thu", "Kim", "Huyen"];
        $team2 = ["Duc", "Vuong", "Binh", "Thu"];
        $team3 = ["Tam", "Quynh", "Bao", "Nhan"];

        $ds = array_merge($team3, $team2, $team1);
        echo "<h2>Danh sach sinh vien truoc khi sap xep</h2>";
        echo "<pre>";
        print_r($ds);
        echo "</pre>";

        echo "<h2>Danh sach sinh vien sau khi sap xep</h2>";
        sort($ds);
        echo "<pre>";
        print_r($ds);
        echo "</pre>";
        ?>
    </body>
</html>
