<?php  include ('includes/header.php'); ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="./css/recipe_details.css">
       <script src="js/html2pdf.bundle.min.js"></script>
       <style>
      
        .recipe__details .download a {
            color: red;
            font-weight: bold;
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
            <div class="whole">

            
            <table class="recipe__details" id="recipe__details">
                <tr class="image">
                    <td><img src="img/<?= $recipes['image']?>" style="height: 240px; width:350px;"alt="<?php echo $recipes['title'];?>"></td>
                </tr>
                
                <tr>
                    <td><strong>Name: </strong><?php echo $recipes['title'];?>
                   
                </td>
                </tr>
                <tr>
                    <td><strong>Ingredients </strong> <br>
                    <?= $recipes['ingredients'];?>
                </td>
                </tr>
                <tr>
                    <td><strong>Devices Used </strong> <br>
                    <?= $recipes['devices'];?></td>
                </tr>
                <tr>
                    <td><strong>Alternatives (Devices/Ingredients)</strong> <br>
                    <?= $recipes['alternate'];?></td>
                    <tr>
                        <td><i>For more ideas like this goto  <a href="Ideashacks.php">Hacks/Ideas</a><i></td>
                    </tr>
                    
                </tr>
                
                <tr>
                    <td><strong>Direction </strong> <br>
                    <?= $recipes['direction'];?></td>
                </tr>
                <tr class="download">
                    <td><a href="#" onclick="downloadfn();">Download Recipe</a></td>
                </tr>
                
            </table>
            </div>
            <div class="video">
                
                            <h2>You Can Also See The Video </h2>
                            <video width='350px' height='200px' controls>
                                <source src="./admin/cook_videos/<?= $recipes['video']?>">
                            </video> 
                        
                </div>
        
            
            
        <?php } ?>
    </div>   
    <script>
    
        function downloadfn() {
            
            const element = document.getElementById("recipe__details");
            const opt = {
                margin: 1,
                filename: "recipe.pdf",
                image: { type: "jpeg", quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
            };

            html2pdf().set(opt).from(element).save();
        }
    </script>
   </body>
  
   <?php
       include ('includes/footer.php');
    ?> 
   
   </html>
    
   