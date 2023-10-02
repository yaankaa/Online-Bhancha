<?php
  
    include ('includes/header.php');
    
    //   if(!isset($_SESSION['is_login'])){
    //      header('location:login.php');
    //  } 
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/banner.css">
        
    </head>
    <body>
        <!--Banner-->
        <?php
            include ('includes/banner.php');
        ?>
        
        <!--main body hero sec-->
        <section class="id">
            <div class="container">
                <div class="hero__wrapper">
                    <div class="hero__left" >
                        <div class="hero__left__wrapper">
                            <h1 class="hero__heading">Food As Your Mother Cooks</h1>
                            <p class="hero__info">
                                
                                Eating at home allows you to control the ingredients in your food, 
                                so you can use natural ingredients instead of unhealthy processed foods.
                                Eating homemade foods lets you add in more fresh fruits and 
                                vegetables to your diets so that you can focus on all-natural ingredients.
                                We offer you the best recipes, alternates and hacks 
                                that will help you save your time, energy and money.
        
                            </p>
                            <div class="button__wrapper">
                                <a href="recipes.php" class="btn btn primary-btn">Explore Recipes</a>
                            </div>
                        </div>
                    </div>
                    <div class="hero__right" >
                        <div class="hero__imgWrapper">
                            <a href="recipes.php"><img src="./img/heroimg.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <div class="display__wrapper" >
                <?php
                    foreach($categories as $category){
                ?>
                <table  class="display">
                        <tr>
                            <td><img src="img/<?= $category['img']; ?>.png" alt="<?php echo $display['name']; ?>"></td>
                        </tr>
                        <tr> <td><a href="recipes.php"><h2>
                            <?php echo $category['name']; ?></h2></a>
                            
                        </td></tr>
                        
                </table> 
                
                <?php
                    }
                ?> 
                
            </div>
            <div class="morerecipe">
                <a href="recipes.php" class="btn btn primary-btn">Categories</a>
            </div>
        </div>
        
            <div class="food__hacks" >
                <div class="head" >Some Food Hacks & Alternative Ideas You Might Want To Know</div>
                <div class="hacks__wrapper" >
                    <?php
                        foreach($hacks as $hack){
                    ?>
                    <div  class="hack">
                    
                        <div class="hack_img">
                            <img src="img/<?php echo $hack['img']; ?>.png" alt="<?= $hack['title']; ?>"> 
                        </div>
                        
                        <div class="hackdescription">
                            <h1><a href="Ideashacks.php"><?php echo $hack['title']; ?></a></h1>
                            <p><?php echo $hack['description']; ?></p>
                        </div>
                    </div> 
                    <?php
                        }
                    ?> 
                </div>
                <div class="hacks">
                    <a href="Ideashacks.php" class="btn btn primary-btn">For More Ideas</a>
                </div>
            </div>
        
        
    <?php
        include ('includes/footer.php');
        ?> 
    
    </body>

    </html>

    
    