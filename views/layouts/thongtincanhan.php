<?php 
    $id = $_SESSION['user']['id'];
    $s_kh = "SELECT * FROM khachhang WHERE maKh = '$id'";
    $rs_kh = mysqli_query($connect, $s_kh);
    $kh = mysqli_fetch_array($rs_kh);
?>

<section class="aboutus-section spad">
    <div class="container">
        <form action="./handlers/capnhatthongtincanhan.php" method = "post" class="form-box">
            <h2> Cập nhật thông tin </h2> 

            <table>
                <tr><td><label>Họ tên:</label> <input type="text" name="tk" class="input-text" value="<?php echo $kh['ten']; ?>"
                                                      placeholder="Họ tên"></td></tr>
                <tr><td><label>Email:</label>  <input type="email" name="em" class="input-text" value="<?php echo $kh['Email']; ?>"
                                                      placeholder="Email"></td></tr>
                <tr><td><label>Số điện thoại:</label> <input type="tel" name="sdt" class="input-text" value="<?php echo $kh['sdt']; ?>"
                                                             placeholder="Số điện thoại"></td></tr>
                <tr><td><label>Mật khẩu:</label> <input type="password" name="mk" class="input-text" value="<?php echo $kh['matkhau']; ?>"
                                                        placeholder="Mật khẩu"></td></tr>
                <tr><td><input class="btn-submit btn-submit-dk" type="submit" value ="Cập nhật"</td></tr>
            </table>
        </form>
    </div>
</section>