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
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Register page</title>
</head>
<body>
    <div class="container">
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <?php include "nav.php"; ?>
    <br>
    
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php 
                if(isset($_SESSION['add_login'])){
                    if($_SESSION['add_login']=='error')
                    echo "<div class = 'alert alert-danger'>ชื่อบัญชีซ้ำหรือฐานข้อมูลมีปัญหา</div>";
                }else{
                    echo "<div class = 'alert alert-success'>เพิ่มบัญชีเรียบร้อยแล้ว</div>";
                }
                unset($_SESSION['add_login']);
            ?>

            <div class="card text-dark bg-light border-primary">
                <div class="card-header bg-primary text-light">กรอกข้อมูล</div>
                <div class="card-body">
                    <form action="register_save.php" method="post">
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">ชื่อบัญชี :</label>
                            <div class="col-md-9 ">
                                <input type="text" name="user" class="form-control" required> 
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">รหัสผ่าน :</label>
                            <div class="col-md-9 ">
                                <input type="password" name="pwd" class="form-control" required> 
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">ชื่อ - นามสกุล :</label>
                            <div class="col-md-9 ">
                                <input type="text" name="name" class="form-control" required> 
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">เพศ :</label>
                            <div class="col-md-9 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="m" required>
                                    <label class="form-check-label">ชาย</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="f" required>
                                    <label class="form-check-label">หญิง</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="o" required>
                                    <label class="form-check-label">อื่นๆ</label>
                                </div>                               
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">email :</label>
                            <div class="col-md-9 ">
                                <input type="text" name="email" class="form-control" required> 
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3"></div>
                            <div class="col-md-9 ">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>  สมัครสมาชิก</button>
                            </div>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    
       
    </div>
</body>
</html>