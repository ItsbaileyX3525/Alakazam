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
  <title>Re:Zero Character Lists</title>
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
      <div class="card" style="background-image: url('/assets/images/rezero/subaru.png');" 
           data-character="Subaru Natsuki"
           data-description="Subaru is the series' protagonist — an everyday otaku transported to a fantasy world. He possesses the Return by Death ability, which lets him rewind time to a previous checkpoint after dying. Subaru learns and grows through repeated challenges, becoming determined, resourceful, and fiercely loyal to those he cares about."
           data-ability="Return by Death (time reset) + Determination & Adaptability"
           data-video="https://www.youtube.com/watch?v=kaHd61OXGlE">
        <h2 class="card-title">Subaru Natsuki</h2>
        <p class="card-body">
          A determined protagonist who faces death over and over to protect his friends.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/rezero/emilia.png')"
           data-character="Emilia"
           data-description="Emilia is a kind-hearted half-elf with a mysterious past and a claim to the royal selection. She demonstrates strong magical aptitude and unwavering compassion, becoming Subaru's anchor and moral compass throughout the story."
           data-ability="Spirits & Ice Magic + Healing Support"
           data-video="https://www.youtube.com/watch?v=nkiVcpFiKV0">
        <h2 class="card-title">Emilia</h2>
        <p class="card-body">
          Caring and strong-willed half-elf who supports Subaru and seeks peace for the kingdom.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/rezero/rem.png')"
           data-character="Rem"
           data-description="Rem is a devoted maid and skilled combatant from the Oni tribe. Fiercely loyal and courageous, she becomes one of Subaru's most trusted allies and is willing to sacrifice everything for those she loves."
           data-ability="Oni Strength + Morning Star Combat + Healing Magic"
           data-video="https://www.youtube.com/watch?v=Uq190rAnG3Y">
        <h2 class="card-title">Rem</h2>
        <p class="card-body">
          Loyal fighter with immense strength and an unshakable devotion to her friends.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/rezero/beatrice.png')"
           data-character="Beatrice"
           data-description="Beatrice is a powerful spirit contracted to the Roswaal mansion and guardian of its forbidden library. Behind her tsundere exterior lies centuries of knowledge and formidable magic."
           data-ability="Powerful Barrier & Offensive Magic + Vast Knowledge"
           data-video="https://www.youtube.com/watch?v=qqatzYKmRYw">
        <h2 class="card-title">Beatrice</h2>
        <p class="card-body">
          Ancient librarian spirit with powerful magic and a dry, protective personality.
        </p>
      </div>

      <!-- Additional Re:Zero characters / antagonists -->
      <div class="card" style="background-image: url('/assets/images/rezero/satella.png')"
           data-character="Satella (Witch of Envy)"
           data-description="Satella, known as the Witch of Envy, is an enigmatic and dangerous figure linked to Subaru's Return by Death. Her presence is tied to curses and tragedies, making her one of the story's most mysterious antagonists."
           data-ability="Reality-warping & Curse-linked Influence"
           data-video="https://www.youtube.com/watch?v=Z0A0X2u7liE">
        <h2 class="card-title">Satella</h2>
        <p class="card-body">
          The ominous Witch of Envy whose existence is entwined with Subaru's power and suffering.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/rezero/petelgeuse.png')"
           data-character="Petelgeuse Romanée-Conti"
           data-description="Petelgeuse is a crazed bishop of the Witch Cult, terrifyingly fanatical and unpredictable. He revels in chaos and wields powerful curse-based abilities."
           data-ability="Curse Magic + High Agility + Berserk Combat"
           data-video="https://www.youtube.com/watch?v=47lm1JthFvI">
        <h2 class="card-title">Petelgeuse</h2>
        <p class="card-body">
          Fanatical witch cult bishop who delights in torment and destructive curses.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/rezero/elsa.png')"
           data-character="Elsa Granhiert"
           data-description="Elsa is a cold-blooded assassin known for her ruthless efficiency. Her silent, brutal style and lethal speed make her one of the most feared hunters in the world."
           data-ability="Assassination Techniques + Supernatural Speed + Stealth"
           data-video="https://www.youtube.com/watch?v=YuUGWm1IWzo">
        <h2 class="card-title">Elsa Granhiert</h2>
        <p class="card-body">
          A remorseless assassin whose speed and precision make her exceptionally dangerous.
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