<?php
session_start();
include_once '../ThuVien/connectDB_phpDB.php';
if (isset($_SESSION["id"]) == FALSE) {
    header("location:Ass03_Login.html");
    exit();
}
if ($_SESSION["role"] == 1) {
    header("location:Ass03_Login.html");
    exit();
}
$id = $_SESSION["id"];
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
                <a class="button"  href="Ass03_NewProduct.php">Add New Product</a> <br><br>
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
                    $sql = "select * from tbproducts";
                    $r = mysqli_query($link, $sql);

                    $a_product = mysqli_fetch_all($r);
                    foreach ($a_product as $item) {
                        echo '<tr>';
                        echo "<td> $item[0] </td>";
                        echo "<td> $item[1] </td>";
                        echo "<td> $item[2] </td>";
                        echo "<td>";

                        echo "<a href='Ass03_EditProduct.php?id=$item[0]'>Edit</a> | ";
                        echo "<a href='Ass03_DeleteProduct.php?id=$item[0]'  onclick= 'return kt()'>Delete</a>";

                        echo "</td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

        </div>
        <script>
            function kt() {
                return confirm("Are you sure ?");
            }
        </script>
    </body>
</html>
