<?php
include '../../connect.php';

$mhd = $_REQUEST['hd'];
$key = $_REQUEST['key'];
$url = "Location: /quanlycosovatchat/views/thong-tin-hop-dong.php";
switch ($key) {
    case "p":
        $id = $_REQUEST['id'];
//        update chi tiet
        $huyp = "UPDATE chitiethopdong SET trangthaict = 0 WHERE maHD = '$mhd' AND maPhong = '$id'";
        $rs_huy = mysqli_query($connect, $huyp);
        
//        select hop dong
        $select_hd = "SELECT * FROM hopdong WHERE maHD = '$mhd'";
        $rs_hopdong = mysqli_query($connect, $select_hd);
        $hopdong = mysqli_fetch_array($rs_hopdong);
//        select phong
        $select_p = "SELECT * FROM phong WHERE maPhong = '$id'";
        $rs_phong = mysqli_query($connect, $select_p);
        $phong = mysqli_fetch_array($rs_phong);
//        update hop dong
        $tongtien = $hopdong['Tongtien'] - $phong['giathue'];
        $update_hd = "UPDATE hopdong SET Tongtien = '$tongtien' WHERE maHD = '$mhd'";
        $rs_upd_hd = mysqli_query($connect, $update_hd);
        header($url);
        break;
    case "hd":
        $huyhd = "UPDATE hopdong SET Tinhtranghopdong = 0 WHERE maHD = '$mhd'";
        $rs_huyhd = mysqli_query($connect, $huyhd);
        $huyp = "UPDATE chitiethopdong SET trangthaict = 0 WHERE maHD = '$mhd'";
        $rs_huy = mysqli_query($connect, $huyp);
        header($url);
        break;
}
?>
