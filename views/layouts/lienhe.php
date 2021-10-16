<div class="container">
    <?php
    if (isset($_SESSION['phong_dat'])) {
        $phongdat = $_SESSION['phong_dat'];
        ?>

        <div class="datphong">
            <table>
                <tr>
                    <td colspan="4" style="text-align: right; color: red;">
                        <a href="./handlers/hd_huydatphong.php?id=''&key=all" style="color: red;">Hủy tất cả</a>
                    </td>
                </tr>
                <tr>
                    <th>Tên phòng</th>
                    <th></th>
                    <th>Giá</th>
                    <th></th>
                </tr>
                <?php
                $tongTien = 0;
                foreach ($phongdat as $i) {
                    $thanhTien = $i['gia'];
                    $tongTien += $thanhTien;
                    ?>

                    <tr>
                        <td><?php echo $i['tenphong']; ?></td>
                        <td>
                            <img src="/quanlycosovatchat/upload/<?php echo $i['anh']; ?>" width="80px" height="80px">
                        </td>
                        <td><?php echo number_format($i['gia']) . "VND"; ?></td>
                        <td>
                            <a href="./handlers/hd_huydatphong.php?id=<?php echo $i['maphong']; ?>&key=item" class="link" style="color: red;"><i class="fa fa-close"></i></a>  
                        </td>
                    </tr>



                <?php } ?>
                    <tr>
                        <td colspan="3" style="text-align: right; font-weight: 600;">Tổng tiền: </td>
                        <td><?php echo number_format($tongTien); ?>VND</td>
                    </tr>
            </table>
            <div style="display: flex; justify-content: flex-end;">
                <a href="./handlers/hd-datphong.php" style="color: black; border: .5px solid silver; border-radius: 5px; padding:5px 10px; margin-top: 20px;">Đặt phòng</a>
            </div>
        </div>
        <?php
    } else {
        ?>
        <h3 style="text-align:  center; color: red;">Liên hệ vs chúng tôi!</h3>

        <?php
    }
    ?>
    
</div>
<div class="pages contact-page section-padding">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="googleMap-info">
                    <div id="googleMap"></div>
                    <div class="map-info">
                        <p><strong>Find Apartments</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-text-center">
                <div class="contact-details">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-contact">
                                <i class="mdi mdi-map-marker"></i>
                                <p>48 Cao Thắng,</p>
                                <p>Trường đại học sư phạm kỹ thuật</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-contact">
                                <i class="mdi mdi-phone"></i>
                                <p>(+84) 383425354</p>
                                <p>(+84) 702076081</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-contact">
                                <i class="mdi mdi-email"></i>
                                <p>nvthang2902@gmail.com</p>
                                <p>ute@ute.udn.vn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact content section end -->
<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
    
        var mapOptions = {
        zoom: 17,
        hue: '#E9E5DC',
        scrollwheel: false,
        mapTypeId:google.maps.MapTypeId.TERRAIN,
        center: new google.maps.LatLng(16.078162, 108.213212)
        };

        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);


        var marker = new google.maps.Marker({
        position: map.getCenter(),
        icon: 'public/img/map-marker.png',
        map: map
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>