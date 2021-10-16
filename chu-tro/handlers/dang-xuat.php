<?php
session_start();
if ($_SESSION['chutro']) {
    unset($_SESSION['chutro']);
    header("location: /quanlycosovatchat/chu-tro/");
} else {
    header("location: /quanlycosovatchat/chu-tro/dang-nhap.php");
}
?>
