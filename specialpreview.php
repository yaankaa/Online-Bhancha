<?php  include ('includes/header.php'); ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="./css/special_preview.css">
       <script src="js/html2pdf.bundle.min.js"></script>
       
   </head>
   <body>
   <div class="rcontainer">
            <?php
                $sql="Select * from special where id=".$_GET['recipe_id'];
                $sqlRun = mysqli_query($con,$sql);
                while($recipes = mysqli_fetch_assoc($sqlRun)){
            ?>

            <table class="recipe__details" id="recipe__details">
                <tr class="image">
                    <td><img src="img/<?= $recipes['image']?>" style="height: 240px; width:350px;"alt="<?php echo $recipes['title'];?>"></td>
                </tr>
                    <tr class="desc">
                    <tr >
                        <td><h1><strong> <?php echo $recipes['title']; ?></strong></h1>
                        <h3>Rs.<?= $recipes['price'];?></h3> 
                        
                    </td>
                    </tr>
                    <!-- <tr>
                        <td><strong>Ingredients </strong> <br>
                        <?= $recipes['ingredients'];?>
                    </td>
                    </tr> -->
                    <!-- <tr>
                        <td><strong>Devices Used </strong> <br>
                        <?= $recipes['devices'];?></td>
                    </tr> -->
                    
                    
                    <tr >
                        <td><strong>Description </strong> <br>
                        <?= $recipes['description'];?></td>
                    </tr> 
                    <tr >
                        <td><strong>Price: </strong> 
                        <?= $recipes['price'];?></td>
                    </tr> 
                    <tr >
                        <td><a href="addtocart.php?recipe_id=<?= $recipes['id'];?>">Add to Basket</a></td>
                    </tr>
                    </tr>
                   
              
                    
            </table>
            
        <?php } ?>
    </div>   
    
   </body>
   </html>
    
    <?php
       include ('includes/footer.php');
    ?> 