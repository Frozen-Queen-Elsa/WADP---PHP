<!DOCTYPE html>
<!--
Noi nhieu mang voi nhau
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>array</title>
    </head>
    <body> 
        <h2>Array Merge</h2>
        <hr>
        <?php
        $team1 = ["Huy", "Thu", "Kim", "Huyen"];
        $team2 = ["Duc", "Vuong", "Binh", "Thu"];
        $team3 = ["Tam", "Quynh", "Bao", "Nhan"];

        echo "<h3>Danh sach Team 1</h3>";
        echo "<ol>";
        foreach ($team1 as $sv) {
            echo "<li> $sv </li>";
        }
        echo "</ol>";
        // tao mot mang chua 3 mang
        $studentList = array_merge($team1, $team2, $team3);
        echo "<h3>Danh sach sinh vien </h3>";
        echo "<ol>";
        foreach ($studentList as $sv) {
            echo "<li> $sv </li>";
        }
        echo "</ol>";
        ?>
    </body>
</html>
