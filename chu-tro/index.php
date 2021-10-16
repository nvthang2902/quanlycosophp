<div style="background: #062c33;">
    <?php include './shared/header.php'; ?>
    <div class="container">
        <div class="information">
            <div class="avatar-img">
                <img src="../upload/<?php echo $_SESSION['chutro']['avatar']; ?>" >
            </div>
            <div class="link-infomation">
                <a href="" class="link link-left">Facebook</a>
                <a href="" class="link link-mid"><?php echo $_SESSION['chutro']['ten']; ?></a>
                <a href="" class="link link-right">Instagram</a>
            </div>
        </div>
    </div>
    <?php include './shared/footer.php'; ?>
</div>
