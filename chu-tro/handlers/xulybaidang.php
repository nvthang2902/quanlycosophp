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

    $mp = time();
    $mph = $mp;
    $sql = "INSERT INTO phong(maPhong, Diachi, Dientich, giathue, mota, maloaiPhong, quanhuyen, hinh)VALUES('$mph', '$dc', '$dt', '$gia', '$mt', '$lp', '$qh', '$anh')";
    $rs = mysqli_query($connect, $sql);
    $nd = date("yy-m-d");
    if ($_SESSION['chutro']) {
        $ct = $_SESSION['chutro']['id'];
        $qr = "INSERT INTO baidang(maBD, gia, ngaydang, maPhong, mota, chutro,tinhtrang)VALUES('$mph', '$gia', '$nd', '$mph', '$mt', '$ct',2)";
        $rs_bd = mysqli_query($connect, $qr);
        if ($rs_bd) {
            echo "thanhcong";
            header("Location: /quanlycosovatchat/chu-tro/views/bai-dang/");
        } else {
            header("Location: /quanlycosovatchat/chu-tro/views/bai-dang/them-bai-dang.php");
        }
    } else {
        header("Location: /quanlycosovatchat/chu-tro/views/bai-dang/them-bai-dang.php");
    }
} catch (Exception $e) {
    echo $e;
}
?>
