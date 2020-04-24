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
            header("location:Ass01_NewBook.html");
            exit();
        }
        
        $name = $_GET["txtName"];
        $author = $_GET["txtAuthor"];
        $price = $_GET[txtPrice];
        
        $sql = "insert into tbbook(name,price,author) values('$name',$price,'$author');";
       
        //thuc hien lenh truy van SQL
        $r = mysqli_query($link, $sql);
        
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if ($r==TRUE) {
            //Open trang danh sách lớp học
            header("location:Ass01_ViewBook.php");
            exit();
        }
        echo "<h3>Lỗi sai DB : Không thể thêm Book mới !</h3>"
        ?>
        
        
        
        
    </body>
</html>

