

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Online Bhancha</title>
    <link rel="stylesheet" href="./includes/css/admindash.css">
   
</head>
<body>
   <?php
        include 'includes/nav.php';
   ?>
    <div class="main-content">
        
            <div>
                <div>
                    <h1>Welcome To Dashboard</h1>
                    <p>Your Recipes So Far</p>
                </div>
                <table>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Option</th>
                    </tr>
                    
                    <?php
                        $sql="select * from special";
                        $sqlRun = mysqli_query($con,$sql);
                        $i=1;
                        while($recipes = mysqli_fetch_assoc($sqlRun)){
                                    
                    ?>
                    <tr>
                    <td>
                       <?php
                           echo $i++;
                       ?>
                    </td>
                        <td><?= $recipes['title'];?></td>
                        <td><img src="../img/<?= $recipes['image'];?> " style="height: 150px; width:200px;"></td>
                       
                        <td>
                            <a href="edit_special.php?edit_id=<?= $recipes['id']?>">Edit</a>  | 
                            <a onclick="return confirm('Are you sure?')"href="special_process.php?delete_id=<?= $recipes['id']?>">Delete</a> 
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
           
         
        
    </div>
    

</body>
</html>