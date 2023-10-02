<?php

session_start();
include '../db_config.php';
if(!isset($_SESSION['is_login'])){
    header('location:index.php');
}

$msg=nl2br($_POST['ingredients']);
$msg1=nl2br($_POST['devices']);
$msg2=nl2br($_POST['direction']);
$msg3=nl2br($_POST['description']);


if(isset($_POST['action']) and $_POST['action'] == "Add"){
    $name = mysqli_real_escape_string($con, $_POST['title']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $ingredients = mysqli_real_escape_string($con,$msg);
    $devices = mysqli_real_escape_string($con,$msg1);
   
    $direction = mysqli_real_escape_string($con,$msg2);
    $description = mysqli_real_escape_string($con,$msg3);
    
    $image =$_FILES['image']['name'];
   
    

    if(empty($name && $ingredients && $devices  && $direction && $price && $description && $image )){
        $_SESSION['msg'] = "All Information must be filled";
    }
    else{
        $sql= "insert into special(title,ingredients,devices,direction, description, price, image)
        values('$name','$ingredients','$devices','$direction', 'description',' $price','$image')";
           
       if(mysqli_query($con,$sql)){
           move_uploaded_file($_FILES['image']['tmp_name'],'../img/'.$image);
           $_SESSION['msg'] = "Recipe Added";
       }
       
       else{
           $_SESSION['msg'] = "Recipe can not be added";
           }
   }
}


else if(isset($_POST['action']) and $_POST['action'] == "edit"){
    $title = mysqli_real_escape_string($con,$_POST['title']);
    $price = mysqli_real_escape_string($con,$_POST['price']);
    $ingre = mysqli_real_escape_string($con,$_POST['ingredients']);
    $id= (int)$_POST['id'];
    $devices = mysqli_real_escape_string($con,$_POST['devices']);
    
    $direction = mysqli_real_escape_string($con,$_POST['direction']);
    $description = mysqli_real_escape_string($con,$_POST['description']);
    

    $photo=$_FILES['image']['name'];
    $photo_tmp=$_FILES['image']['tmp_name'];

    

    move_uploaded_file($photo_tmp, "img/$photo");   
    
    $sql= "update special set title ='$title', price ='$price', description ='$description', 
    ingredients='$ingre',  devices= '$devices', direction = '$direction', image='$photo' where id=$id";
    mysqli_query($con,$sql);
        $_SESSION['msg'] =$_SESSION['msg'] = "Updated";
    
}
else if(isset($_GET['delete_id'])){
    $id=(int)$_GET['delete_id'];
    $sql="delete from special where id = $id";
    mysqli_query($con,$sql);
    $_SESSION['msg'] = "Recipe Deleted";
}
header('location:add_special.php');