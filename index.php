<?php
include("database.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drive .Me</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <header>
      <nav>
      <div class="logoo">
        <h2>.drive</h2>
        <a href="#hero"><img src="img/car.svg" alt="Logo" class="logo-img"/></a>
      </div>
        <div class="menu">
          <a href="#hero"><i class="fa-solid fa-house"></i></a>
          <a href="#mercedes">Mercedes</a>
          <a href="#audi">Audi</a>
          <a href="#bmw">BMW</a>
          <a href="#ford">Ford</a>
        </div>
        <div class="auth-buttons">
              <a href="../CarLP/Login/login.php" class="btn login-btn">Login</a>
              <a href="../CarLP/Register/register.php" class="btn register-btn">Register</a>

        </div>
        <div class="social">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
        </div>
      </nav>
    </header>

    <div class="hero" id="hero">
      <div class="text">
        <h4>Powerful and</h4>
        <h1>
          Fierce to <br />
          <span>Drive</span>
        </h1>
        <p>Real Poise, Real Power, Real Performance</p>
        <a href="../CarLP/hero.php" class="btn">Book a test ride</a>
      </div>
    </div>
    <div class="mercedes" id="mercedes">
      <div class="text">
        <h4>Unleash the Power</h4>
        <h1>
          Mercedes <br />
          <span>Amg One</span>
        </h1>
        <p>Experience Unmatched Power and Unrivaled Speed</p>
        <a href="../CarLP/Register/register.php" class="btn">Book a test ride</a>
      </div>
    </div>
    <div class="audi" id="audi">
      <div class="text">
        <h4>Precision Power</h4>
        <h1>
          Audi <br />
          <span>R8</span>
        </h1>
        <p>Something Different</p>
        <a href="../CarLP/Register/register.php" class="btn">Book a test ride</a>
      </div>
    </div>
    <div class="bmw" id="bmw">
      <div class="text">
        <h4>Precision Power</h4>
        <h1>
          BMW <br />
          <span>i8</span>
        </h1>
        <p>Unique style</p>
        <a href="../CarLP/Register/register.php" class="btn">Book a test ride</a>
      </div>
    </div>
    <div class="ford" id="ford">
      <div class="text">
        <h4>Precision Power</h4>
        <h1>
          Ford <br />
          <span>GT</span>
        </h1>
        <p>Wind starter</p>
        <a href="../CarLP/Register/register.php" class="btn">Book a test ride</a>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
