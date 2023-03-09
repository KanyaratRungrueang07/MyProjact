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
    <title>แก้ไขข้อมูล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                
    <div class=" h4 text-center alert alert-success mb-4 mt-4" role="alert"> แก้ไขข้อมูล </div>
    <form method="POST" action="inser_eq.php">
        <labe>ชื่ออุปกรณ์:</labe>
        <input type="text" name="eqname_ed" class="form-control" value=<?=$row['id_eq']?> > 

        <labe>รหัสอุปกรณ์:</labe>
        <input type="number" name="eqid" class="form-control" value=<?=$row['name_eq']?> > 

        <labe>ยี่ห้อ:</labe>
        <input type="text" name="eqb" class="form-control" value=<?=$row['brand_eq']?> > 

        <labe>รุ่น:</labe>
        <input type="text" name="mname" class="form-control" value=<?=$row['model_eq']?> >

        <labe>จำนวนอุปกรณ์:</labe>
        <input type="text" name="aname" class="form-control" value=<?=$row['amount_eq']?> > 

        <input type="submit" value="submit" class="btn btn-success">
        <a href="show_equipment.php" class="btn btn-danger mb-3"> ยกเลิก </a>
    </form>
    </div>
        </div>
    </div>
</body>
</html>
