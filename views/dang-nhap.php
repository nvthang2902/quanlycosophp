<?php include './shared/header.php'; ?>

<section class="aboutus-section spad">
    <div class="container">
        <form action="./handlers/xulydangnhap.php" method = "post" class="form-box">
            <h2> Đăng nhập </h2> 

            <table>
                <tr><td><label>Tài khoản:</label><input type="text" name="em" class="input-text"
                                                        placeholder="Email:" autofocus="auto" ></td></tr>
                <tr><td><label>Mật khẩu:</label> <input type="password" name="mk" class="input-text"
                                                        placeholder="Password" ></td></tr>
                <tr><td><input class="btn-submit" type="submit" value ="Login"</td>
                </tr>
            </table>
        </form>
    </div>
</section>
<?php include './shared/footer.php'; ?>