<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Closure</title>
    </head>
    <body>
        <h2>Closure call PHP</h2>
        <hr>
        <?php
            class Greeting{
                private $word ="Hello, ";
                private $address ="Seoul";
                
            }
            
            class Farewell{
                private $word ="Goodbye, ";
            }
            
            $c = function($name){
                echo "$this->word $name . <br>";
            };
            
            $o1 = new Greeting();
            $o2 = new Farewell;
            
            $c->call($o1, "Taeyeon");
            $c->call($o2, "Seohyun");
        
        ?>
    </body>
</html>
