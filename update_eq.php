<?php
include 'condb.php';
$id_eq=$_POST['eqid'];
$name_eqs=$_POST['eqname'];
$brand_eqs=$_POST['eqb'];
$model_eqs=$_POST['mname'];
$amount_eqs=$_POST['aname'];

$sql = "UPDATE equipment set name_eq='$name_eqs', brand_eq='$brand_eqs' , model_eq='$model_eqs' , amount_eq='$amount_eqs' WHERE id_eq='$id_eq' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_equipment.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
mysqli_close($conn);

?>
