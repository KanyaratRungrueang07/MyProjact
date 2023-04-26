<?php
include 'condb.php';
$eq_id = $_POST['eqid'];
$eq_name = $_POST['eqname'];

$eq_b = $_POST['eqb'];
$eq_mo_name = $_POST['mname'];
$eq_aname = $_POST['aname'];

$sql="INSERT INTO equipment(name_eq,id_eq,brand_eq,model_eq,amount_eq) VALUES('$eq_name','$eq_id','$eq_b','$eq_mo_name','$eq_aname')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_equipment.php';</script>";
}else{
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
}
mysqli_close($conn);
?>
