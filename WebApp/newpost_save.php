<?php 
    session_start();

    $title = $_GET['topic'];
    $content = $_GET['comment'];
    $cat_id = $_GET['category'];
    $user_id = $_SESSION['user_id'];
    //$post_date = "SELECT NOW()";

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
 
   
    $sql1="INSERT INTO post (title,content,post_date,cat_id,user_id) VALUES ('$title','$content',NOW(),'$cat_id','$user_id')";
    $conn -> exec($sql1);
   
    $conn = null;
    
    header("location:index.php");
    die();
?>