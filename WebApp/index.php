<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=css_all.css>
    <title>Web App_Nirut_mini</title>
</head>
<body>
    <h1 style="text-align: center;">Web App_Nirut_mini</h1>
    <hr>
    หมวดหมู่: <select name="learn">
        <option value="--All--">--ทั้งหมด--</option>
        <option value="normal">เรื่องทั่วไป</option>ฃ
        <option value="learn">เรื่องเรียน</option>
    </select>
    <a href="login.html" style="float: right;" target="_blank">เข้าสู่ระบบ</a>
    <br>
    <ul>
        <?php 
            //$n = 1;
            for($i=1;$i<=10;$i++)
            echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a></li>";
        ?>
        
    </ul>
</body>
</html>