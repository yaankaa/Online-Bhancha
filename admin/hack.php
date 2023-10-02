

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Online Bhancha</title>
    
   
    <link rel="stylesheet" href="./includes/css/hack.css">

    <style>
            #nameErr,#msgErr, #submitErr{
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
            <h1>Kitchen Hacks Management</h1>
            <p>Manage Your Hacks/Alternate Ideas</p>
        </div>
        <div class="row" >
            <div style="color:red";>
            <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                }
            ?>
            </div>
           
            <form action="hack_process.php" method="post">
            <table>
                    <tr class="">
                        <td>Name:</td>
                        <tr>
                            <td><input type="text" name="hack_name" id="name" style= "width: 100%; height: 50px;" onkeyup="ValidateName();"></td>
                            <td><span id="nameErr"></span></td>
                        </tr>
                        
                    </tr>
                    <tr  class="">
                        <td>Description:</td>
                        <tr>
                            <td><textarea name="hack_description" id="messages" rows=10; onkeyup="ValidateDesc();" ></textarea></td>
                            <td><span id="msgErr"></span></td>
                        </tr>
                       
                        
                    </tr>
                        <tr>
                            <td>
                            <input type="submit" value="Add" onclick="return ValidateHack()">
                            <p id="submitErr"></p>
                            <input type="hidden" name="action" value="Add">
                            </td>
                    </tr>
                
                   
                
                
                         
            </form>
            <table class="table">
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    
                    <th>Option</th>
                </tr>
                <?php
                    $sql="select * from hacks order by hack_id ";
                    $sqlRun = mysqli_query($con,$sql);
                    $i=1;
                    while($hack = mysqli_fetch_assoc($sqlRun)){  
                ?>
                <tr>
                <td>
                       <?php
                           echo $i++;
                       ?>
                    </td>
                    <td><?= $hack['hack_name'];?></td>
                    
                   
                    <td>
                    <a href="edit_hack.php?edit_id=<?= $hack['hack_id'];?>">Edit</a>  | 
                    <a onclick="return confirm('Are you sure?')"href="hack_process.php?delete_id=<?= $hack['hack_id'];?>">Delete</a> </td>
                </tr>
                <?php } ?>
            </table>
        </div>   
    </div>
    

</body>
</html>