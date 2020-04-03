<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Null Coalescing</title>
    </head>
    <body>
        <h2>Null Coalescing Operator</h2>
        <?php
            $ho ="Kim";
            $ten ="Taeyeon";
            $ho2 = $hocianam ?? "Seo";
            $ten2 = $ten ?? "Juhyun";
            
            echo "<p>$ho2 $ten2</p>";
        ?>
    </body>
</html>
