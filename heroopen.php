<?php
include("database.php");

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book a ride</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="hero.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

html {
  scroll-behavior: smooth;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: "Poppins", sans-serif;
}

header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
}
header nav {
  font-size: 20px;
  width: 90%;
  margin: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 80px;
}

header nav .menu {
  display: flex;
  align-items: center;
}

nav .menu a {
  color: #fff;
  margin-left: 30px;
  position: relative;
}

nav .menu a::after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 0;
  height: 2px;
  background-color: #dd0707;
  transition: 0.4s;
}
nav .menu a:hover::after {
  width: 100%;
}

.content h1 {
  color: #fff;
  margin-bottom: 500px;
}

nav .social a i {
  color: #fff;
  font-size: 22px;
  margin-left: 10px;
  transition: 0.3s;
}

nav .social a i:hover {
  transform: scale(1.3);
  color: #dd0707;
}

/*Mercedes*/
.content .btnM {
  padding: 17px 50px;
  background-color: #fd6500;
  text-transform: uppercase;
  color: #fff;
  font-weight: bold;
  border-radius: 30px;
  border: 2px solid #fd6500;
  margin-right: 15px;
}

.content .btnM:hover {
  background-color: transparent;
}

/*Audi*/
.content .btnA {
  padding: 17px 50px;
  background-color: #00e1ff;
  text-transform: uppercase;
  color: #fff;
  font-weight: bold;
  border-radius: 30px;
  border: 2px solid #00e1ff;
  margin-right: 15px;
}

.content .btnA:hover {
  background-color: transparent;
}

.content .btnB {
  padding: 17px 50px;
  background-color: #a200ff;
  text-transform: uppercase;
  color: #fff;
  font-weight: bold;
  border-radius: 30px;
  border: 2px solid #a200ff;
  margin-right: 15px;
}

.content .btnB:hover {
  background-color: transparent;
}

.content .btnF {
  padding: 17px 50px;
  background-color: #0065c4;
  text-transform: uppercase;
  color: #fff;
  font-weight: bold;
  border-radius: 30px;
  border: 2px solid #0065c4;
  margin-right: 15px;
}

.content .btnF:hover {
  background-color: transparent;
}

.content {
  width: 100%;
  height: 100vh;
  background: url(img/bg.jpg);
  background-position: center;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
}

.content h1 {
  margin-top: 320px;
  color: #fff;
  position: absolute;
  letter-spacing: 4px;
}

/* Sliding Text Animation */
@keyframes slideIn {
  from {
    transform: translateX(100%);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

.slide-in-text {
  animation: slideIn 1s ease-out;
}

/* Sliding Button Animation */
@keyframes slideInUp {
  from {
    transform: translateY(100%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.slide-in-btn {
  animation: slideInUp 1s ease-out;
}

.logoo {
  display: flex;
  align-items: center;
}

.logo-img {
  width: 70px; /* Adjust size as needed */
  height: auto;
  margin-top: 6.5px;
}

.logoo h2 {
  font-size: 22.5px;
  color: white;
  margin-left: 2px;
  margin-right: 2px;
}


      .menu span{
        color: white;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
      <div class="logoo">
        <h2>.drive</h2>
        <a href="indexopen.php"><img src="img/car.svg" alt="Logo" class="logo-img"/></a>
      </div>

        <div class="social">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
        </div>
      </nav>
    </header>

    <div class="content">
      <h1 class="slide-in-text"><span><?php echo "$username"; ?></span>, BOOK A TEST RIDE </h1>
      <div class="links">
        <a href="../CarLP/indexcars/mercedes.php" class="btnM slide-in-btn">Drive Mercedes</a>
        <a href="audi.php" class="btnA slide-in-btn">Drive Audi</a>
        <a href="bmw.php" class="btnB slide-in-btn">Drive BMW</a>
        <a href="ford.php" class="btnF slide-in-btn">Drive Ford</a>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
