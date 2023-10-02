<?php
  
  session_start();
  include '../db_config.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
  <script>
  

   function validateform() {
    var username= document.getElementById("uname");
    var password= document.getElementById("password");
    if (username.value==null || username.value==""){
      alert("Please enter your Username");
      return false;
    }
    
    if (password.value==null || password.value==""){
      alert("Please enter your Password");
      return false;
    }
    
    return true;
    
  }
</script>
    <div class="center">
      <!--<a href="index.php"><img src="./img/l.png" style="width: 125px; height: 100px;" alt=""></a>-->
      <h1>Admin Login</h1>
      
      <form action="loginprocess.php" method="post" >
        <div class="txt_field">
          <input type="text" name="username" id="uname" >
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name= "password" id="password" >
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" value="Login" onclick="return validateform()">
        
      </form>
      <div style="color:red;font-weight:bold;font-size:medium;">
        <?php
            if(isset($_SESSION['msg'])){
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
            }
            ?>
                
            
      </div>
      
    </div>
    
  </body>
</html>
