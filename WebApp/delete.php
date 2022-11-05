<?php 
session_start();

$conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

if($_SESSION['role']=="a"){
    echo "ลบกระทู้หมายเลข ". $_GET['id']."เรียบร้อย"; // id = post.id && comment.post_id 
    // sql to delete a record
     $sql = "DELETE FROM post WHERE id=$_GET[id]";
     $conn->exec($sql);
     $sql = "DELETE FROM comment WHERE post_id=$_GET[id]";
     $conn->exec($sql);
     $conn = null;
     header("Location: index.php");
}
else{
    header("Location: index.php");
    die();
}
?>