
<?php
include "dbcon.php";
 
$userid = $_POST['userid'];
 
$sql = "select * from cart where idbill=".$userid;
$result = mysqli_query($conn,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table border='0' width='100%'>
<tr>
    <td width="250"><img src="img/<?php echo $row['img']; ?>" height="140px">
    <td style="padding:20px;">
    <p>Tên : <?php echo $row['name']; ?></p>
    <p>Giá : <?php echo $row['price']; ?></p>
    <p>Số lượng : <?php echo $row['soluong']; ?></p>
    <p>Thành tiền : <?php echo $row['thanhtien']; ?></p>
    <p>Mã : <?php echo $row['idbill']; ?></p>
    </td>
</tr>

</table><hr>
 
<?php } ?>