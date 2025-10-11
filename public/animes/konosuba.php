<?php
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
  <title>KonoSuba Character Lists</title>
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
      <div class="card" style="background-image: url('/assets/images/konosuba/kazuma.png');" 
           data-character="Kazuma Satou"
           data-description="Kazuma is the pragmatic and often sarcastic protagonist who is transported to a fantasy world. Though not the strongest, his resourcefulness, luck-based skills, and common sense often get the party out of trouble."
           data-ability="Utility Skills + High Luck + Strategic Thinking"
           data-video="https://www.youtube.com/watch?v=aQrzqQyqGmo">
        <h2 class="card-title">Kazuma Satou</h2>
        <p class="card-body">
          Clever and pragmatic adventurer whose survival instincts are his greatest asset.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/konosuba/aqua.png')"
           data-character="Aqua"
           data-description="Aqua is a goddess of water thrust into the party as a support character. Though powerful in purifying and water magic, her vanity and antics often create comedic disaster."
           data-ability="Goddess Water Magic + Purification + Healing"
           data-video="https://www.youtube.com/watch?v=JE5QWG1xThE">
        <h2 class="card-title">Aqua</h2>
        <p class="card-body">
          A well-meaning but reckless goddess whose divine powers are often undermined by her flaws.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/konosuba/megumin.png')"
           data-character="Megumin"
           data-description="Megumin is an eccentric arch-wizard obsessed with explosion magic — she uses a single, overwhelmingly powerful Explosion spell per day. Her devotion to her craft is both comedic and awe-inspiring."
           data-ability="Explosion Magic (single-use, massive power)"
           data-video="https://www.youtube.com/watch?v=mVv9SL_VT-4">
        <h2 class="card-title">Megumin</h2>
        <p class="card-body">
          Explosion-obsessed mage whose single devastating spell changes the tide of any battle.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/konosuba/darkness.png')"
           data-character="Darkness"
           data-description="Darkness is a crusader with incredible defense and a masochistic streak. She acts as the party's tank, absorbing damage while displaying an unusual love for suffering."
           data-ability="Unmatched Defense + Tanking + Masochistic Resilience"
           data-video="https://www.youtube.com/watch?v=o5SEKfpYiyo">
        <h2 class="card-title">Darkness</h2>
        <p class="card-body">
          Stoic tank with unparalleled defense and a bizarre appetite for punishment.
        </p>
      </div>
      <!-- Removed leftover Mashle character cards -->
      <div class="card" style="background-image: url('/assets/images/konosuba/devilking.png')"
           data-character="The Devil King"
           data-description="The primary looming threat of the world — the Devil King is an overarching antagonist referenced throughout the series as the ultimate evil."
           data-ability="World-conquering Power (rarely seen directly)"
           data-video="">
        <h2 class="card-title">The Devil King</h2>
        <p class="card-body">
          The unseen menace whose presence motivates many conflicts across the world.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/konosuba/sylvia.png')"
           data-character="Sylvia"
           data-description="Sylvia is a supporting character who appears as a formidable foe in certain arcs, often testing the party's limits."
           data-ability="High-tier Combat Skills + Dragonic Power (varies by incarnation)"
           data-video="">
        <h2 class="card-title">Sylvia</h2>
        <p class="card-body">
          Formidable opponent whose strength challenges even experienced adventurers.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/konosuba/vanir.png')"
           data-character="Vanir"
           data-description="Vanir is a demon and former antagonist who later becomes an odd but useful ally; he specializes in trickery, illusion, and magical gadgets."
           data-ability="Illusions + Demonic Magic + Tactical Support"
           data-video="">
        <h2 class="card-title">Vanir</h2>
        <p class="card-body">
          Mischievous demon whose intelligence and magic make him a wild card ally.
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