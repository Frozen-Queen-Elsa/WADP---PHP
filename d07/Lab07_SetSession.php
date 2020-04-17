<?php
    session_start();
    
    //Tạo biến session username,age
    $_SESSION["username"] = "Kim Taeyeon";
    $_SESSION["age"] = 30;
            
?>

<!DOCTYPE html>
<!--
    Start session và tạo biến session[name]
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Set Session</title>
    </head>
    <body>
        <h2>Session DEMO</h2>
        <hr>
        <a href="Lab07_GetSession.php">Click me</a>
        
    </body>
</html>
