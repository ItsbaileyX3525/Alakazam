<?php
session_start();

$logged_in = false;

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    echo "logged in";
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
    <title>Jujutsu Kaisen Character Lists</title>
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
      <div class="card" style="background-image: url('/assets/images/jjk/yuji.png');" 
           data-character="Yuji Itadori"
           data-description="Yuji Itadori is the main protagonist of Jujutsu Kaisen. After swallowing one of Sukuna's fingers, he became the vessel for the King of Curses. Despite this, Yuji maintains his kind heart and fights to save people. He possesses superhuman physical abilities, incredible speed, and martial arts skills. After training, he learns to use Cursed Energy and develops the Black Flash technique. He also inherits Sukuna's Cleave and Dismantle slashing techniques, making him extremely powerful in close combat."
           data-ability="Cursed Energy Manipulation + Black Flash + Divergent Fist + Sukuna's Techniques"
           data-video="https://www.youtube.com/watch?v=8nQa67lhnZA">
        <h2 class="card-title">Yuji Itadori</h2>
        <p class="card-body">
          The protagonist with superhuman strength and Sukuna's vessel, mastering Black Flash and slashing techniques.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jjk/megumi.png')"
           data-character="Megumi Fushiguro"
           data-description="Megumi Fushiguro is a first-year student at Tokyo Jujutsu High and one of the most talented sorcerers of his generation. He inherited the Ten Shadows Technique from the Zenin clan, allowing him to summon ten different shikigami using shadows. His most powerful shikigami is Mahoraga, an untamable beast that can adapt to any phenomenon. Megumi's Domain Expansion, Chimera Shadow Garden, creates a space where he can freely manipulate shadows and summon incomplete shikigami."
           data-ability="Ten Shadows Technique + Domain Expansion: Chimera Shadow Garden"
           data-video="https://www.youtube.com/watch?v=BoY9o-9DT3Y">
        <h2 class="card-title">Megumi Fushiguro</h2>
        <p class="card-body">
          Shadow technique user who can summon powerful shikigami including the adaptive Mahoraga.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jjk/nobara.png')"
           data-character="Nobara Kugisaki"
           data-description="Nobara Kugisaki is a first-year student at Tokyo Jujutsu High with a fierce and confident personality. She uses the Straw Doll Technique, which allows her to manipulate cursed energy through nails and a hammer. Her technique includes Hairpin for close combat and Resonance for long-range attacks using a piece of her enemy's body. She's fearless in battle and can hold her own against powerful curses. Her Black Flash technique shows her incredible potential and battle instincts."
           data-ability="Straw Doll Technique: Hairpin + Resonance + Black Flash"
           data-video="https://www.youtube.com/watch?v=n8jjAWvU2qE">
        <h2 class="card-title">Nobara Kugisaki</h2>
        <p class="card-body">
          Fierce sorceress using voodoo-like techniques with nails and hammer for devastating attacks.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jjk/gojo.png')"
           data-character="Satoru Gojo"
           data-description="Satoru Gojo is the strongest jujutsu sorcerer alive and a teacher at Tokyo Jujutsu High. He possesses both the Limitless technique and Six Eyes, making him virtually invincible. His Infinity technique creates an invisible barrier that slows down anything approaching him infinitely. His Domain Expansion, Unlimited Void, overloads his opponent's brain with infinite information. He can also use Blue (attraction), Red (repulsion), and Purple (existence erasure) techniques. His overwhelming power maintains balance in the jujutsu world."
           data-ability="Limitless + Six Eyes + Domain Expansion: Unlimited Void + Hollow Purple"
           data-video="https://www.youtube.com/watch?v=nmvkhLz8t7I">
        <h2 class="card-title">Satoru Gojo</h2>
        <p class="card-body">
          The strongest sorcerer with reality-bending Limitless technique and infinite information domain.
        </p>
      </div>

      <div class="card" style="background-image: url('/assets/images/jjk/sukuna.png')"
           data-character="Ryomen Sukuna"
           data-description="Ryomen Sukuna is the King of Curses and the main antagonist of Jujutsu Kaisen. Originally a human sorcerer from over 1,000 years ago, he became the most powerful curse in existence. His techniques include Cleave (adjusts to target's cursed energy) and Dismantle (default slashing attack), which can cut through anything. His Domain Expansion, Malevolent Shrine, doesn't create a barrier but instead guarantees his slashing attacks hit everything within 200 meters. With four arms and two mouths, his true form is incredibly powerful."
           data-ability="Cleave + Dismantle + Domain Expansion: Malevolent Shrine + Flame Arrow"
           data-video="https://www.youtube.com/watch?v=gbRffuAZnnY">
        <h2 class="card-title">Ryomen Sukuna</h2>
        <p class="card-body">
          The King of Curses with devastating slashing techniques and a domain that guarantees hits.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jjk/mahito.png')"
           data-character="Mahito"
           data-description="Mahito is a special grade cursed spirit born from human hatred and fear of other humans. His Idle Transfiguration technique allows him to reshape souls, which in turn transforms the body. This makes him incredibly dangerous as he can kill or disfigure with a single touch. He can also reshape his own body for combat versatility. His Domain Expansion, Self-Embodiment of Perfection, guarantees his soul manipulation technique will hit. Mahito is sadistic and views humans as toys for experimentation."
           data-ability="Idle Transfiguration + Domain Expansion: Self-Embodiment of Perfection"
           data-video="https://www.youtube.com/watch?v=OrDzu_xveDo">
        <h2 class="card-title">Mahito</h2>
        <p class="card-body">
          Sadistic curse who can reshape souls and bodies with a touch, making him terrifyingly deadly.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jjk/geto.png')"
           data-character="Suguru Geto / Kenjaku"
           data-description="Suguru Geto was once Gojo's best friend and a powerful sorcerer, but he turned evil after witnessing humanity's cruelty. His Cursed Spirit Manipulation technique allows him to absorb and control curses. However, his body is now possessed by Kenjaku, an ancient sorcerer who can transplant his brain into others. Kenjaku plans to force humanity's evolution using cursed energy. He can use both Geto's curse manipulation and his own techniques, making him extremely dangerous with centuries of knowledge and power."
           data-ability="Cursed Spirit Manipulation + Domain Expansion + Anti-Gravity System + Uzumaki"
           data-video="https://www.youtube.com/watch?v=wz4hmlAf6XQ">
        <h2 class="card-title">Suguru Geto / Kenjaku</h2>
        <p class="card-body">
          Ancient mastermind controlling thousands of curses and manipulating events for human evolution.
        </p>
      </div>
      <div class="card"
           data-character="Coming Soon"
           data-description="More characters will be added soon! Stay tuned for updates on more Jujutsu Kaisen sorcerers and curses!"
           data-ability="TBA"
           data-video="">
        <h2 class="card-title">More Coming Soon!</h2>
        <p class="card-body">
          Stay tuned for more character profiles and cursed techniques!
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
        
        
        <div class="modal-body">
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
    </div>
  </main>
</body>
<script src="/assets/javascript/lists-character.js"></script>
<script src="/assets/javascript/comment.js"></script>
</html>