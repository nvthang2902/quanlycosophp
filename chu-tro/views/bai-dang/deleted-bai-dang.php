<?php 
    include '../../../connect.php';
    
    $mabd = $_REQUEST['id'];
    $del = "UPDATE baidang SET tinhtrang = 0 WHERE maBD = '$mabd'";
    $rs = mysqli_query($connect, $del);
    header("Location: /quanlycosovatchat/chu-tro/views/bai-dang/");
?>