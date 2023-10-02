<?php  include ('includes/header.php'); ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="./css/recipe_details.css">
       <style>
           video {
                max-width: 100%;
                height: auto;
            }
            .video{
                text-align: center;
            }
            .video h2{
                padding-bottom: 10px;
            }
       </style>
   </head>
   <body>
   <div class="rcontainer">
            <?php
                $sql="Select * from recipes where id=".$_GET['recipe_id'];
                $sqlRun = mysqli_query($con,$sql);
                while($recipes = mysqli_fetch_assoc($sqlRun)){
            ?>
            <div class="video">
                <div class="name">
                    <h2 class=""><?=$recipes['title'] ?></h2>
                </div>
                <video width="400" controls>
                    <source src="./admin/cook_videos/<?= $recipes['video']?>" type="video/mp4">
                </video> 
            </div>
        <?php } ?>
    </div>         
   </body>
   </html>
    
        
    </div>
    <?php
       include ('includes/footer.php');
    ?> 