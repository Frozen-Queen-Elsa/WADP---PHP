<?php
    session_start();
    include_once '../ThuVien/connectDB_phpDB.php';
    if(isset($_SESSION["id"])==FALSE){
        header("location:Ass03_Login.html");
        exit();
    }
    if($_SESSION["role"]!=1){
        header("location:Ass03_Login.html");
        exit();
    }
  
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
            
            
            <form action="Ass03_SearchProduct.php">
                <h3 style="margin-left: 12%;margin-bottom: 2%">
                    Input Price
                    <span style="color:green;margin-left: 12%;">From  </span>
                    <input style="margin-left:2%;width: 130px;height: 25px;text-align: center;font-weight: 500;font-size:17px" class="ipNum" type="number" min="0" name="txtMin" id="txtMin"> 
                    <span style="color:green;margin-left: 2%;">To  </span> 
                    <input style="margin-left:2%;width: 130px;height: 25px;text-align: center;font-weight: 500;font-size:17px" class="ipNum" type="number"  min="0" name="txtMax" id="txtMax"> 
                    <input style="margin-left:17%;width: 80px;height: 25px;text-align: center;background-color: pink;color:rgb(126, 126, 235);font-weight: 700;font-size:17px" type="submit" name="btnSearch" value="Search">
                </h3>
            </form>
            
            <hr>
            
            <table class="table tab-content ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Unit Price</th>
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
                          echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            
            
            
        </div>
    </body>
</html>
