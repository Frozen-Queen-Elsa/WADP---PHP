<?php
    include_once '../ThuVien/connectDB_phpDB.php';
    
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Book List</title>
<!--        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link href="Ass01_Table.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Book List</h2>
            <span>
                <a href="Ass01_NewBook.php">Create New Book</a> <br><br>
            </span>
            
            <form action="Ass01_SearchBook.php">
                <h3 style="margin-left: 12%;margin-bottom: 2%">
                    Price
                    <span style="color:green">From $ </span>
                    <input style="margin-left:3%;width: 130px;height: 25px;text-align: center;font-weight: 500;font-size:17px" class="ipNum" type="number" min="0" name="txtMin" id="txtMin"> 
                    <span style="color:green">To $ </span> 
                    <input style="margin-left:3%;width: 130px;height: 25px;text-align: center;font-weight: 500;font-size:17px" class="ipNum" type="number"  min="0" name="txtMax" id="txtMax"> 
                    <input style="margin-left:7%;width: 80px;height: 25px;text-align: center;background-color: pink;color:rgb(126, 126, 235);font-weight: 700;font-size:17px" type="submit" name="btnSearch" value="Search">
                </h3>
            </form>
            
            <hr>
            
            <table class="table tab-content ">
                <thead>
                    <tr>
                        <th>BookID</th>
                        <th>Book Name</th>
                        <th>Price</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="select * from tbbook where price";
                        $r= mysqli_query($link, $sql);

                        $a_book= mysqli_fetch_all($r);
                        foreach ($a_book as $item) {
                          echo '<tr>';
                          echo "<td> $item[0] </td>";
                          echo "<td> $item[1] </td>";
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
