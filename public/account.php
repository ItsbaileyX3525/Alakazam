<?php
session_start();

if (!in_array("logged_in", $_SESSION)) {
  header("Location: /signup.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/styles/account.css">
    <link rel="stylesheet" href="/assets/styles/navbar.css">
    <title>Account page</title>
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
  <div class="account-container">
    <div class="profile-section">
      <div class="profile-header">
        <div class="profile-info">
          <img class="profile-picture" src="/assets/images/the lads.png" alt="Profile Picture">
          <h1 class="username"><?php echo$_SESSION["username"]?></h1>
        </div>
        <button id="logout-btn" class="logout-btn">LOGOUT</button>
      </div>
    </div>

    <div class="quote-section">
      <div class="quote-content">
        <p id="quote" class="quote-text">"Finally! That took longer to load than a monkey with a calculator!"</p>
        <p id="quoter" class="quote-author">--- Tank Dempsey, COD: Black Ops</p>
      </div>
    </div>

    <div class="content-sections">
      <div class="section-card">
        <h2 class="section-title">Did You Know?</h2>
        <div class="facts-list">
          <div class="fact-item">
            <span class="fact-bullet">•</span>
            <p id="fact-1">One Piece has been running for over 25 years</p>
          </div>
          <div class="fact-item">
            <span class="fact-bullet">•</span>
            <p id="fact-2">JoJo characters are named after musicians</p>
          </div>
          <div class="fact-item">
            <span class="fact-bullet">•</span>
            <p id="fact-3">Attack on Titan's walls are 50 meters tall</p>
          </div>
        </div>
      </div>

      <div class="section-card">
        <h2 class="section-title">Most Popular Anime - 2025</h2>
        <div class="trending-list">
          <div class="trending-item">
            <div class="trending-rank">1</div>
            <div class="trending-info">
              <div class="trending-name">One Piece</div>
              <div class="trending-genre">Adventure, Action</div>
            </div>
          </div>
          <div class="trending-item">
            <div class="trending-rank">2</div>
            <div class="trending-info">
              <div class="trending-name">Demon Slayer</div>
              <div class="trending-genre">Dark Fantasy</div>
            </div>
          </div>
          <div class="trending-item">
            <div class="trending-rank">3</div>
            <div class="trending-info">
              <div class="trending-name">Solo Leveling</div>
              <div class="trending-genre">ower Fantasy, Dark Action</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</body>
<script src="/assets/javascript/account.js"></script>
</html>