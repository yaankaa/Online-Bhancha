<?php

session_start();
include '../db_config.php';
if(!isset($_SESSION['is_login'])){
    header('location:index.php');
}

else if(isset($_GET['delete_id'])){
    $id=(int)$_GET['delete_id'];
    $sql="delete from messages where sid = $id";
    mysqli_query($con,$sql);
    $_SESSION['msg'] = "Message Deleted";
}
header('location:sugesstions.php');