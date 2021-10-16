<?php

session_start();
try {
    include '../../connect.php';
    include '../../common/upload_file.php';
    $anh = $_FILES['photo']['name'];
    $dc = $_POST['dc'];
    $mt = $_POST['mt'];
    $dt = $_POST['dt'];
    $lp = $_POST['lp'];
    $qh = $_POST['qh'];
    $gia = $_POST['g'];
    $mabd = $_POST['mabaidang'];
    $map = $_POST['maphong'];

    $sql = "UPDATE phong SET Diachi = '$dc', Dientich = '$dt', giathue = '$gia', mota = '$mt', maloaiPhong = '$lp', quanhuyen = '$qh', hinh = '$anh' WHERE maPhong = '$map'";
    $rs = mysqli_query($connect, $sql);
    $nd = date("yy-m-d");
    if ($_SESSION['chutro']) {
        $ct = $_SESSION['chutro']['id'];
        $qr = "UPDATE baidang SET gia = '$gia', ngaydang = '$nd', maPhong = '$map', mota = '$mt', chutro = '$ct' WHERE maBD = '$mabd'";

        $rs_bd = mysqli_query($connect, $qr);
        if ($rs_bd) {
            echo "thanhcong";
            header("Location: /quanlycosovatchat/chu-tro/views/bai-dang/");
        } else {
            header("Location: /quanlycosovatchat/chu-tro/views/bai-dang/edit-bai-dang.php?id=$mabd");
        }
    } else {
        header("Location: /quanlycosovatchat/chu-tro/views/bai-dang/edit-bai-dang.php?id=$mabd");
    }
} catch (Exception $e) {
    echo $e;
}
?>
