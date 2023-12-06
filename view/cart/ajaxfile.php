
<?php
include "dbcon.php";
 
$userid = $_POST['userid'];
 
$sql = "select * from cart where idbill=".$userid;
$result = mysqli_query($conn,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table border='0' width='100%'>
<tr>
    <?php
    ?>
    <td width="250"><img src="<?php echo'upload/'. $row['img']; ?>" height="140px">
    <td style="padding:20px;">
    <p>Mã : <?php echo $row['idbill']; ?></p>
    <p>Tên : <?php echo $row['name']; ?></p>
    <p>Giá : <?php echo number_format($row['price'], 0, ".", "."); ?>₫</p>
    <p>Số lượng : <?php echo $row['soluong']; ?></p>
    <p>Khuyến mãi : <?php echo number_format($row['price']*((100 - $row['khuyenmai']) / 100), 0, ".", "."); ?>₫</p>
    <p>Thành tiền : <?php echo number_format($row['thanhtien'] = $row['price'] * $row['soluong'] * ((100 - $row['khuyenmai']) / 100), 0, ".", "."); ?>₫</p>
    </td>
</tr>
</table><hr>
<?php } ?>