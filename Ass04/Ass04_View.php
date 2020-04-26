<?php
    session_start();
    include_once '../ThuVien/connectDB_phpDB.php';
    
    
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>List Of Flights</title>
<!--        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link href="Ass04_Table.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>List Of Flights</h2>
            <?php
                if(isset($_SESSION["id"])==FALSE){
                echo "<a href='Ass04_Login' style='margin-left: 70%'>Login</a>";
                exit();
                }
                if($_SESSION["role"]==2){
                header("location:Ass04_FlightControl.html");
                exit();
                }
            ?>
            
            
            
            <hr>
            
            <table class="table tab-content ">
                <thead>
                    <tr>
                        <th>AircraftCode</th>
                        <th>FType</th>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>DepTime</th>
                        <th>Hours</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="select * from tbflights";
                        $r= mysqli_query($link, $sql);

                        $a_flight= mysqli_fetch_all($r);
                        foreach ($a_flight as $item) {
                          echo '<tr>';
                          echo "<td> $item[0] </td>";
                          echo "<td> $item[1] </td>";
                          echo "<td> $item[2] </td>";
                          echo "<td> $item[3] </td>";
                          echo "<td> $item[4] </td>";
                          echo "<td> $item[5] </td>";
                          
                          echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            
            
            
        </div>
    </body>
</html>
