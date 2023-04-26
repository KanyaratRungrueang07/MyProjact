<!-- เชื่อมต่อเฐานข้อมูล -->
<?php
include 'condb.php';

$id_eqs=$_GET['id_eq'];
$sql="DELETE FROM equipment WHERE id_eq='$id_eqs' ";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_equipment.php';</script>";
}else{
    echo "Error : " . $sql . "<br>" . mysql_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
// เชื่อมคำสั่ง SQL



mysqli_close($conn);


?> 

