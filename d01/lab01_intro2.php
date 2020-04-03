<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Welcome to PHP Language</h2>
        <hr>
        <?php
            echo '<p>Hello <b>Ms.Seohyun</b> </p>';
            $format ="M d Y";
            echo '<p><i> Today is'. gmdate($format) . "</i></p>";
            
        ?>
    </body>
</html>
