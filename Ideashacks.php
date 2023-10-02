<?php
    
    include ('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./css/hack.css">
    
    
    
</head>
<body>

    <div class="hack__display">
        <h1>Creative Kitchen Hacks and Alternate Ideas</h1>
        <div class="recipesbox">
            <?php
                $sql="select * from hacks order by hack_id desc" ;
                $sqlRun = mysqli_query($con,$sql);
                while($hack = mysqli_fetch_assoc($sqlRun)){
                                    
            ?>
            <div class="recipes">
                <div class="name">
                    <h2><?=$hack['hack_name'] ?></h2>   
                </div>
                <div class="description">
                    <p><?=$hack['hack_description'] ?></p>
                </div>
                    
            </div>
            <?php } ?>           

        </div>
    </div>
   <?php
       include ('includes/footer.php');
    ?> 
   
</body>

</html>
    
    