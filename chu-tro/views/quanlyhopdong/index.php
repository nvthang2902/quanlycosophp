<?php include '../shared/header.php';?>
<div class="container">

    <?php
     $kh =  $_SESSION['chutro']['id'];
    $sql = "SELECT * FROM baidang, hopdong, chitiethopdong, phong, khachhang  WHERE baidang.chutro = '$kh' and hopdong.khachhang = khachhang.maKh and baidang.maPhong = phong.maPhong and hopdong.maHD = chitiethopdong.maHD and chitiethopdong.maPhong = phong.maPhong";
    $rs = mysqli_query($connect, $sql);

    if ($rs) {
        ?>
        <div class="container">         
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><h6>Mã hợp đồng </h6></th>
                        <th> <h6>Tổng tiền </h6></th>
                        <th> <h6>Khách hàng </h6></th>
                        <th> <h6>Tình trạng hợp đồng</h6></th>
                    </tr>
                </thead>
                <tbody>
    <?php while ($row = mysqli_fetch_assoc($rs)) { ?>
                        <tr>
                            <td><?php echo $row['maHD']; ?> </td>
                            <td><?php echo number_format($row['Tongtien']); ?></td>
                            <td><?php echo $row['ten']; ?></td>
                            <td><?php
                                switch ($row['Tinhtranghopdong']) {
                                    case 0: echo "Đã hủy";
                                        break;
                                    case 1: echo "Đang chờ xử lý";
                                        break;
                                    case 2: echo "Đã xử lý";
                                        break;
                                    default: echo "Đang chờ xử lý";
                                        break;
                                }
                                ?> </td>
                            <td><a href="chitiethopdong.php?mahd=<?php echo $row['maHD']; ?>">Xử lý</a></td>

                        </tr>
        <?php } ?>
                </tbody>
            </table>
        </div>
    <?php
} else {
    echo 'No data!';
}
?>
</div>

<?php include '../shared/footer.php'; ?>