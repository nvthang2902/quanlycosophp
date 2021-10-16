<?php

session_start();
if ($_REQUEST['id']) {
    $id = $_REQUEST['id'];
    $uid = $_SESSION['user']['id'];
//    echo $uid;
    $key = $_REQUEST['key'];
    $url = "Location: /quanlycosovatchat/views/dat-phong.php";
    switch ($key) {
        case "all": {
                unset($_SESSION['phong_dat']);
                header($url);
                break;
            }
        case "item": {
                unset($_SESSION['phong_dat'][$id]);
                if($_SESSION['phong_dat'] == null){
                    unset($_SESSION['phong_dat']);
                }
                header($url);
                break;
            }
    }
}
?>

