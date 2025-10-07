<?php
session_start();

if (in_array("logged_in", $_SESSION)) {
    if ($_SESSION["logged_in"] === "true" || $_SESSION["logged_in"]) {
      header(header: "Location: /account");
      exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/navbar.css">
    <link rel="stylesheet" href="/assets/styles/signup.css">
    <title>Signup</title>
</head>
<body>
<header>
  <div class="container">

  <img class="logo" src="/assets/images/the lads.png" alt="Picture of me">

  <nav>
    <li><a href="/">Home</a></li>
    <li><a href="/animelists">Anime list</a></li>
    <li><a href="/account">Account</a></li>
  </nav>

  </div>
</header>
<main>
  <div class="signup-container">
    <div class="signup-box">
      <h1>Create Account</h1>
      
      <form id="signupForm" method="POST">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required>
        </div>
        
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        
        <div class="input-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirm_password" required>
        </div>
        
        <button type="submit" id="signupButton" class="signup-btn">Sign Up</button>
        
        <div class="redirect-link">
          <p>Already have an account? <a href="/login">Login here</a></p>
        </div>
      </form>
    </div>
  </div>
</main>
</body>
<script src="/assets/javascript/signup.js"></script>
</html>