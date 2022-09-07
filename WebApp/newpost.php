<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=css_all.css>
    <title>new_post</title>
</head>
<?php session_start(); if($_SESSION['role']=="a"){?>
<body>
<h1 style="text-align: center;">Web App_Nirut_mini</h1>
    <hr>
ผู้ใช้งาน : <?php echo $_SESSION['username']; ?><br>
หมวดหมู่ : <select name="learn">
        <option value="--All--">--ทั้งหมด--</option>
        <option value="normal">เรื่องทั่วไป</option>
        <option value="learn">เรื่องเรียน</option>
    </select><br>
หัวข้อ : <input type="text" name="headname" size="80%"> <br>
เนื้อหา : <input type="textarea" name="data" size="80%"> <br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="บันทึกข้อความ">
</body>
<?php } else{header("Location: index.php");die();}?>
</html>