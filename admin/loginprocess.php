<?php
session_start();

require_once "../db_config.php";

 
//form submission

if(isset($_POST['username'],$_POST['password'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    

    $sql = "select * from admin where username = '$username' and password = '$password'";

    $sqlRun = mysqli_query($con,$sql);

    $data = mysqli_fetch_assoc($sqlRun);

    if(count($data) > 0)
    {
        $_SESSION['is_login'] = true; 
        header('location:admindashboard.php');
    }
    
    else{
        
        $_SESSION['msg'] = "Invalid username or password";
        header('location:index.php');
    }
    

}
else{
    header('location:login.php');
}


