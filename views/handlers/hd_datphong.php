<?php

include '../../connect.php';
session_start();
$id = $_REQUEST['id'];
$user_id = $_SESSION['user']['id'];

$sql = "SELECT * FROM phong, loaiphong WHERE maPhong = '$id' AND phong.maloaiPhong = loaiphong.maloaiPhong";

$rs = mysqli_query($connect, $sql);
if ($rs != null) {
    $row = mysqli_fetch_array($rs);
    if (!isset($_SESSION["phong_dat"][$id])) {
        $_SESSION["phong_dat"][$id] = array(
            "tenphong" => $row['Tenloaiphong'],
            "gia" => $row['giathue'],
            "anh" => $row['hinh'],
            "maphong" => $id
        );
    }
    header("Location: /quanlycosovatchat/views/dat-phong.php");
} else {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>