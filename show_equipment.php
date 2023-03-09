<?php
include 'condb.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">    
    <div class=" h4 text-center alert alert-success mb-4 mt-4" role="alert"> แสดงข้อมูล </div>

    <a href="from_eq.php" class="btn btn-success mb-4">เพิ่มรายการ + </a>
<table class="table table-striped">
        <tr>
            <th>รหัสอุปกรณ์</th>
            <th>ชื่ออุปกรณ์</th>
            <th>รุ่น</th>
            <th>ยี่ห้อ</th>
            <th>จำนวน</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </tr>

        <?php
    $sql = "SELECT * FROM equipment";
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($result)){
?>
        <tr>
            <td><?=$row["id_eq"]?></td> 
            <td><?=$row["name_eq"]?></td>
            <td><?=$row["brand_eq"]?></td>
            <td><?=$row["model_eq"]?></td>
            <td><?=$row["amount_eq"]?></td>
            <td><a href="edit_eqz" class="btn btn-btn btn-warning mb-4">แก้ไข </a></td>
            <td><a href="delete_eq.php?id=<?=$row["id_eq"]?>" class="btn btn-danger mb-4">ลบ </a></td>


        </tr>
<?php
}
mysqli_close($conn); //ปิดการเชื่อมDB
?>
</table>
</div>
</body>

</html>
