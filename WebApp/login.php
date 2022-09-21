<?php 
session_start(); 
if(isset($_SESSION['id'])){
    header("Location: index.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=css_all.css>
    <title>Login page</title>
</head>
<body>
    <h1 style="text-align: center;">Web App_Nirut_mini</h1>
    <hr>
    <div>
        
        <form action="verify.php" method="post">
            <table align="center">
                <tr><th colspan="2" class="head_table">เข้าสู่ระบบ</th></tr>
                <tr><td>Login</td><td class="toRight"><input type="text" name="login" size="80%"></td></tr>
                <tr><td>Password</td><td class="toRight"><input type="password" name="lastname" size="80%"></td></tr>
                <tr><td colspan="2" style="text-align: center;"><input type="submit" value="Login"></td></tr>
            </table>
            
            <div align="center"> ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php" target="_blank" rel="noopener noreferrer">กรุณาสมัครสมาชิก</a></div>
        </form>
        
    </div>
</body>
</html>