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

<?php
if(isset($_GET['cid'])){
    $cat_id = $_GET['cid'];
}

$sql = "select recipes.id, recipes.title, recipes.ingredients, recipes.devices, recipes.direction, recipes.image, recipes.video
from recipes left join categories on recipes.cat_id = categories.cat_id 
where recipes.cat_id = $cat_id
order by recipes.id desc";


$sqlRun = mysqli_query($con,$sql);
if(mysqli_num_rows($sqlRun) > 0){
    while($row = mysqli_fetch_assoc($sqlRun)){
        ?>
        <div class="recipes__display">
                <div class="recipes__info">
                    <div class="image">
                        <img src="img/<?php echo $row['image']?>"style="height: 200px; width:295px;" alt="" />
                    </div>
                    <div class="name">
                        <h2 class=""><?php echo $row['title'] ?></h2>
                    </div>
                    <div class="recipe">
                        <a href="recipedetails.php?recipe_id=<?php echo $row['id'];?>">See Recipe</a>
                    </div>
                    <div class="vid">
                        <a href="recipevideo.php?recipe_id=<?php echo $row['id'];?>">See Video</a>
                    </div>
                    
                </div>
        </div>
    <?php    }
}else{
    echo '<script>alert("There are no results!")</script>';
    echo "<script>   window.location.href ='recipes.php'</script>";
}


?>
</body>
</html>






<?php
       include ('includes/footer.php');
?> 