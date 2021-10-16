<?php
$id = $_REQUEST['id'];
$sql = "SELECT * FROM phong ,loaiphong, quanhuyen,tinh where phong.maPhong = '$id' and phong.maloaiPhong=loaiphong.maloaiPhong and phong.quanhuyen=quanhuyen.maQH and quanhuyen.tinh=tinh.maTTP";
$rs = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($rs);
$map = $row['maPhong'];
$s_ttp = "SELECT * FROM quanlycosovatchat.phong,chitiethopdong where  phong.maPhong= '$map' and phong.maPhong=chitiethopdong.maPhong";
$rs_ttp = mysqli_query($connect, $s_ttp);
$ttp = mysqli_fetch_array($rs_ttp);
?>
<hr>
<section class="aboutus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <span>Chi Tiết</span>
                    </div>
                    <p class="f-para"> Giá tiền: <?php echo $row['giathue']; ?></p>
                    <p class="s-para"> Diện Tích: <?php echo $row['Dientich']; ?></p>
                    <p class="s-para"> Địa chỉ: <?php echo $row['Diachi']; ?></p>
                    <p class="s-para"> Mô tả: <?php echo $row['mota']; ?></p>
                    <p class="s-para"> tỉnh: <?php echo $row['tenTTP']; ?></p>
                    <p href="#" class="primary-btn about-btn">Loại Phòng: <?php echo $row['Tenloaiphong']; ?></p> 
                    <div class="row" style="width: 100%; text-align: center;">
                        <?php if ($ttp == null) { ?>
                            <a  href="./handlers/hd_datphong.php?id=<?php echo $row['maPhong']; ?>" class="link">Thêm vào hợp đồng</a>
                        <?php } else {
                            if ($ttp['trangthaict'] == 0) { ?>
                                <a  href="./handlers/hd_datphong.php?id=<?php echo $row['maPhong']; ?>" class="link">Thêm vào hợp đồng</a>
                            <?php } else { ?>
                                <p style="text-align: center; color: red; width: 50%; margin: 0 auto;">Phòng đã được đặt</p>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-pic">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="/quanlycosovatchat/upload/<?php echo $row['hinh']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
