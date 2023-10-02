<?php
    
    include ('includes/header.php');
    include "db_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" href="./css/search.css">
</head>
<body>
<div>
<?php
        if(isset($_POST['submit'])){
          $search = mysqli_real_escape_string($con, $_POST['str']);
          $sql = "SELECT * from special WHERE title LIKE '%$search%' OR ingredients LIKE '%$search%'";
          $result = mysqli_query($con, $sql);
          $queryResult = mysqli_num_rows($result);
          if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){

              $title=$row['title'];
              $ingredients=$row['ingredients'];
              $devices=$row['devices'];
              $direction=$row['direction'];
              $id=$row['id'];
              $pic=$row['image'];
              
              
                echo "
                <div class='product'>
                  <h1><a href='addtocart.php?id=$id'>Add to basket: $title</a></h1>
                 <img src='./img/$pic' />
                
                </div>
                <div>
                    <h2><strong><a href='special.php'>Go Back</a></strong></h2>
                </div>
                
                ";
            }
          }else{
            echo '<script>alert("There are no results matching your search!")</script>';
            echo "<script>   window.location.href ='special.php'</script>";
          }
        }
?>
</div>

</body>
<?php
   
    include ('includes/footer.php');
    
?>
</html>



