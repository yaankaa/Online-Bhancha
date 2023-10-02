
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
       
            #rnameErr,#rfoodErr, #rdeviceErr, #rpriceErr, #alterErr, #rdirectErr, #rimgErr, #rvidErr, #rkeyErr, #rsubmitErr{
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
            
            <form action="special_process.php" method="post" name="cook"
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
                    
                    <tr  class="rdirection">
                        <td>Direction:</td>
                        <tr>
                            <td><textarea name="direction"  cols="100" rows="10"  id="rdirection" onkeyup="Rdirection();"></textarea></td>
                            <td><span id="rdirectErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr  class="rdescription">
                        <td>Price:</td>
                        <tr>
                            <td><textarea name="description"  cols="50" rows="2"  id="rdescription" onkeyup="Rdescription();"></textarea></td>
                            <td><span id="rdescErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr  class="rprice">
                        <td>Price:</td>
                        <tr>
                            <td><textarea name="price"  cols="50" rows="2"  id="rprice" onkeyup="Rprice();"></textarea></td>
                            <td><span id="rpriceErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr>
                        <td>Image:</td>
                        <tr>
                            <td><input type="file" name="image" id="rimage" onchange="Rimg();"></td>
                            <td><span id="rimgErr"></span></td>
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