<?php 
    //Kiểm tra xem trang này có được chuyển từ trang [Lab07_DanhSachLop.php]
    if(isset($_GET["id"])==FALSE){
        //Quay về lại trang danh sách lớp
        header("location:Lab07_DanhSachLop.php");
        exit();
    }
    
    include_once '../ThuVien/connectDB.php';
    //Layh61 mã lớp muốn xem thông tin chi tiết
    $id=$_GET["id"];
    
    //Viết câu lệnh sql,Trích mẫu tin có mã lớp học trùng với biến id
    $sql ="select * from tbLopHoc where Malop like '$id' ; ";
    
    //Thi hành lệnh truy vấn từ biến connection
    $r= mysqli_query($link, $sql);
    
    if($r==FALSE|| mysqli_num_rows($r) == 0){
        echo "<h3>Không tồn tại mã lớp học</h3>";
        exit();
    }
    
    //Lấy thông tin lớp học ra
    $lop = mysqli_fetch_row($r);
    
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
                    <h2>Thay đổi thông tin lớp học</h2>
                    <hr>

                    <form action="Lab07_SuaLop_SaveDB.php">
                        Mã Lớp<br>
                            <input type="text" name="txtID" id="txtID" value="<?php echo $lop[0]?>"> <br><br>
                            Thời Gian Nhập Học<br>
                            <input type="text" name="txtTG" id="txtTG" value="<?php echo $lop[1]?>"> <br> <br>
                            Chương Trình Học<br>
                            <input type="text" name="txtCT" id="txtCT" value="<?php echo $lop[2]?>"> <br> <br>
                            Học Phí<br>
                            <input type="number" min="100" max="2000" name="txtHP" id="txtHP" value="<?php echo $lop[3]?>"> <br> <br>    
                        <input type="submit" name="btnOK" value="OK">
                        <input type="reset" name="btnReset" value="Reset">    
                    </form>
                    <br>
                    <hr>
                    <br>
                    <a href='L07_danhsachLop.php'>Về lại trang trước </a>

                    <?php

                    ?>
                </div>
            </section>
        </div>>
    </body>
</html>
