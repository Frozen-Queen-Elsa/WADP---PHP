<?php
session_start();
include_once '../ThuVien/connectDB_phpDB.php';
if (isset($_SESSION["id"]) == FALSE) {
    header("location:Ass04_Login.html");
    exit();
}
if ($_SESSION["role"] == 1) {
    header("location:Ass04_Login.html");
    exit();
}
$id = $_SESSION["id"];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>FLight Control</title>
        <!--        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link href="Ass04_Table.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>FLight Control</h2>
            <span>
                <a class="button"  href="Ass04_NewFlight.php">Add New Flight</a> <br><br>
            </span>

            <hr>

            <table class="table tab-content ">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Departure Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from tbflights";
                    $r = mysqli_query($link, $sql);

                    $a_flight = mysqli_fetch_all($r);
                    foreach ($a_flight as $item) {
                        echo '<tr>';
                        echo "<td> $item[0] </td>";
                        echo "<td> $item[2] </td>";
                        echo "<td> $item[3] </td>";
                        echo "<td> $item[4] </td>";
                        echo "<td>";
                        echo "<a href='Ass04_Detail.php?code=$item[0]'>Detail</a> | ";
                        echo "<a href='Ass04_Edit.php?code=$item[0]'>Edit</a> | ";
                        echo "<a href='Ass04_Delete.php?code=$item[0]'  onclick= 'return kt()'>Delete</a>";

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
