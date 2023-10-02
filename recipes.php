<?php
    
    include ('includes/header.php');
    include "db_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./css/recipes.css">
</head>
<body>
    
    <div class="side">
        <h2>Categories</h2>
        
        <?php
            if(isset($_GET['cid'])){
                $cat_id = $_GET['cid'];
            }
            
            $sql="select * from categories order by cat_id desc";
            $sqlRun = mysqli_query($con,$sql);
            if(mysqli_num_rows($sqlRun) > 0){
                $active = "";
        ?>
        <div class="cat_name">
            <ul>
                <?php while($category = mysqli_fetch_assoc($sqlRun)){ 
                    if(isset($_GET['cid'])){
                        if($category['cat_id' == $cat_id]){
                            $active = "active";
                        }else{
                            $active = "";
                        }
                    }

                echo "<li><a class='{$active}' href='category.php?cid={$category['cat_id']}'>{$category['name']}</a></li>";
                } ?>
            </ul>  
        </div>
        
        <?php } ?>
    </div>
    <div class="recipes__display">
        <h1>All Recipes</h1>
            <?php
                $sql="select * from recipes, categories where categories.cat_id=recipes.cat_id order by id desc";
                $sqlRun = mysqli_query($con,$sql);
                while($recipes = mysqli_fetch_assoc($sqlRun)){
                                    
            ?>
        
            <div class="recipes__info">
                <div class="image">
                    <img src="img/<?= $recipes['image']?>"style="height: 200px; width:295px;" alt="" />
                </div>
                <div class="name">
                    <h2 class=""><?=$recipes['title'] ?></h2>
                </div>
                <div class="recipe">
                    <a href="recipedetails.php?recipe_id=<?= $recipes['id'];?>">See Recipe</a>
                </div>
                <div class="vid">
                    <a href="recipevideo.php?recipe_id=<?= $recipes['id'];?>">See Video</a>
                </div>
               
            </div>
        
        <?php } ?>           
    </div> 
</body>

</html>
    <?php
        include ('includes/footer.php');
    ?> 