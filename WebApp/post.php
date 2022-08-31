<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=css_all.css>
    <title>post</title>
</head>
<body>
<h1 style="text-align: center;">Web App_Nirut_mini</h1>
    <hr>
    <div align="center">
        <h2> ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]."<br>";?></h2>
        <table>
            <tr><th class="head_table">แสดงความคิดเห็น</th></tr>
            <tr><td  style="text-align: center;"><textarea name="message" rows="5" cols="100%" placeholder="เชิญระบาย"></textarea></td></tr>
            <tr><td style="text-align: center;"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table>
        <a href="index.html" rel="noopener noreferrer">กลับไปหน้าหลัก</a>
    </div>
</body>
</html>