<?php
include("registerform.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="reg.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
  </head>

  <body>
  <div class="logoo">
        <h2>.drive</h2>
        <a href="../index.php"><img src="../img/car.svg" alt="Logo" class="logo-img"/></a>
      </div>
    <div class="cover">
      <div class="form-container">
        <form class="regForm" id="registerForm" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <input type="text" name="fullname" id="fullname" placeholder="Full Name"><br>
            <span class="error" id="fullnameError"></span><br>

    
            <input type="text" name="email" id="email" placeholder="Email" value="<?php isset($email) ? $email : ''; ?>"><br>
            <span class="error" id="emailError"></span><br> 


            <input type="text" name="username" placeholder="Username" id="username" pattern="[A-Za-z0-9]+"><br>
            <span class="error" id="usernameError"></span><br>

            <input type="password" name="password" placeholder="Password" id="password" minlength="8"><br>
            <span class="error" id="passwordError"></span><br>
            
            <input type="submit" name="submit" value="Register">
            <span class="haveAcc">Already have account? <a href="../Login/login.php">Login</a></span>
        </form>
        </div>
    </div>
    <script src="registerform.js"></script>
    <script src="../script.js"></script>
  </body>
</html>
