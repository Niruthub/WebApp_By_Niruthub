<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
<h1 style="text-align: center;">Web App_Nirut_mini</h1>
<hr>
<div align="center">
     <br>
    <?php
$user = $_POST["login"];
$pass = $_POST["lastname"];

if($user == "admin" and $pass == "ad1234"){
    echo "<h2>ยินดีต้อนรับคุณ ADMIN</h2>"."<BR>";
}
elseif($user == "member" and $pass == "mem1234"){
    echo "<h2>ยินดีต้อนรับคุณ MEMBER</h2>"."<BR>";
}
else
    echo "<h2>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</h2>"."<BR>"; 
?>
</div>
</body>
</html>
