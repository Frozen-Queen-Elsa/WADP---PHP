<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           //Định nghĩa hàm tính giai thừa , theo phương pháp bình thường
            function fn_GiaiThua($n){
                $r=1;
                for($i=1;$i<=$n;$i++){
                    $r=$r*$i;
                }
                return $r;
            }
            
            //Định nghĩa hàm tính tinh giai thừa, theo phương pháp đệ quy
            function fn_DeQuy($n){
                // n!=n*(n-1)*(n-2)*..*1
                if ($n==1) {
                    return 1;
                }
                return $n*fn_DeQuy($n-1);
            }
            
            $n=5;
            $kq1= fn_GiaiThua($n);
            echo "<h3>Phương Pháp Binh Thường</h3>";
            echo "<p>n = $n ,  Giai thừa $n = $kq1</p>";
            
            $kq2= fn_DeQuy($n);
            echo "<h3>Phương Pháp Đệ Quy</h3>";
            echo "<p>n = $n ,  Giai thừa $n = $kq2</p>";
        ?>
    </body>
</html>
