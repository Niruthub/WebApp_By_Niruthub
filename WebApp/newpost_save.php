<?php 
    session_start();

    $title = $_GET['topic'];
    $content = $_GET['comment'];
    $cat_id = $_GET['category'];
    $user_id = $_SESSION['user_id'];
    $post_date = "SELECT NOW()";

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    //$sql = "SELECT * FROM user where login='$_SESSION[username]'"; CURRENT_TIMESTAMP
   // $result = $conn -> query($post_date);
   
    $sql1="INSERT INTO post (title,content,post_date,cat_id,user_id) VALUES ('$title','$content',CURRENT_TIMESTAMP,'$cat_id','$user_id')";
    $conn -> exec($sql1);
   
    $conn = null;
    //echo $post_date;
    header("location:index.php");
    die();
?>