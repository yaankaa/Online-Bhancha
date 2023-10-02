<?php

session_start();
include '../db_config.php';
if(!isset($_SESSION['is_login'])){
    header('location:index.php');
}

$msg=nl2br($_POST['ingredients']);
$msg1=nl2br($_POST['devices']);
$msg2=nl2br($_POST['direction']);
$msg3=nl2br($_POST['alternate']);

if(isset($_POST['action']) and $_POST['action'] == "Add"){
    $name = mysqli_real_escape_string($con, $_POST['title']);
    $ingredients = mysqli_real_escape_string($con,$msg);
    $devices = mysqli_real_escape_string($con,$msg1);
    $subs = mysqli_real_escape_string($con,$msg3);
    $direction = mysqli_real_escape_string($con,$msg2);
    $rKey = mysqli_real_escape_string($con,$_POST['rKey']);
    $cat_id = (int)$_POST['cat_id'];
    $image =$_FILES['image']['name'];
    $video =$_FILES['video']['name'];
    

    if(empty($name && $ingredients && $devices && $subs && $direction && $cat_id && $image && $rKey &&$video)){
        $_SESSION['msg'] = "All Information must be filled";
    }
    else{
        $sql= "insert into recipes(title,ingredients,devices,alternate,direction,cat_id,image,recipe_keyword,video,added_date )
        values('$name','$ingredients','$devices', '$subs','$direction','$cat_id','$image','$rKey','$video',now())";
           
       if(mysqli_query($con,$sql)){
           move_uploaded_file($_FILES['image']['tmp_name'],'../img/'.$image);
           move_uploaded_file($_FILES['video']['tmp_name'],'./cook_videos/'.$video);
           $_SESSION['msg'] = "Recipe Added";
       }
       
       else{
           $_SESSION['msg'] = "Recipe can not be added";
           }
   }
}


else if(isset($_POST['action']) and $_POST['action'] == "edit"){
    $title = mysqli_real_escape_string($con,$_POST['title']);
    $ingre = mysqli_real_escape_string($con,$_POST['ingredients']);
    $id= (int)$_POST['id'];
    $devices = mysqli_real_escape_string($con,$_POST['devices']);
    $subs = mysqli_real_escape_string($con,$_POST['alternate']);
    $direction = mysqli_real_escape_string($con,$_POST['direction']);
    $keyword =mysqli_real_escape_string($con,$_POST['recipe_keyword']);
    $cat = (int)$_POST['cat_id'];

    $photo=$_FILES['image']['name'];
    $photo_tmp=$_FILES['image']['tmp_name'];

    $vid=$_FILES['video']['name'];
    $vid_tmp=$_FILES['video']['tmp_name'];

    move_uploaded_file($photo_tmp, "img/$photo");   
    move_uploaded_file($vid_tmp, "/cook_videos/$vid"); 
    $sql= "update recipes set title ='$title', 
    ingredients='$ingre',  devices= '$devices', alternate= '$subs', direction = '$direction', recipe_keyword= '$keyword', cat_id='$cat', image='$photo', video='$vid' where id=$id";
    mysqli_query($con,$sql);
        $_SESSION['msg'] =$_SESSION['msg'] = "Updated";
    
}
else if(isset($_GET['delete_id'])){
    $id=(int)$_GET['delete_id'];
    $sql="delete from recipes where id = $id";
    mysqli_query($con,$sql);
    $_SESSION['msg'] = "Recipe Deleted";
}
header('location:add_recipes.php');