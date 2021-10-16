<?php
$id = $_SESSION['user']['id'];
$qr_hd = "SELECT * from hopdong where hopdong.khachhang = '$id' and Tinhtranghopdong = 2";
$hopdongs = mysqli_query($connect, $qr_hd);
if ($hopdongs) {
    ?>
    <div>
        <hr>
        
        <table style="text-align: left; widows: 100%;">
            <?php
            while ($hopdong = mysqli_fetch_array($hopdongs)) {
                $mahd = $hopdong['maHD'];
                $qr_ct = "SELECT * from chitiethopdong, phong, loaiphong where chitiethopdong.maHD = '$mahd' and chitiethopdong.trangthaict = '1' and chitiethopdong.maPhong = phong.maPhong and phong.maloaiPhong = loaiphong.maloaiPhong";
                $chitiets = mysqli_query($connect, $qr_ct);
                ?> 
                <tr>
                    <th  style="border: none; padding: 5px 10px; width: 200px; text-align: left; margin: 0px;">Mã hợp đồng: </th>
                    <th  style="border: none; padding: 5px 10px; width: 100px; text-align: left; margin: 0px;"><?php echo $hopdong['maHD']; ?></th>
<!--                    <td>
                        <a href="./handlers/hd-huyphong.php?key=hd&hd=<?php echo $hopdong['maHD']; ?>" style="color: red; float: right;">Hủy hợp đồng</a>
                    </td>-->
                </tr>
                <tr>
                    <th  style="border: none; padding: 5px 10px; width: 200px; text-align: left; margin: 0px;">Tổng tiền: </th>
                    <td colspan="2" style="border: none; padding: 5px 10px; width: 100px; text-align: left; margin: 0px;"><?php echo number_format($hopdong['Tongtien']) . "VND"; ?></td>
                </tr>
                <tr>
                    <th  style="border: none; padding: 5px 10px; width: 200px; text-align: left; margin: 0px;">Ngày đặt: </th>
                    <td colspan="2"  style="border: none; padding: 5px 10px; width: 100px; text-align: left; margin: 0px;">
                        <?php $nd = strtotime($hopdong['ngaydat']); echo date("d-m-yy h:i:s", $nd); ?>
                    </td>
                </tr>
                <tr>
                    <th  style="border: none; padding: 5px 10px; width: 300px; text-align: left; margin: 0px;">Trạng thái: </th>
                    <td colspan="2" style="border: none; padding: 5px 10px; width: 300px; text-align: left; margin: 0px;"><?php
                        switch ($hopdong['Tinhtranghopdong']) {
                            case 1:
                                echo "Đang xử lý";
                                break;
                            case 2:
                                echo "Đã xử lý";
                                break;
                            case 3:
                                echo "Đã hủy";
                                break;
                            default : echo "Đang xử lý";
                        }
                        ?></td>
                </tr>
                <tr style="border-bottom: .5px solid #DDD;">
                    <td colspan="3">
                        <table  style="text-align: center; padding: 0px 10px;">
                            <?php while ($chitiet = mysqli_fetch_array($chitiets)) { ?>
                                <tr>
                                    <td  style="padding: 10px 0px; width: 300px;"><?php echo $chitiet['Tenloaiphong']; ?></td>
                                    <td style="padding: 10px; width: 200px;"><img src="../upload/<?php echo $chitiet['hinh']; ?>" width="40px" ></td>
                                    <td style="padding: 10px 0px; width: 300px;"><?php echo number_format($chitiet['giathue']); ?>VND</td>
<!--                                    <td style="width: 500px;">
                                        <a href="./handlers/hd-huyphong.php?key=p&hd=<?php echo $hopdong['maHD']; ?>&id=<?php echo $chitiet['maPhong']; ?>" style="color: red; float: right;">Hủy phòng</a>
                                    </td>-->
                                </tr>
                            <?php } ?>
                        </table>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
<?php } ?>