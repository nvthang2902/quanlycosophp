<?php

include '../../connect.php';

$mk = $_POST['mk'];
$em = $_POST['em'];

$sql = "SELECT * FROM khachhang where email='$em' and matkhau='$mk'";
$rs = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($rs);
if ($row['maKh'] <= 0) {
    echo"sai";
    header("location: /quanlycosovatchat/views/dang-nhap.php");
} else {
    echo "dung";
    session_start();
    $_SESSION["user"] = array(
        "id" => $row['maKh'],
        "ten" => $row['ten']
    );
    header("location: /quanlycosovatchat/");
}
?>