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
    <link rel="stylesheet" href="./css/special.css">
    <link rel="stylesheet" href="./css/specialbanner.css">
    
</head>
<body>
        
    <div class="recipes__display">
        <h1>Chef's special recipes</h1>
            <?php
                $sql="select * from special order by id desc";
                $sqlRun = mysqli_query($con,$sql);
                while($recipes = mysqli_fetch_assoc($sqlRun)){
                                    
            ?>
        
            <div class="recipes__info">
                
                <div class="whole">
                    <div class="image">
                        <img src="img/<?= $recipes['image']?>"style="height: 200px; width:295px;" alt="" />
                    </div>
                    <div class="name">
                        <h2 class=""><?=$recipes['title'] ?></h2>
                    </div>
                    <div class="price">
                        <h2 class="">Rs.<?=$recipes['price'] ?></h2>
                    </div>
                    <div class="recipe">
                        <a href="specialpreview.php?recipe_id=<?= $recipes['id'];?>">See Preview</a>
                        <!-- <a href="addtocart.php?recipe_id=<?= $recipes['id'];?>">Add to Basket</a> -->
                    </div>
               </div>
               
                
            </div>
                
        
        <?php } ?>           
    </div> 
</body>

</html>

    <?php
        include ('includes/specialbanner.php');
        include ('includes/footer.php');
    ?> 