<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Uniform</title>
    </head>
    <body>
        <h2>Uniform Variable Syntax PHP</h2>
        <hr>
        <?php
            error_reporting(0);
            function e(){
                echo 'This is e() <br>';
            }
            function f(){
                echo 'This is f() <br>';
                return e;
            }
            function g(){
                echo 'This is g() <br>';
                return f;
            }
            
            g();
            echo '********************** <br>';
            g()();
            echo '********************** <br>';
            g()()();
            echo '********************** <br>';
        ?>
    </body>
</html>
