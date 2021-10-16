<?php

include '../../connect.php';
$tk = $_POST['tk'];
$mk = $_POST['mk'];
$em = $_POST['em'];
$sdt = $_POST['sdt'];

$sql = "INSERT INTO khachhang(ten,Email,sdt,matkhau) VALUES ('$tk','$em','$sdt','$mk')";
$rs = mysqli_query($connect, $sql);
if ($rs) {
    include './xulydangnhap.php';
    //echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';
    echo 'Đúng';
} else {
    echo 'sai';
}
?>

