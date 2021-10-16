<?php include '../shared/header.php'; ?>
<div class="container" style="padding: 5px 15px;">
    <div  style="float: right; padding-bottom:5px; ">
        <a href="./them-bai-dang.php" type="button" class="btn btn-primary" style="color: white;" >Thêm bài đăng</a>
    </div>
    <div class="container">
        <?php
        $id = $_SESSION['chutro']['id'];
        $sql = "SELECT * FROM baidang, phong, loaiphong WHERE chutro = '$id' and baidang.tinhtrang != 0 and baidang.maPhong = phong.maPhong and phong.maloaiPhong = loaiphong.maloaiPhong";
        $rs = mysqli_query($connect, $sql);
        if ($rs) {
            ?>
        <table class="table" id="example">
                <tr>
                    <th scope="col">Mã bài đăng</th>
                    <th scope="col">Loại phòng</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Ngày đăng</th>
                    <th scope="col">Thao tác</th>
                </tr>
                <?php while ($row = mysqli_fetch_array($rs)) { ?>
                <tr style="padding: 10px 20px;">
                        <td style="width: 150px; padding: 10px 10px;">
                            <?php echo $row['maBD'] ?>
                        </td>
                        <td style="width: 150px; padding: 10px 10px;">
                            <?php echo $row['Tenloaiphong'] ?>
                        </td>
                        <td style="width: 170px; padding: 10px 10px;">
                            <img src="../../../upload/<?php echo $row['hinh'] ?>" width="50px">
                        </td>
                        <td style="width: 170px; padding: 10px 20px;">
                            <?php
                            $nd = strtotime($row['ngaydang']);
                            echo date("d-m-yy", $nd);
                            ?>
                        </td>
                        <td style="width: 250px; padding: 10px 20px;">
                            <a href="./edit-bai-dang.php?id=<?php echo $row['maBD']; ?>" type="button" class="btn btn-success" style="color: white;">sửa</a>
                            <a href="./deleted-bai-dang.php?id=<?php echo $row['maBD']; ?>" type="button" class="btn btn-warning" style="color: red;">xóa</a>
                        </td>
                        
                    </tr>
            <?php } ?>
            </table>
<?php } ?>
    </div>
</div>
<?php include '../shared/footer.php'; ?>