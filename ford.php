<?php
include("submit_form.php");

$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']); // Clear the message after displaying it
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ford</title>
    <link rel="stylesheet" href="ford.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
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
  margin-left: 12px;
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
  background-color: #0065c4;
  transition: 0.4s;
}
nav .menu a:hover::after {
  width: 100%;
}

nav .social a i {
  color: #fff;
  font-size: 22px;
  margin-left: 10px;
  transition: 0.3s;
}

nav .social a i:hover {
  transform: scale(1.3);
  color: #0065c4;
}

.contentF {
  width: 100%;
  height: 100vh;
  background: url(img/fordgt2.jpg);
  background-position: center;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
}

form {
  display: flex;
  flex-direction: column;
}

form label {
  margin-bottom: 5px;
  color: white;
  font-weight: 300;
}

form input {
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  outline: none;
}

form button {
  padding: 10px;
  background: transparent;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
  border: 1px solid #0065c4;
}

form ::placeholder {
  font-size: 13px;
  opacity: 70%;
}

form button:hover {
  color: #fff;
  background: #0065c4;
}

.menu {
  flex-grow: 1;
  text-align: center;
}

.menu .home-icon {
  margin-top: 220px;
  margin-left: 538px;
  order: 1;
}

.formtext {
  position: absolute;
  margin-top: 290px;
  margin-left: 470px;
  border-radius: 8px;
  text-align: center;
}

.formtext h3 {
  font-weight: 300;
  color: #fff;
  padding: 7px;
  margin-left: 45px;
}

.formtext h3 span {
  font-weight: 600;
  color: #0065c4;
}

/* Logo styles */
.logoo {
  display: flex;
  align-items: center;
}

.logo-img {
  width: 70px; /* Adjust size as needed */
  height: auto;
  margin-top: 5px;
}

.logoo h2 {
  color: white;
  margin-left: 2px;
  margin-right: 2px;
  font-size: 20px;
}

    </style>
  </head>
  <body>
    <header>
      <nav>
      <div class="logoo">
        <h2>.drive</h2>
        <a href="#hero"><img src="./img/car.svg" alt="Logo" class="logo-img"/></a>
      </div>
        <div class="menu">
          <a href="indexopen.php" class="home-icon"> <i class="fa-solid fa-house"></i></a>
        </div>
        <div class="formtext">
          <h3>Book a test drive with <span>Ford GT</span></h3>
        </div>
        <div class="social">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
        </div>
      </nav>
    </header>

    <div class="contentF">
    <form id="testRideForm" method="POST" action="submit_form.php">
        <label for="fullname"></label>
        <input type="text" id="fullname" name="fullname" required placeholder="Full Name"/>

        <label for="age"></label>
        <input type="number" id="age" name="age" required placeholder="Age"/>

        <label for="experience"></label>
        <input type="number" id="experience" name="experience" required placeholder="Driving Experience (years)" />

        <label for="email"></label>
        <input type="email" id="email" name="email" required placeholder="Email" />

        <input type="hidden" name="car_model" value="Ford GT" />

        <button type="submit">Submit</button>
        <?php if ($message): ?>
            <div class="success-message" id="successMessage"><?= $message ?></div>
        <?php endif; ?>
      </form>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
  const successMessage = document.getElementById("successMessage");
  if (successMessage) {
    successMessage.style.display = "block";
    setTimeout(function () {
      successMessage.style.display = "none";
    }, 5000); // Hide after 4 seconds
  }
});
    </script>
  </body>
</html>
