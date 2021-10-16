<!DOCTYPE html>
<html lang="zxx">
    <?php session_start(); date_default_timezone_set("Asia/Ho_Chi_Minh");?>
    <?php include './connect.php'; ?>
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
        <link rel="stylesheet" href="./content/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="./content/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="./content/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="./content/css/nice-select.css" type="text/css">  
        <link rel="stylesheet" href="./content/css/style.css" type="text/css">
        <link rel="stylesheet" href="./content/StyleSheet.css" type="text/css">
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
                                <div class="top-social">
                                    <ul>
                                        <?php if (!isset($_SESSION["user"])) { ?>
                                            <li class="link-item"><a href="./views/dang-ki.php">Đăng kí</a></li>
                                            <li class="link-item"><a href="./views/dang-nhap.php">Đăng nhập</a></li>  
                                        <?php } else { ?>
                                            <li class="link-item"><a id="drop-menu"><?php echo $_SESSION["user"]["ten"]; ?></a>
                                                <ul class="ddown-menu" id="ddmenu">
                                                    <li><a href="./views/thong-tin.php" class="color-white" style="color: #fff;">Thông tin cá nhân</a></li>
                                                    <li><a class="color-white" style="color: #fff;" href="./views/thong-tin-hop-dong.php">Thông tin hợp đồng</a></li>
                                                    <li><a class="color-white" style="color: #fff;" href="./views/lich-su-dat-phong.php">Lịch sử đặt phòng</a></li>
                                                    <li><a class="color-white" style="color: #fff;" href="./views/handlers/dang-xuat.php">Đăng xuất</a></li>
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
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="/quanlycosovatchat">
                                <img src="./content/img/123.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="/quanlycosovatchat">Trang chủ</a></li>
                                    <li><a href="./views/nha-nguyen-can.php">Chung cư</a></li>
                                    <li><a href="./views/nha-tro.php">Nhà trọ</a></li>
                                    <li><a href="./views/can-ho.php">Căn hộ</a></li>
                                    <li><a href="./views/dat-phong.php">Đặt phòng</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="main-search">
                            <form action="http://localhost/quanlycosovatchat/views/tim-kiem.php" method="post" class="d-flex flex-lg-row justify-content-end">
                                <select class="selected-item" name="select-tinh">
                                    <option value="">Tỉnh/thành phố</option>
                                    <option value="tp Đà Nẵng">Đà Nẵng</option>
                                    <option value="ha-noi">Hà Nội</option>
                                    <option value="ho-chi-minh">Hồ Chí Minh</option>
                                </select>
                                <select class="selected-item" name="select-quan-huyen">
                                    <option value="">Quận/huyện</option>
                                    <option value="hai chau">Hải Châu</option>
                                    <option value="Thanh Khê">Thanh Khê</option>
                                    <option value="son tra">Sơn Trà</option>
                                </select>
                                <select class="selected-item" name="select-dientich">
                                    <option value="">Diện tích</option>
                                    <option value="80">80m2</option>
                                    <option value="100">100m2</option>
                                    <option value="200">200m2</option>
                                </select>
                                <select class="selected-item" name="select-giatien">
                                    <option value="">Giá tiền/Tháng</option>
                                    <option value="800">800K</option>
                                    <option value="100000">1M</option>
                                    <option value="1500000">1.5M</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-danger">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>