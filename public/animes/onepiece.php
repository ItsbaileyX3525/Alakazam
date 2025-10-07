<?php
session_start();

$logged_in = false;

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === "true") {
    $logged_in = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/navbar.css">
    <link rel="stylesheet" href="/assets/styles/lists.css">
    <title>One piece lists</title>
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
    <div class="cards-container">
      <div href="/animes/onepiece.php" class="card" style="background-image: url('/assets/images/onepiece/luffy.png');">
        <h2 class="card-title">Monkey D. Luffy</h2>
        <p class="card-body">
          Monkey D. Luffy is one of the most powerful peoeple in the one piece universe, with his gum gum rubber fruit he dominates the scene. Click to flip and see more.
        </p>
      </div>
      <div href="/animes/bleach.php" class="card" style="background-image: url('/assets/images/onepiece/nico.png')">
        <h2 class="card-title">Nico Robin</h2>
        <p class="card-body">
          Blaech is considered to be one of the "Big Three", in bleach, their magic-like power is derived from "Hadō"
        </p>
      </div>
      <div href="/animes/jojo.php" class="card" style="background-image: url('/assets/images/onepiece/chopper.png')">
        <h2 class="card-title">Tony Tony Chopper</h2>
        <p class="card-body">
          Jojo's Bizarre Adventure is one of the best animes to exist, split into multiple parts, their magic power system stems from "stands" or "hamon".
        </p>
      </div>
      <div href="/animes/jjk.php" class="card" style="background-image: url('/assets/images/jjkBackground.png')">
        <h2 class="card-title">Brooke</h2>
        <p class="card-body">
          The land of Jujutsu Kaisen is that of a big one, fighting a curse called "Sukuna", their magic powers are called "Cursed Energy".
        </p>
      </div>
      <div href="/animes/blackclover.php" class="card" style="background-image: url('/assets/images/bcBackground.png')">
        <h2 class="card-title">Kaido</h2>
        <p class="card-body">
          In black clover the magic they actually use is magic, they use "mana" and spells from their grimoires.
        </p>
      </div>
      <div class="card">
        <h2 class="card-title">The elders</h2>
        <p class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </div>
      <div class="card">
        <h2 class="card-title">Marshell D. Teach</h2>
        <p class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </div>
      <div class="card">
        <h2 class="card-title"></h2>
        <p class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </div>
    </div>
  </main>
</body>
<script src="/assets/javascript/lists.js"></script>
</html>