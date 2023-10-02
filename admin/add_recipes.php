
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Online Bhancha</title>

    
    
   <style>
      
      .btn input{
        width: 100px; 
        height: 40px;
        background-color: lightgreen;
      }
       
            #rnameErr,#rfoodErr, #rdeviceErr, #alterErr, #rdirectErr, #rimgErr, #rvidErr, #rkeyErr, #rsubmitErr{
                color: red;
            }
        </style>
</head>
<body>
   <?php
        include 'includes/nav.php';
   ?>
    <div class="main-content">
        <div>
            <h1>Recipes Management</h1>
            <p>Manage Your Recipes</p>
        </div>
        <div class="row">
            <div style="color: red;">
            <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                }
                
            ?>
            </div>
            
            <form action="recipes_process.php" method="post" name="cook"
                enctype="multipart/form-data">
                <table>
                    <tr class="rname">
                        <td>Name:</td>
                        <tr>
                            <td><input type="text" name="title" id="rname"  style= "width: 100%; height: 50px;" onkeyup="Rname();" ></td>
                            <td><span id="rnameErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr  class="ringredients">
                        <td>Ingredients:</td>
                        <tr>
                            <td><textarea name="ingredients" cols=100 rows=10  id="ringredients" onkeyup="Ringredients();"></textarea></td>
                            <td><span id="rfoodErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr  class="rdevices">
                        <td>Devices Used:</td>
                        <tr>
                            <td><textarea name="devices"  cols="100" rows="10"  id="rdevices" onkeyup="Rdevices();"></textarea></td>
                            <td><span id="rdeviceErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr  class="rsubs">
                        <td>Alternatives (Devices/Ingredients):</td>
                        <tr>
                            <td><textarea name="alternate"  cols="100" rows="10"  id="alter" onkeyup="Alter();"></textarea></td>
                            <td><span id="alterErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr  class="rdirection">
                        <td>Direction:</td>
                        <tr>
                            <td><textarea name="direction"  cols="100" rows="10"  id="rdirection" onkeyup="Rdirection();"></textarea></td>
                            <td><span id="rdirectErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr>
                        <td>Image:</td>
                        <tr>
                            <td><input type="file" name="image" id="rimage" onchange="Rimg();"></td>
                            <td><span id="rimgErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr>
                        <td>Video:</td>
                        <tr>
                        <td><input type="file" name="video" id="file" onclick="Rvid();"> </td>
                        <td><span id="vidErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr>
                        <td>Category:</td>
                        <tr>
                            <td>
                                <select name="cat_id" id="">
                                    <?php
                                        $sql="select * from categories order by cat_id desc";
                                        $sqlRun = mysqli_query($con,$sql);
                                        while($category = mysqli_fetch_assoc($sqlRun)){  
                                    ?>
                                    <option value="<?= $category['cat_id'] ?>"><?= $category
                                    ['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        
                        
                    </tr>
                        
                        
                    <tr class="rkey">
                        <td>Recipe KeyWord:</td>
                        <tr>
                            <td><textarea name="rKey"  id="rkey"cols="100" rows="10" onkeyup="Rkey();"></textarea></td>
                            <td><span id="rkeyErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr class="btn">
                        <td><input type="submit" name="submit" value="Add" class="" onclick="return ValidateRecipe()" ></td>
                        <td><span id="rsubmitErr"></span></td>
                        <input type="hidden" name="action" value="Add">
                    </tr>
                   
                    
                </table>
            </form>
        </div>
    </div>
    

</body>
</html>