<?php
    include_once '../ThuVien/connectDB_phpDB.php';
    
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Product List</title>
<!--        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link href="Ass03_Table.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Product List</h2>
            <span>
                <a class="button"  href="Ass02_NewProduct.php">Add New Product</a> <br><br>
            </span>
            
            <hr>
            
            <table class="table tab-content ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql="select * from tbproducts";
                        $r= mysqli_query($link, $sql);

                        $a_product= mysqli_fetch_all($r);
                        foreach ($a_product as $item) {
                          echo '<tr>';
                          echo "<td> $item[0] </td>";
                          echo "<td> $item[1] </td>";
                          echo "<td> $item[2] </td>";
                          echo "<td>";
                          echo "<a href='Ass03_EditProduct.php?id=$item[0]'>Edit</a> | ";
                          echo "<a href='Ass03_DeleteProduct.php?id=$item[0]'>Delete</a>";
                          echo "</td>";
                          echo '</tr>';
    
                        }
                    ?>
                </tbody>
            </table>
            
            
            
        </div>
    </body>
</html>
