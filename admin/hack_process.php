<?php

session_start();
include '../db_config.php';
if(!isset($_SESSION['is_login'])){
    header('location:index.php');
}
$desc=nl2br($_POST['hack_description']);
if(isset($_POST['action']) and $_POST['action'] == "Add"){
    $name = mysqli_real_escape_string($con, $_POST['hack_name']);
    $description = mysqli_real_escape_string($con,$desc);

    if(empty($name  && $description )){
        $_SESSION['msg'] = "All Information must be filled";
    }
    else{
         $sql = $sql= "insert into hacks(hack_name,hack_description)
            values('$name','$description')";
            
        if(mysqli_query($con,$sql)){
            $_SESSION['msg'] = "Hack Added";
        }
        else{
            $_SESSION['msg'] = "Hack can not be added";
        }
    }
}
else if(isset($_POST['action']) and $_POST['action'] == "edit"){
    $title = mysqli_real_escape_string($con,$_POST['hack_name']);
    $description = mysqli_real_escape_string($con,$_POST['hack_description']);
    $id= (int)$_POST['hack_id'];
    $sql= "update hacks set hack_name ='$title', 
    hack_description='$description' where hack_id=$id";
    mysqli_query($con,$sql);
        $_SESSION['msg'] =$_SESSION['msg'] = "Updated";
    
}
else if(isset($_GET['delete_id'])){
    $id=(int)$_GET['delete_id'];
    $sql="delete from hacks where hack_id = $id";
    mysqli_query($con,$sql);
    $_SESSION['msg'] = "Hack Deleted";
}
header('location:hack.php');