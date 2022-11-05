<?php 
session_start(); 
/*if(isset($_SESSION['id'])){
    header("Location: index.php");
    die();
}*/
?>
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
    <title>Web App_Nirut_mini</title>

    <script>
        function myFunction1(){
            let r = confirm("ต้องการจะลบจริงหรือไม่");
            return r;
        }
    </script>

</head>
<?php 
     
    if(!isset($_SESSION['id'])){
    ?>
<body>
    <div class="container">
    <h1 style="text-align: center;">Web App_Nirut_mini</h1>
    <?php include "nav.php"; ?>
    <br>
    <div class="d-flex">
        <div>
            <label>หมวดหมู่</label>
            <span class="dropdown">
            <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
                --ทั้งหมด--
            </button>
            <ul class="dropdown-menu" aria-labelledby="buttton2">
                <?php
                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                    $sql = "SELECT * FROM category";
                    foreach($conn->query($sql) as $row){
                        echo "<li><a href='#' class='dropdown-item'>".$row['name']."</a></li>";
                    }
                    $conn=null;
                ?> 
            </ul>
            </span>
        </div>
    </div>
    <br>
    <table class="table table-striped">
    
    <?php 
            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
            $sql_join = "SELECT post.id ,category.name, post.title, user.login ,post.post_date FROM post
            INNER JOIN category ON category.id=post.cat_id
            INNER JOIN user ON user.id=post.user_id
            ORDER BY post.post_date DESC";

            foreach($conn->query($sql_join) as $row){ 
            echo "<tr><td>[".$row['name']."] <a href='post.php?id=$row[id]' style='text-decoration:none;'>".$row['title']." </a><br>".$row['login'].
            " - ".$row['post_date']."</td>";
            echo "</tr>";
            }
            $conn=null;
        ?> 
    
    </table>
    </div>
</body>
<?php }else{ ?>
    <body>
    <div class="container">
    <h1 style="text-align: center;">Web App_Nirut_mini</h1>
    <?php include "nav.php"; ?>
    <br>
    <div class="d-flex justify-content-between">
        <div>
            <label>หมวดหมู่</label>
            <span class="dropdown">
            <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
                --ทั้งหมด--
            </button>
            <ul class="dropdown-menu" aria-labelledby="buttton2">
                <?php
                    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                    $sql = "SELECT * FROM category";
                    foreach($conn->query($sql) as $row){
                        echo "<li><a href='#' class='dropdown-item'>".$row['name']."</a></li>";
                    }
                    $conn=null;
                ?> 
            </ul>
            </span>
        </div>
        <div>
            <a href="newpost.php" class="btn btn-success btn-sm"><i class="bi bi-plus-lg"></i> สร้างกระทู้ใหม่</a>
        </div>
    </div>
    <br>
    <table class="table table-striped">
    
        <?php 
            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
            $sql_join = "SELECT post.id ,category.name, post.title, user.login ,post.post_date FROM post
            INNER JOIN category ON category.id=post.cat_id
            INNER JOIN user ON user.id=post.user_id
            ORDER BY post.post_date DESC";

            foreach($conn->query($sql_join) as $row){ 
            echo "<tr><td>[".$row['name']."] <a href='post.php?id=$row[id]' style='text-decoration:none;'>".$row['title']." </a><br>".$row['login'].
            " - ".$row['post_date']."</td>";
            if($_SESSION['role']=='a'){
                echo "<td><a href=delete.php?id=$row[id] class='btn btn-danger btn-sm' onclick='return myFunction1();'><i class='bi bi-trash'></i></a></td>";
            }
            echo "</tr>";
            }
            $conn=null;
        ?>  
    
    </table>
    </div>
</body>
    <?php } ?> 
      
</html>