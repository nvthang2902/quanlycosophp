<?php
session_start();
include '../connect.php';
if ($_SESSION['chutro'] == null) {
    header("location: /quanlycosovatchat/chu-tro/dang-nhap.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
        
        <link rel="apple-touch-icon" sizes="76x76" href="../../content/admin/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../../content/admin/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title></title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="../content/admin/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../content/admin/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../content/admin/css/demo.css" rel="stylesheet" />
        <link href="../content/admin/css/custom.css" rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper">
            <?php include './shared/menu.php'; ?>

            <div class="main-panel">
                <?php include './shared/top-menu.php'; ?>

