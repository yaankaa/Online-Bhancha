<?php
    session_start();
    include '../db_config.php';
    if(!isset($_SESSION['is_login'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bhancha Admin</title>
    
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./includes/css/nav.css">
</head>
<body>
<input type="checkbox" name="" id="menu-toggle">
    <div class="overlay">
        <label for="menu-toggle"></label>
    </div>
    <div  class="sidebar" >
        <div class="sidebar-container">
            <div class="brand">
                <h2>
                    
                       <a href="admindashboard.php">Online Bhancha</a> 
                    
                </h2>
            </div>
                <div class="sidebar-avartar">
                    <div>
                        <img src="../img/l.png" alt="">
                    </div>
                    <div class="avartar-info">
                        <div class="avartar-text">
                            <h4>Online Bhancha ko Admin</h4>
                            <small>1029-1234-235</small>
                        </div>
                       
                    </div>
                </div>
                
            <div  class="sidebar-menu">
                <ul>
                    <li class="nav-item">
                        <a href="category.php">
                            <span class="las la-adjust"></span>
                            <span>Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="add_recipes.php">
                            <span class="las la-utensils"></span>
                            <span>Add Recipes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="hack.php">
                            <span class="las la-bell"></span>
                            <span>Hack Lists</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="special.php">
                            <span class="las la-user-tie"></span>
                            <span>Chef's Special Recipes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="add_special.php">
                            <span class="las la-utensils"></span>
                            <span>Add Chef's Special Recipes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="sugesstions.php">
                            <span class="las la-user-tie"></span>
                            <span>Suggestion Lists</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class = "btn btn-danger" href="logout.php">
                            <span class="las la-user"></span>
                            <span>Logout</span>
                        </a>
                    </li>
                  
                </ul>
            </div>  
        </div>
    </div>
    <script src="../main.js"></script>
</body>
</html>