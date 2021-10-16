<?php

date_default_timezone_set("Asia/Ho_Chi_Minh");
$ngaydat = date("yy-m-d h:i:s");
session_start();
include '../../connect.php';
if (!isset($_SESSION['user'])) {
    header("location: /quanlycosovatchat/views/dang-nhap.php");
} else {
    $kh = $_SESSION['user']['id'];
    $phongs = $_SESSION['phong_dat'];
    $rs_ct = null;
    $tt = 0;
    foreach ($phongs as $p) {
        $tt += $p['gia'];
    }
    $mhd = time();
    $mahd = $mhd;
    $hd_i = "INSERT INTO hopdong(maHD, Tongtien, khachhang, Tinhtranghopdong, ngaydat)"
            . "VALUES('$mahd', '$tt', '$kh', 1,'$ngaydat' )";
    $rs_hd = mysqli_query($connect, $hd_i);
    foreach ($phongs as $phong) {
        $mp = $phong['maphong'];
        $gt = $phong['gia'];
        $cthd_i = "INSERT INTO chitiethopdong(maHD, Giatien, maPhong, maDichvu)"
                . "VALUES('$mahd', '$gt', '$mp', 1)";
        $rs_ct = mysqli_query($connect, $cthd_i);
    }
    if (isset($rs_ct)) {
        unset($_SESSION['phong_dat']);
        header("location: /quanlycosovatchat/views/success.php");
    } else {
        header("location: /quanlycosovatchat/views/error.php");
    }
}
?>