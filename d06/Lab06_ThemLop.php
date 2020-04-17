<?php
    include_once '../ThuVien/connectDB.php';
?>

<!DOCTYPE html>
<!--
    Kiểm tra tài khoản đang nhập trong trang [Lab06_Login] có hợp lệ không?
    Bằng cách đối chiếu bộ dữ liệu nhập với các mẩu tin trong bảng [tbUser]
    Nếu có, thông báo thành công. Ngược lại thông báo thất bại
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //kiem tra trang [L06_login.html] da duoc chay chua
        if (isset($_GET["btnOK"]) == FALSE) {
            header("location:Lab06_ThemLop.html");
            exit();
        }
        $malop = $_GET["txtMa"];
        $ct = $_GET["txtCT"];
        $tg = $_GET["txtTG"];
        $hp = $_GET["txtHP"];
        
        $sql = "insert into tbLopHoc(MaLop,TGNhapHoc,ChuongTrinh,HocPhi) values('$malop','$tg','$ct','$hp')";
       
        //thuc hien lenh truy van SQL
        $r = mysqli_query($link, $sql);
        
        //kiem tra xem co dong du lieu dc tra ve tu cau linh Select SQL ?
        if ($r==TRUE) {
            //Open trang danh sách lớp học
            header("location:Lab06_DanhSachLop.php");
            exit();
        }
        echo "<h3>Lỗi sai DB : Không thể thêm lớp học mới !</h3>"
        ?>
    </body>
</html>
