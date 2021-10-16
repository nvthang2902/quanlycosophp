<?php
        include './connect.php';
   if (isset($_REQUEST['select-tinh']) && isset($_REQUEST['select-quan-huyen'])&& isset($_REQUEST['select-dientich'])&& isset( $_REQUEST['select-giatien'])) {
    $tinh = $_REQUEST['select-tinh'];
    $quanhuyen = $_REQUEST['select-quan-huyen'];
    $dientich = $_REQUEST['select-dientich'];
     $giatien = $_REQUEST['select-giatien'];
     $sql="SELECT * FROM phong as p , quanhuyen as qh ,tinh as t where p.quanhuyen=qh.maQH AND qh.tinh=t.maTTP
                     and giathue <= '$giatien' AND  t.tenTTP='$tinh' AND qh.TenQh='$quanhuyen' AND t.tenTTP='$tinh' AND p.Dientich='$dientich' ";  
} else {
    if(isset($_REQUEST['select-tinh'])){
        
    }
}
 
       echo $sql;
         mysqli_set_charset($connect, 'UTF8');
            $result = $connect->query($sql);
          if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Diachi"]. " - Name: " . $row["Dientich"]. " <br>";
  }
} else {
  echo "0 results";
}
   
  
?>
