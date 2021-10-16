<?php
//include '../share/connect.php';
//$sql = 'SELECT * FROM baidang, phong, hinhanh where baidang.maPhong = phong.maPhong and phong.maPhong = hinhanh.Phong';
 $sql="SELECT * FROM  baidang, phong,loaiphong where baidang.tinhtrang = 2 and baidang.maPhong=phong.maPhong and phong.maloaiPhong = loaiphong.maloaiPhong and  phong.maloaiPhong=1";
$rs = mysqli_query($connect, $sql);
if ($rs == null) {
    echo 'không có data';
} else {
    
?>
<?php
while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
    $_SESSION['phong'][$row['maPhong']] = array(
        "maphong" => $row['maPhong'],
        "giathue" => $row['giathue'],
        "tenphong" => $row['Tenloaiphong'],
        "anh" => $row['hinh']
    );
    ?>
    <div class="col-lg-4 col-md-6" style="margin-bottom: 20px;">
        <div class="hp-room-item set-bg" data-setbg="../upload/<?php echo $row['hinh']; ?>">
            <div class="hr-text">

                <h3><?php echo $row['Tenloaiphong']; ?></h3>
                <h2><?php echo $row['giathue'];?><span>/Giá</span></h2>
               <a href="../views/chi-tiet-phong.php?id=<?php echo $row['maPhong']; ?>" class="primary-btn">Chi Tiết</a>
            </div>
        </div>
    </div>
<?php } }?>