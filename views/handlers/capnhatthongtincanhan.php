<?php
session_start();
include '../../connect.php';
$id = $_SESSION['user']['id'];
$tk = $_POST['tk'];
$mk = $_POST['mk'];
$em = $_POST['em'];
$sdt = $_POST['sdt'];
$url = "Location: /quanlycosovatchat/views/thong-tin.php";
//$sql = "INSERT INTO khachhang(ten,Email,sdt,matkhau) VALUES ('$tk','$em','$sdt','$mk')";
$sql = "UPDATE khachhang SET ten = '$tk', Email = '$em', sdt = '$sdt', matkhau ='$mk' WHERE maKh = '$id'";
$rs = mysqli_query($connect, $sql);
if ($rs) {
    include './xulydangnhap.php';
    //echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';
    echo 'Đúng';
//    header($url);
} else {
    echo 'sai';
    header($url);
}
?>


