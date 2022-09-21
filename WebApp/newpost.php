<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=css_all.css>
    <title>new_post</title>
</head>
<?php session_start(); if($_SESSION['role']=="a" or $_SESSION['role']=="m"){?>
<body>
<h1 style="text-align: center;">Web App_Nirut_mini</h1>
    <hr>
ผู้ใช้งาน : <?php echo $_SESSION['username']; ?><br>
<table style="border: none;">
    <tr><td>หมวดหมู่ : </td><td><select name="learn">
        <option value="--All--">--ทั้งหมด--</option>
        <option value="normal">เรื่องทั่วไป</option>
        <option value="learn">เรื่องเรียน</option>
    </select></td></tr>
    <tr><td> หัวข้อ : </td><td><input type="text" name="headname" size="80%"></td></tr>
    <tr><td>เนื้อหา : </td><td><textarea type="text" name="data" > </textarea></td></tr>
    <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
</table>

&nbsp;&nbsp;&nbsp;&nbsp;
</body>
<?php } else{header("Location: index.php");die();}?>
</html>