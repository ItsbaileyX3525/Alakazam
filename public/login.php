<?php
session_start();

if (!in_array("logged_in", $_SESSION)) {
    header("Location: /");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/navbar.css">
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
</body>
</html>