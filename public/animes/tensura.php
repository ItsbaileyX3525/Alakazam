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
  <title>That Time I Got Reincarnated as a Slime Character Lists</title>
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
      <div class="card" style="background-image: url('/assets/images/tensura/rimuru.png');" 
           data-character="Rimuru Tempest"
           data-description="Rimuru is the main protagonist who was reincarnated into a fantasy world as a slime and quickly evolves into a powerful being. Calm, adaptable, and compassionate, Rimuru builds a nation while mastering a vast array of skills absorbed from enemies."
           data-ability="Predator/Gluttony (skill absorption) + Great Sage + Multitude of Absorbed Skills"
           data-video="https://www.youtube.com/watch?v=u6CPZqn8jd4">
        <h2 class="card-title">Rimuru Tempest</h2>
        <p class="card-body">
          A reincarnated slime who becomes a wise and powerful leader by absorbing abilities.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/tensura/benimaru.png')"
           data-character="Benimaru"
           data-description="Benimaru is Rimuru's fierce ogre (later Kijin) general and one of his closest commanders. Honorable and proud, Benimaru is both a tactician and a devastating frontline fighter."
           data-ability="Ogre/Kijin Strength + Martial Mastery + Flame-based Techniques"
           data-video="https://www.youtube.com/watch?v=zI722NDPPDQ">
        <h2 class="card-title">Benimaru</h2>
        <p class="card-body">
          Proud commander with immense strength and tactical brilliance on the battlefield.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/tensura/shuna.png')"
           data-character="Shuna"
           data-description="Shuna is a refined ogre priestess known for her elegance, healing arts, and supportive magic. She assists Rimuru both in diplomacy and domestic affairs, while being a capable magic user in her own right."
           data-ability="Healing & Support Magic + Enchantment + Domestic Diplomacy"
           data-video="https://www.youtube.com/watch?v=7paoI0jAK3c">
        <h2 class="card-title">Shuna</h2>
        <p class="card-body">
          Graceful healer and diplomat who supports Rimuru's nation both politically and magically.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/tensura/shion.png')"
           data-character="Shion"
           data-description="Shion is Benimaru's secretary and a powerful warrior with a blunt personality. Fiercely protective, she handles both administrative duties and lethal offense when needed."
           data-ability="Superhuman Strength + Swordsmanship + Protective Magic"
           data-video="https://www.youtube.com/watch?v=YlRZEk2agVc">
        <h2 class="card-title">Shion</h2>
        <p class="card-body">
          Loyal and lethal secretary who balances administrative skill with overwhelming combat power.
        </p>
      </div>
      <!-- Removed leftover Mashle character cards -->
      <div class="card" style="background-image: url('/assets/images/tensura/clayman.png')"
           data-character="Clayman"
           data-description="Clayman is a manipulative and scheming antagonist who uses politics and shadowy plots to further his goals. His Machiavellian tactics make him a dangerous foe even without raw combat prowess."
           data-ability="Dark Scheming + Political Manipulation + Curse-like Tactics"
           data-video="">
        <h2 class="card-title">Clayman</h2>
        <p class="card-body">
          Cunning schemer who pulls strings behind the scenes to destabilize nations.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/tensura/hinata.png')"
           data-character="Hinata Sakaguchi"
           data-description="Hinata is a skilled and honorable royal knight who initially opposes Rimuru due to misunderstandings but later becomes an ally after recognizing his strength and righteousness."
           data-ability="Leadership + Holy/Divine-aligned Combat Skills"
           data-video="https://www.youtube.com/watch?v=mQiSBJm69Dk">
        <h2 class="card-title">Hinata Sakaguchi</h2>
        <p class="card-body">
          Stalwart knight whose sense of duty makes her a formidable ally and opponent.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/tensura/yuuki.png')"
           data-character="Yuuki Kagurazaka"
           data-description="Yuuki is a former antagonist turned complex figure whose magical prowess and political ambitions create major conflict."
           data-ability="High-tier Magic + Strategic Leadership"
           data-video="https://www.youtube.com/watch?v=Gdq_l3x-yOA">
        <h2 class="card-title">Yuuki Kagurazaka</h2>
        <p class="card-body">
          Ambitious mage with dangerous power and complex motives that shake nations.
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