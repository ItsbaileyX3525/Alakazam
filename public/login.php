<?php
session_start();

if (in_array("logged_in", $_SESSION)) {
    header("Location: /account");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/navbar.css">
    <link rel="stylesheet" href="/assets/styles/login.css">
    <title>Login</title>
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
  <div class="login-container">
    <div class="login-box">
      <h1>Welcome Back</h1>
      <p class="subtitle">Login to your account</p>
      
      <form id="loginForm" method="POST">
        <div class="input-group">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" required>
        </div>
        
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        
        <div class="options">
          <label class="remember-me">
            <input type="checkbox" name="remember_me">
            <span>Remember me</span>
          </label>
          <a href="#" class="forgot-password">Forgot password?</a>
        </div>
        
        <button type="submit" id="submitButton" class="login-btn">Login</button>
        
        <div class="redirect-link">
          <p>Don't have an account? <a href="/signup">Sign up here</a></p>
        </div>
      </form>
    </div>
  </div>
</main>
</body>
<script src="/assets/javascript/login.js"></script>
</html>