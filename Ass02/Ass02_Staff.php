<?php
    session_start();
    include_once '../ThuVien/connectDB_phpDB.php';
    if(isset($_SESSION["id"])==FALSE){
        header("location:Ass02_Login.html");
        exit();
    }
    if($_SESSION["role"]!=1){
        header("location:Ass02_Login.html");
        exit();
    }
  
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Employee List</title>
<!--        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link href="Ass02_Table.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Employee List</h2>
            
            
            <hr>
            
            <table class="table tab-content ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="select * from tbemployee";
                        $r= mysqli_query($link, $sql);

                        $a_emp= mysqli_fetch_all($r);
                        foreach ($a_emp as $item) {
                          echo '<tr>';
                          echo "<td> $item[0] </td>";
                          echo "<td> $item[2] </td>";
                          echo "<td> $item[3] </td>";
                          echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            
            
            
        </div>
    </body>
</html>
