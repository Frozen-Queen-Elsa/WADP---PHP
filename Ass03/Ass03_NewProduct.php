
<?php
    include_once '../ThuVien/connectDB_phpDB.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        if (isset($_GET["btnOK"]) == FALSE) {
            header("location:Ass03_NewProduct.html");
            exit();
        }
        
        
        $name = $_GET["txtName"];
        $price = $_GET["txtPrice"];
        $desc = $_GET["txtDesc"];
        
        $sql = "INSERT INTO tbproducts(name, price, descriptions) VALUES ('$name',$price,'$desc') ; ";
       
        
        //thuc hien lenh truy van SQL
        $r = mysqli_query($link, $sql);
        
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if ($r==TRUE) {
            //Open trang danh sách lớp học
            header("location:Ass03_AdminProduct.php");
            exit();
        }
        echo "r= '$r'";
        echo "<h3>Lỗi sai DB : Không thể thêm Product mới !</h3>";
        ?>
        
        
        
        
    </body>
</html>
