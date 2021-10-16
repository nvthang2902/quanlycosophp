<?php
    $hostName = 'localhost';
    // khai báo biến username
    $userName = 'root';
    //khai báo biến password
    $passWord = '';
    // khai báo biến databaseName
    $databaseName = 'quanlycosovatchat';
    // khởi tạo kết nối
    $connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
    //Kiểm tra kết nối
     mysqli_set_charset($connect, 'UTF8');
    if (!$connect) {
        exit('Kết nối không thành công!');
    }
?>