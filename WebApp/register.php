<?php 
session_start(); 
if(isset($_SESSION['id'])){
    header("Location: index.php");
    die();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=css_all.css>
    <title>Register page</title>
</head>
<body>
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <hr>
    
        <form action="#">
            <table style="border: 2px solid black; width: 40%; " align="center">
                <tr><th colspan="2" style="background-color: #6CD2FE; text-align: left;">กรอกข้อมูล</th></tr>
                <tr><td>ชื่อบัญชี:    </td><td class="toRight"><input type="text" name="firstname" size="80%"></td></tr>
                <tr><td>รหัสผ่าน:    </td><td class="toRight"><input type="password" name="lastname" size="80%"></td></tr>
                <tr><td>ชื่อ-นามสกุล:   </td><td class="toRight"><input type="text" name="firstname" size="80%"></td></tr>
                <tr><td rowspan="4">เพศ</td></tr>
                
                <tr><td ><input class="margin_gender" type="radio" name="gender" value="man">ชาย</td></tr>
                <tr><td ><input class="margin_gender" type="radio" name="gender" value="woman">หญิง</td></tr>
                <tr><td ><input class="margin_gender" type="radio" name="gender" value="other">อื่นๆ</td></tr>
            
                <tr><td>email </td><td class="toRight"><input type="email" name="firstname" size="80%"></td></tr>
                <tr><td colspan="2" style="text-align: center;"><input type="submit" value="สมัครสมาชิก"></td></tr>
            </table>
            <div align="center"><a href="index.php" target="_blank" rel="noopener noreferrer">กลับไปหน้าหลัก</a></div>
        </form>
    
</body>
</html>