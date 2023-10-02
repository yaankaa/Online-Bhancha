
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hack | Online Bhancha</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/admindash.css">
    <style>
        form input[type="submit"]{
    width: 80px;
    background-color: rgb(236, 254, 117);
    color: black;
    cursor: pointer;
    border: none;
    border-radius: 10px;
    padding: 10px;
    font-size: 15px;
}
textarea{
    width: 300px;
    color: black;
    cursor: pointer;
    border: none;
    border-radius: 10px;
    padding: 15px;
    margin-top: 15px;
    font-size: 15px;
    width: 500px;
    
    
    
}

    </style>
    
</head>
<body>
   <?php
        include 'includes/nav.php';
   ?>
    <div class="main-content">
        <div>
                    <h1>Kitchen Hacks Management/ Edit</h1>
                    <p>Edit Your Hacks</p>
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
            <?php
                $sql="Select * from hacks where hack_id=".$_GET['edit_id'];
                $sqlRun = mysqli_query($con,$sql);
                $data = mysqli_fetch_assoc($sqlRun);
            ?>
                <form action="hack_process.php" method="post">
                    
                    <table>
                        <tr>
                            <td><label for="">Name</label></td>
                            <td>
                                <tr>
                                <td ><input type="text"  autocomplete="off" placeholder=""  name="hack_name" style= "width: 100%; height: 50px;" value="<?= $data['hack_name'];?>"   ></td>
                                    
                                </tr>
                            
                        </tr>
                        <tr>
                            <td><label for="">Description</label></td>
                            <td>
                                <tr>
                                    <td><textarea autocomplete="off" value="" placeholder="" type="text" name="hack_description" id="" rows=5><?= $data['hack_description'];?></textarea></td>
                                </tr>    
                        </tr>
                        
                        <tr>
                            <td><input type="submit" value="Edit"></td>
                            <td><input type="hidden" name="hack_id" value="<?= $data['hack_id'] ?>"></td>
                            <td><input type="hidden" name="action" value="edit"></td>
                        </tr>
                    </table>
                
                    
                </form>
                    
        </div>
    </div>
    

</body>
</html>