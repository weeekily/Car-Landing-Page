<?php
include("../database.php");
include("loginform.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="../error.css" />

  </head>

  <body>
  <div class="logoo">
        <h2>.drive</h2>
        <a href="../index.php"><img src="../img/car.svg" alt="Logo" class="logo-img"/></a>
      </div>
    <div class="cover">
    <div class="form-container">
        <form class="loginForm" id="loginForm" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <input type="text" name="email" id="email" placeholder="Email" value="<?php isset($email) ? $email : ''; ?>"><br>
            <span class="error" id="emailError"></span><br> 

            <input type="password" name="password" placeholder="Password" id="password" minlength="8"><br>
            <span class="error" id="passwordError"></span><br>
            
            <input type="submit" name="submit" value="Login">
            <span class="noAcc">Don't have an account? <a href="../Register/register.php">Register</a></span>
        </form>
    </div>
    </div>
    

    <script src="loginform.js"></script>
    <script src="../script.js"></script>
  </body>
</html>
