
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
        <div class=" h4 text-center alert alert-success mb-4 mt-4" role="alert"> บันทึกข้อมูลอุปกรณ์ </div>
    <form method="POST" action="inser_eq.php">

    <label>รหัสอุปกรณ์ :</label>
    <input type="number" name="eqid" class="form-control" placeholder="รหัสอุปกรณ์" required > <br>

    <label>ชื่ออุปกรณ์ :</label>
    <input type="text" name="eqname"  class="form-control" placeholder="ชื่ออุปกรณ์" required > <br>

    <label>ยี่ห้ออุปกรณ์ :</label>
    <input type="text" name="eqb" class="form-control" placeholder="ยี่ห้ออุปกรณ์" required > <br>

    <label>รุ่นอุปกรณ์ :</label>
    <input type="text" name="mname" class="form-control" placeholder="รุ่นอุปกรณ์" required > <br>
    
    <label>จำนวนอุปกรณ์ :</label>
    <input type="number" name="aname" class="form-control" placeholder="จำนวนอุปกรณ์" required > <br>
    
    <input type="submit" value="ตกลง" class="btn btn-success" >
    <a href="show_equipment.php" class="btn btn-danger">ยกเลิก</a></a>


    <!-- <input type="submit" value="submit" class="btn btn-success" >
    <a href="delete_eq.php?id=<?=$row["id_eq"]?>" class="btn btn-danger mb-4"> แก้ไข </a> -->

</form>
</div>
</div>
</div>
</div>
</body>
</html>
