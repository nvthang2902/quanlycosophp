<!DOCTYPE html>
<html lang="zxx">
    <?php session_start(); date_default_timezone_set("Asia/Ho_Chi_Minh");?>
    <?php include './../connect.php'; ?>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Sona Template">
        <meta name="keywords" content="Sona, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TÌM NHÀ TRỌ</title>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="../content/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../content/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../content/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="../content/css/nice-select.css" type="text/css">  
        <link rel="stylesheet" href="../content/css/style.css" type="text/css">
        <link rel="stylesheet" href="../content/StyleSheet.css" type="text/css">
    </head>

    <body> 
        <div id="close-menu"></div>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Offcanvas Menu Section Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="canvas-open">
            <i class="icon_menu"></i>
        </div>
        <div class="offcanvas-menu-wrapper">
            <div class="canvas-close">
                <i class="icon_close"></i>
            </div>
            <div class="search-icon  search-switch">
                <i class="icon_search"></i>
            </div>
            <div class="header-configure-area">
            </div>

            <ul class="top-widget">
                <li><i class="fa fa-phone"></i> 0363761707</li>
                <li><i class="fa fa-envelope"></i> nvthang2902@gmail.com</li>
            </ul>
        </div>
        <!-- Offcanvas Menu Section End -->

        <!-- Header Section Begin -->
        <header class="header-section">
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="tn-left">
                                <li><i class="fa fa-phone"></i> 0363761707</li>
                                <li><i class="fa fa-envelope"></i> nvthang2902@gmail.com</li>

                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="tn-right">
                                <ul class="top-social">
                                    <?php if (!isset($_SESSION["user"])) { ?>
                                        <li class="link-item"><a href="../views/dang-ki.php">Đăng kí</a></li>
                                        <li class="link-item"><a href="../views/dang-nhap.php">Đăng nhập</a></li>  
                                    <?php } else { ?>
                                        <li class="link-item"><a id="drop-menu"><?php echo $_SESSION["user"]["ten"]; ?></a>
                                            <ul class="ddown-menu" id="ddmenu">
                                                <li><a class="color-white" style="color: #fff;" href="./thong-tin.php">Thông tin cá nhân</a></li>
                                                <li><a class="color-white" style="color: #fff;" href="../views/thong-tin-hop-dong.php">Thông tin hợp đồng</a></li>
                                                <li><a class="color-white" style="color: #fff;" href="../views/lich-su-dat-phong.php">Lịch sử đặt phòng</a></li>
                                                <li><a class="color-white" style="color: #fff;" href="../views/handlers/dang-xuat.php">Đăng xuất</a></li>
                                            </ul>
                                        </li> 
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="/quanlycosovatchat">
                                <img src="../content/img/123.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="/quanlycosovatchat">Trang chủ</a></li>
                                    <li><a href="./nha-nguyen-can.php">Chung cư</a></li>
                                    <li><a href="./nha-tro.php">Nhà trọ</a></li>
                                    <li><a href="./can-ho.php">Căn hộ</a></li>
                                    <li><a href="./dat-phong.php">Đặt phòng</a></li>
                                    <li><a href="./lien-he.php">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="main-search" style="padding-bottom: 10px;">
                            <form action="#" method="post" class="d-flex flex-lg-row justify-content-end">
                                <select class="selected-item" name="select-tinh">
                                    <option>Tỉnh/thành phố</option>
                                    <option value="da-nang">Đà Nẵng</option>
                                    <option value="ha-noi">Hà Nội</option>
                                    <option value="ho-chi-minh">Hồ Chí Minh</option>
                                </select>
                                <select class="selected-item" name="select-quan-huyen">
                                    <option>Quận/huyện</option>
                                    <option value="da-nang">Hải Châu</option>
                                    <option value="ha-noi">Thanh Khê</option>
                                    <option value="ho-chi-minh">Sơn Trà</option>
                                </select>
                                <select class="selected-item" name="select-loaiphong">
                                    <option>Loại phòng</option>
                                    <option value="da-nang">Căn Hộ</option>
                                    <option value="ha-noi">Phòng trọ</option>
                                    <option value="ho-chi-minh">Nhà nguyên căn</option>
                                </select>
                                <select class="selected-item" name="select-dientich">
                                    <option>Diện tích</option>
                                    <option value="da-nang">80m2</option>
                                    <option value="ha-noi">100m2</option>
                                    <option value="ho-chi-minh">200m2</option>
                                </select>
                                <select class="selected-item" name="select-giatien">
                                    <option>Giá tiền/Tháng</option>
                                    <option value="da-nang">800K</option>
                                    <option value="ha-noi">1M</option>
                                    <option value="ho-chi-minh">1.5M</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-danger">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>