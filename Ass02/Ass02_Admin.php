<?php
    include_once '../ThuVien/connectDB_phpDB.php';
    
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
            <span>
                <a class="button"  href="Ass02_NewEmp.php">Add New</a> <br><br>
            </span>
            
            <hr>
            
            <table class="table tab-content ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
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
                          echo "<td> $item[4] </td>";
                          echo "<td>";
                          echo "<a href='Ass02_EditEmp.php?id=$item[0]'>Edit</a> | ";
                          echo "<a href='Ass02_DeleteEmp.php?id=$item[0]'>Delete</a>";
                          echo "</td>";
                          echo '</tr>';
    
                        }
                    ?>
                </tbody>
            </table>
            
            
            
        </div>
    </body>
</html>
