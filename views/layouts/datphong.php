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
        <h3 style="text-align:  center; color: red;">Bạn chưa đặt phòng</h3>

        <?php
    }
    ?>
</div>