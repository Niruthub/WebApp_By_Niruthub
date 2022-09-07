<?php 
session_start(); 
if(isset($_SESSION['id'])){
    header("Location: index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=css_all.css>
    <title>Web App_Nirut_mini</title>
</head>
<?php 
     
    if(!isset($_SESSION['id'])){
    ?>
<body>
    <h1 style="text-align: center;">Web App_Nirut_mini</h1>
    <hr>
    หมวดหมู่: <select name="learn">
        <option value="--All--">--ทั้งหมด--</option>
        <option value="normal">เรื่องทั่วไป</option>
        <option value="learn">เรื่องเรียน</option>
    </select>

    <a href="login.php"style="float: right;" >เข้าสู่ระบบ</a>
    <br>
    <ul>
        <?php 
            //$n = 1;
            for($i=1;$i<=10;$i++)
            echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a></li>";

        ?>
        
    </ul>
</body>
<?php }else{ ?>
    <body>
    <h1 style="text-align: center;">Web App_Nirut_mini</h1>
    <hr>
    หมวดหมู่: <select name="learn">
        <option value="--All--">--ทั้งหมด--</option>
        <option value="normal">เรื่องทั่วไป</option>
        <option value="learn">เรื่องเรียน</option>
    </select>
    <div style="float: right;">
        <p>ผู้ใช้งานระบบ : <?php echo $_SESSION['username']." "?>&nbsp;&nbsp;
        <a href="logout.php"> ออกจากระบบ</a></p>
    </div>
    <br>
    <a href="newpost.php">สร้างกระทู้ใหม่</a>
    <br>
    <ul>
        <?php 
            //$n = 1;
            for($i=1;$i<=10;$i++){
                echo "<li><a href='post.php?id=$i'>กระทู้ที่ $i</a>";
                if($_SESSION['role']=="a"){ echo "&nbsp;&nbsp; <a href='delete.php?id=$i'>ลบ</a>";}
                echo "</li>";
            }
        ?>
        
    </ul>
</body>
    <?php } ?> 
      
</html>