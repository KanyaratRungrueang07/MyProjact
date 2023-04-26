<?php
include 'condb.php';
?> <!-- เชื่อมต่อเฐานข้อมูล -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment </title>

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #bfeaff;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #bfeaff;
        }
</style>

<!-- <link rel="stylesheet" href="https://demo.itoffside.com/eqborrow/assets/css/main-login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="register.js"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<header>
        <ul>
        <img src="ระบุที่อยู่ของรูปภาพ"/>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news"  >ประเภทวัสดุและครุภัณฑ์</a></li>
            <li><a href="#about">ตรวจสอบสถานะและจำนวน</a></li>
            <li><a href="#about">จองคอร์สอบรมออนไลน์</a></li>
        </ul>
    
    </header>


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
            <td><a href="edit_eq.php ?id_eq=<?=$row["id_eq"]?>" class="btn btn-btn btn-warning mb-4">แก้ไข </a></td>
            <td><a href="delete_eq.php?id_eq=<?=$row["id_eq"]?>" class="btn btn-danger mb-4" onclick="Del(this.href);return false;">ลบ </a></td>


        </tr>
<?php
}
mysqli_close($conn); //ปิดการเชื่อมDB
?>
</table>
</div>
</body>

</html>
<script language="JavaScript">
    function Del(mypage){
        var agree=confirm("คุณต้องการลบข้อมูลหรือไหม");
        if(agree){
            window.location=mypage;
        }
    }
</script>
