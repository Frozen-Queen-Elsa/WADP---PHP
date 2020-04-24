<?php
    session_start();
    include_once '../ThuVien/connectDB_phpDB.php';
    if(isset($_SESSION["id"])==FALSE){
        header("location:Ass02_Login.html");
        exit();
    }
    if($_SESSION["role"]==1){
        header("location:Ass02_Login.html");
        exit();
    }
    $id=$_SESSION["id"];
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
            header("location:Ass02_NewEmp.html");
            exit();
        }
        
        $id = $_GET["txtID"];
        $pass = $_GET["txtPass"];
        $name = $_GET["txtName"];
        $mail = $_GET["txtMail"];
        $role = $_GET["txtRole"];
        $salary = $_GET["txtSal"];
        
        $sql = "INSERT INTO tbemployee(empID, password, fullname, email, role, Salary) VALUES ('$id','$pass','$name','$mail','$role','$salary') ; ";
       
        
        //thuc hien lenh truy van SQL
        $r = mysqli_query($link, $sql);
        
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if ($r==TRUE) {
            //Open trang danh sách lớp học
            header("location:Ass02_Admin.php");
            exit();
        }
        echo "r= '$r'";
        echo "<h3>Lỗi sai DB : Không thể thêm Employee mới !</h3>"
        ?>
        
        
        
        
    </body>
</html>
