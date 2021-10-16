<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="" style="text-transform: uppercase;">
                        <img src="../../../upload/<?php echo $_SESSION['chutro']['avatar']; ?>" width="50px" height="50px" style="border-radius: 50%; ">
                        <span style="line-height: 50px; margin: 0 20px; font-weight: 700;" class="no-icon"><?php echo $_SESSION['chutro']['ten']; ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/quanlycosovatchat/chu-tro/handlers/dang-xuat.php">
                        <span class="no-icon" style="line-height: 50px;">Đăng xuất</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
