<?php include './shared/header.php'; ?>
<section class="aboutus-section spad">
    <div class="container">
        <form action="./handlers/xulydangki.php" method = "post" class="form-box">
            <h2> Đăng ký </h2> 

            <table>
                <tr><td><label>Họ tên:</label> <input type="text" name="tk" class="input-text"
                                                      placeholder="Họ tên"></td></tr>
                <tr><td><label>Email:</label>  <input type="email" name="em" class="input-text"
                                                      placeholder="Email"></td></tr>
                <tr><td><label>Số điện thoại:</label> <input type="tel" name="sdt" class="input-text"
                                                             placeholder="Số điện thoại"></td></tr>
                <tr><td><label>Mật khẩu:</label> <input type="password" name="mk" class="input-text"
                                                        placeholder="Mật khẩu"></td></tr>
                <tr><td><input class="btn-submit btn-submit-dk" type="submit" value ="Đăng ký"</td></tr>
            </table>
        </form>
    </div>
</section>
<?php include './shared/footer.php'; ?>