<?php

include '../../connect.php';

$mk = $_POST['mk'];
$em = $_POST['tk'];

$sql = "SELECT * FROM chutro WHERE taikhoan='$em' AND matkhau='$mk'";
$rs = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($rs);
if ($row['maCT'] <= 0) {
    echo"sai";
    header("location: /quanlycosovatchat/chu-tro/dang-nhap.php");
} else {
    session_start();
    $_SESSION['chutro'] = array(
        "id" => $row['maCT'],
        "ten" => $row['ten'],
        "email" => $row['Email'],
        "avatar" => $row['hinhanh']
    );
    if ($_SESSION['chutro']) {
        echo $_SESSION['chutro']['email'];
        header("location: /quanlycosovatchat/chu-tro/");
    } else {
        echo "no session";
        header("location: /quanlycosovatchat/chu-tro/dang-nhap.php");
    }
}
?>