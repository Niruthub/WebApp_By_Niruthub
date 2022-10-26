<?php 
session_start(); 
if(isset($_SESSION['id'])){
    header("Location: index.php");
    
} ?>

    <?php

$user = $_POST["login"];
$pass = $_POST["pwd"];

if($user == "admin" and $pass == "ad1234"){
    
    $_SESSION["username"]=$_POST["login"];
    $_SESSION["role"]="a";
    $_SESSION['id']=session_id();
    header("Location: index.php");
    die();
}
elseif($user == "member" and $pass == "mem1234"){
    
    $_SESSION["username"]=$_POST["login"];
    $_SESSION["role"]="m";
    $_SESSION['id']=session_id();
    header("Location: index.php");
    die();
}
else
    $_SESSION['error']='error';
    header("location:login.php");
    die();
?>
