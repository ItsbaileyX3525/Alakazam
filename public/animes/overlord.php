<?php
// TODO: Add videos for the characters


session_start();

$logged_in = false;

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
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
  <title>Overlord Character Lists</title>
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
      <div class="card" style="background-image: url('/assets/images/overlord/ainz.png');" 
           data-character="Ainz Ooal Gown"
           data-description="Ainz is the undead overlord and leader of the Great Tomb of Nazarick. With vast magical knowledge and overwhelming power, he commands legions of loyal NPC guardians and strategizes to preserve his domain in the new world."
           data-ability="All-round Supreme Magic + Strategic Intelligence + Undead Physiology"
           data-video="https://www.youtube.com/watch?v=t4hWd-K4Zr0">
        <h2 class="card-title">Ainz Ooal Gown</h2>
        <p class="card-body">
          Supreme sorcerer-king whose magical arsenal and leadership make him nearly unstoppable.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/overlord/albedo.png')"
           data-character="Albedo"
           data-description="Albedo is the Overseer of the Floor Guardians and one of Ainz's most devoted followers. Fiercely protective and obsessively loyal, she wields strong melee prowess and powerful defensive magic."
           data-ability="Superhuman Strength + Defense Magic + Tactical Loyalty"
           data-video="https://www.youtube.com/watch?v=RH5zbRE2FXc">
        <h2 class="card-title">Albedo</h2>
        <p class="card-body">
          Devoted guardian whose ferocious loyalty to Ainz is matched by deadly combat ability.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/overlord/shalltear.png')"
           data-character="Shalltear Bloodfallen"
           data-description="Shalltear is a powerful vampire and Floor Guardian known for her ferocity and combat skill. Elegant but ruthless, she excels in close-quarters combat and blood magic."
           data-ability="Vampiric Powers + Blood Magic + Exceptional Melee Combat"
           data-video="https://www.youtube.com/watch?v=RYCwD_B21BE">
        <h2 class="card-title">Shalltear Bloodfallen</h2>
        <p class="card-body">
          Elegant vampire warrior whose brutality in combat is tempered by loyalty to Nazarick.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/overlord/demiurge.png')"
           data-character="Demiurge"
           data-description="Demiurge is the Floor Guardian in charge of strategy and intellect — a mastermind who crafts devious plans for Nazarick. Cold, calculating, and ruthlessly efficient."
           data-ability="Tactical Genius + Demonic Magic + Psychological Warfare"
           data-video="https://www.youtube.com/watch?v=oVRZpzuL620">
        <h2 class="card-title">Demiurge</h2>
        <p class="card-body">
          The mastermind behind many of Nazarick's most effective and cruel strategies.
        </p>
      </div>
      <!-- Removed leftover Mashle character cards -->
      <div class="card" style="background-image: url('/assets/images/overlord/gazef.png')"
           data-character="Gazef Stronoff"
           data-description="Gazef is a noble warrior and the captain of the Re-Estize Kingdom's guard. Honorable and skilled in martial combat, he stands as a principled defender against Nazarick's forces."
           data-ability="Master Swordsman + Unwavering Valor"
           data-video="https://www.youtube.com/watch?v=1NfHQUczI4M">
        <h2 class="card-title">Gazef Stronoff</h2>
        <p class="card-body">
          A nation's sword, renowned for honorable combat skills and steadfast courage.
        </p>
      </div>
  <div class="card" style="background-image: url('/assets/images/overlord/platnium.png')"
           data-character="Platinum Dragon Lord"
           data-description="The Platinum Dragon Lord is a legendary dragon whose power threatens entire nations. Its appearance reshapes the balance of power and tests even Nazarick's might."
           data-ability="World-class Dragonry + Devastating Breath/Scale-based Powers"
           data-video="https://www.youtube.com/watch?v=VqGpGWwQXws">
        <h2 class="card-title">Platinum Dragon Lord</h2>
        <p class="card-body">
          Ancient draconic force whose sheer power dwarfs most mortal threats.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/overlord/jircniv.png')"
           data-character="Jircniv Rune Farlord El-Nix"
           data-description="Jircniv is a shrewd ruler and political figure whose decisions affect large-scale interactions with Nazarick. While not a frontline fighter, his political influence shapes alliances and conflicts."
           data-ability="Political Strategy + Diplomatic Maneuvering"
           data-video="https://www.youtube.com/watch?v=hz6HzdogWZ0">
        <h2 class="card-title">Jircniv Rune Farlord El-Nix</h2>
        <p class="card-body">
          A calculating ruler whose maneuvers can alter the fate of kingdoms.
        </p>
      </div>
    </div>

    <div id="characterModal" class="modal">
      <div class="modal-content">
        <span class="modal-close">&times;</span>
        <div class="modal-body">
          <div class="modal-left">
            <h2 id="modalCharacterName"></h2>
            <div class="modal-section">
              <h3>Description</h3>
              <p id="modalDescription"></p>
            </div>
            <div class="modal-section">
              <h3>Ability</h3>
              <p id="modalAbility"></p>
            </div>
          </div>
          <div class="modal-right">
            <div class="video-container">
              <iframe id="modalVideo" 
                      width="100%" 
                      height="100%" 
                      title="YouTube video player"
                      frameborder="0" 
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
        
        <div class="comments-section">
          <h3>Comments</h3>
          
          <?php if ($logged_in): ?>
          <form id="commentForm" class="comment-form">
            <textarea 
              id="commentTextarea" 
              placeholder="Share your thoughts about this character..." 
              maxlength="1000"
              required></textarea>
            <div class="comment-form-actions">
              <button type="submit" id="commentSubmitBtn" class="comment-submit-btn">Post Comment</button>
            </div>
          </form>
          <?php else: ?>
          <div class="comment-login-message">
            Please <a href="/login">log in</a> to leave a comment.
          </div>
          <?php endif; ?>
          
          <div id="commentsList" class="comments-list">
            <div class="comments-empty">Loading comments...</div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
<script src="/assets/javascript/lists-character.js"></script>
<script src="/assets/javascript/comment.js"></script>
</html>