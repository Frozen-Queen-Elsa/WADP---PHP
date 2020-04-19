<?php 
    //Kiểm tra xem trang này có được chuyển từ trang [Ass03_AdminProduct.php]
    if(isset($_GET["id"])==FALSE){
        //Quay về lại trang danh sách lớp
        header("location:Ass03_AdminProduct.php");
        exit();
    }
    
    include_once '../ThuVien/connectDB_phpDB.php';
    //Layh61 mã lớp muốn xem thông tin chi tiết
    $id=$_GET["id"];
    
    //Viết câu lệnh sql,Trích mẫu tin có mã lớp học trùng với biến id
    $sql ="select * from tbproducts where code like '$id' ; ";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE|| mysqli_num_rows($r) == 0){
        echo "<h3>Không tồn tại mã Product</h3>";
        exit();
    }
    
    //Lấy thông tin lớp học ra
    $emp = mysqli_fetch_row($r);
    
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Grid.css -->
        <link rel="stylesheet" href="../css/grid.css">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/cc7d5b8894.js" crossorigin="anonymous"></script>
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!-- Style.css -->        
        <link href="../css/CodeMau_form.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap.css -->        
<!--        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <title></title>
    </head>
    <body>
        <div class="container">
            <section>
                <div class="register">
                    <h2>Thay đổi thông tin Product</h2>
                    <hr>

                    <form class="normal_form" action="Ass03_EditProduct_saveDB.php">
                        Product ID : <input type="text" name="txtID" id="txtID" value="<?php echo $emp[0]?>" required><br><br>
                        
                        Product Name : <input type="text" name="txtName" id="txtName"  value="<?php echo $emp[1]?>" required><br><br> 
                        Price : <input type="number" step="0.01" name="txtPrice" id="txtPrice"  min=10000 max =200000 value=<?php echo $emp[2]?> ><br><br>
                        Descriptions : <input type="text" name="txtDesc" id="txtDesc"  min=100 max =10000 value=<?php echo $emp[3]?> ><br><br>
                        <input type="submit" name="btnOK" value="Confirm">
                        <input type="reset" name="btnReset" value="Reset">
                    </form>
                    <br>
                    <hr>
                    <br>
                    <a href='Ass03_AdminProduct.php'>Về lại trang trước </a>

                    
                </div>
            </section>
        </div>>
    </body>
</html>
