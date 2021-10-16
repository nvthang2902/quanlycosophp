<?php
session_start();
include '../../../connect.php';
if ($_SESSION['chutro'] == null) {
    header("location: /quanlycosovatchat/chu-tro/dang-nhap.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <style>
        table, th, td{
    border:1px solid #868585;
}
table{
    border-collapse:collapse;
}
table tr:nth-child(odd){
    background-color:#eee;
}
table tr:nth-child(even){
    background-color:white;
}
table tr:nth-child(1){
    background-color:skyblue;
}
        

    </style>


        <meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
        
        <!--     Fonts and icons     -->
        

        <!-- CSS Files -->
        <link href="../../../content/admin/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../../../content/admin/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->

        
        <!-- -->
        

    <!-- Data table -->
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="wrapper">
<?php include '../shared/menu.php'; ?>

            <div class="main-panel">
                <?php include '../shared//top-menu.php'; ?>

