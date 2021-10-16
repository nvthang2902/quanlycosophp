<?php
include '../shared/header.php';
$sql = "SELECT * FROM loaiphong";
$sql1 = "SELECT * FROM quanlycosovatchat.quanhuyen";
$rs = mysqli_query($connect, $sql);
$rs1 = mysqli_query($connect, $sql1);

$mabd = $_REQUEST['id'];
$edit = "SELECT baidang.maBD, Dientich, gia, Diachi, baidang.mota, baidang.maPhong FROM baidang, phong WHERE baidang.maBD = '$mabd' AND baidang.tinhtrang != 0 AND baidang.maPhong = phong.maPhong";
$qr_edit = mysqli_query($connect, $edit);
$row_edit = mysqli_fetch_assoc($qr_edit);
?>
<div class="container" style="margin-top: 50px;">
    <h3>CẬP NHẬT BÀI ĐĂNG</h3>
    <form action="../../handlers/update-baidang.php" method="post" enctype="multipart/form-data">
        <table class="thembaidang">

            <tr>
                <td>
                    <label style=" width: 200px;">Mã Phòng</label>
                    <input type="number" name="maphong" placeholder="0" value="<?php echo $row_edit['maPhong']; ?>" required></td>
            </tr>
            <tr>
                <td>
                    <label style=" width: 200px;">Mã Bài Đăng</label>
                    <input type="number" name="mabaidang" placeholder="0" value="<?php echo $row_edit['maBD']; ?>" required></td>
            </tr>
            <tr>
                <td>
                    <label style=" width: 200px;">Hình</label><input type="file" placeholder="" name="photo"></td>
            </tr>
            <tr>
                <td>
                    <label style=" width: 200px;">Loại phòng</label>
                    <select name="lp">
                        <?php
                        while ($row = mysqli_fetch_array($rs)) {
                        ?>
                            <option value="<?php echo $row['maloaiPhong']; ?>"><?php echo $row['Tenloaiphong']; ?></option>
                        <?php } ?>
                    </select></td>
            </tr>
            <tr>
                <td>
                    <label style=" width: 200px;">Diện Tích</label>
                    <input type="number" name="dt" placeholder="0" value="<?php echo $row_edit['Dientich']; ?>" required></td>
            </tr>
            <tr>
                <td>
                    <label style=" width: 200px;">Địa Chỉ</label>
                    <input type="text" name="dc" placeholder="Địa Chỉ" value="<?php echo $row_edit['Diachi']; ?>"><br></td>
            </tr>
            <tr>
                <td>
                    <label style=" width: 200px;">Giá</label>
                    <input type="number" name="g" class="" placeholder="0" value="<?php echo $row_edit['gia']; ?>"></td>
            </tr>
            <tr>
                <td>
                    <label style=" width: 200px;">Mô tả</label>
                    <textarea type="" class="" name="mt" placeholder="mô tả" value="<?php echo $row_edit['mota']; ?>"></textarea></td>
            </tr>
            <tr>
                <td>
                    <label style=" width: 200px;">Quận Huyện</label>
                    <select name="qh">
                        <?php
                        while ($row1 = mysqli_fetch_array($rs1)) {
                        ?>
                            <option value="<?php echo $row1['maQH']; ?>"><?php echo $row1['TenQh']; ?></option>
                        <?php } ?>
                    </select> </td>
            </tr>
            <tr>
                <td>

                    <button type="submit">Cập nhật</button></td>
            </tr>
        </table>
    </form>
</div>
<?php include '../shared/footer.php'; ?>