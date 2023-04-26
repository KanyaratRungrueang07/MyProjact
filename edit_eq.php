<?php
include 'condb.php';
$id_eq=$_GET['id_eq'];
$sql="SELECT * FROM equipment WHERE id_eq='$id_eq' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-8">
        <div class=" h4 text-center alert alert-success mb-4 mt-4" role="alert"> แก้ไขข้อมูลอุปกรณ์ </div>
    <form method="POST" action="update_eq.php">

    
    <label>รหัสอุปกรณ์ :</label>
    <input type="number" name="eqid" class="form-control" readonly value=<?=$row['id_eq']?> > <br>

    <label>ชื่ออุปกรณ์ :</label>
    <input type="text" name="eqname"  class="form-control" value=<?=$row['name_eq']?> > <br>    

    <label>ยี่ห้ออุปกรณ์ :</label>
    <input type="text" name="eqb" class="form-control" value=<?=$row['brand_eq']?> > <br>

    <label>รุ่นอุปกรณ์ :</label>
    <input type="text" name="mname" class="form-control" value=<?=$row['model_eq']?>  > <br>
    
    <label>จำนวนอุปกรณ์ :</label>
    <input type="number" name="aname" class="form-control" value=<?=$row['amount_eq']?> > <br>
    
    <input type="submit" value="เพิ่ม" class="btn btn-success" >
    <a href="show_equipment.php" class="btn btn-danger">ยกเลิก</a></a>




</form>
</div>
</div>
</div>
</div>
</body>
</html>
