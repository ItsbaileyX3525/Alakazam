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
    <title>Black Clover Character Lists</title>
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
      <div class="card" style="background-image: url('/assets/images/blackclover/asta.png');" 
           data-character="Asta"
           data-description="Asta is the main protagonist of Black Clover, a young boy born without any magic power in a world where magic is everything. Despite this, he refuses to give up on his dream of becoming the Wizard King. He wields a five-leaf clover grimoire containing Anti-Magic swords that can nullify all magic. His Devil Union with Liebe grants him incredible speed, strength, and the ability to use Anti-Magic in its purest form. His determination and never-give-up attitude inspire everyone around him."
           data-ability="Anti-Magic + Devil Union + Black Divider + Demon-Slayer Sword"
           data-video="https://www.youtube.com/watch?v=M8gR4R0c3lg">
        <h2 class="card-title">Asta</h2>
        <p class="card-body">
          The magicless boy who wields Anti-Magic swords and refuses to give up on his dream.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/blackclover/yuno.png');"           data-character="Yuno Grinberryall"
           data-description="Yuno is Asta's rival and childhood friend, as well as a prince of the Spade Kingdom. He possesses immense magical power and wields a four-leaf clover grimoire with Wind Magic. Later, he gains a second grimoire with Star Magic from his royal heritage. His Spirit of Zephyr, Sylph, greatly enhances his wind magic capabilities. Yuno is calm, composed, and incredibly talented, advancing rapidly through the ranks of the Magic Knights. His Spirit Dive and Spirit of Boreas transformations make him one of the strongest mages. I couldn't find a video for this character"
           data-ability="Wind Magic + Star Magic + Spirit Magic + Spirit of Boreas"
           data-video="https://www.youtube.com/watch?v=Xsrjy7140Lw">
        <h2 class="card-title">Yuno Grinberryall</h2>
        <p class="card-body">
          Wind and Star magic prodigy with a wind spirit, destined for greatness.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/blackclover/noelle.png');"
          data-character="Noelle Silva"
           data-description="Noelle Silva is a royal from the prestigious Silva family and a member of the Black Bulls. Despite being born into a family of powerful water mages, she initially struggled to control her immense magical power. Through training and determination, she becomes one of the strongest Magic Knights. She wields the water spirit Undine and can use powerful spells like Sea Dragon's Roar and Valkyrie Dress. Her Saint Stage transformation combines her power with Undine for devastating attacks. She's proud, caring, and secretly in love with Asta."
           data-ability="Water Magic + Spirit Magic + Valkyrie Dress + Saint Stage"
           data-video="https://www.youtube.com/watch?v=PvznfZXZxoI">
        <h2 class="card-title">Noelle Silva</h2>
        <p class="card-body">
          Royal water mage who masters the water spirit to unleash devastating sea dragon attacks.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/blackclover/yami.png');"
           data-character="Yami Sukehiro"
           data-description="Yami Sukehiro is the captain of the Black Bulls squad and one of the most powerful Magic Knights. Originally from a foreign land called Hino Country, he wields rare Dark Magic that can cut through dimensions and even manipulate time. His katana techniques combined with dark magic create devastating slashes. His signature move, Death Thrust, can pierce through any defense. Yami's Ki sensing ability allows him to predict enemy movements. He's rough, intimidating, but deeply cares for his squad, constantly pushing them to surpass their limits."
           data-ability="Dark Magic + Ki Manipulation + Dimension Slash + Death Thrust"
           data-video="https://www.youtube.com/watch?v=KKCtSG_PxcI">
        <h2 class="card-title">Yami Sukehiro</h2>
        <p class="card-body">
          Dark magic swordsman who can cut through dimensions and surpass his limits in battle.
        </p>
      </div>

      <div class="card" style="background-image: url('/assets/images/blackclover/zenon.png');"
           data-character="Zenon Zogratis"
           data-description="Zenon Zogratis is one of the Dark Triad members ruling the Spade Kingdom. He hosts the devil Beelzebub, granting him Bone Magic and Spatial Magic abilities. At 80% devil power, he can create nearly impenetrable bone defenses and trap enemies in spatial cubes. His Devil Heart form makes him even more powerful. Zenon is cold, ruthless, and believes in absolute power. He defeated Yuno's former captain and destroyed the Golden Dawn squad, making him one of Yuno's greatest enemies. His spatial domination makes him extremely difficult to defeat."
           data-ability="Bone Magic + Spatial Magic + Devil Heart + Beelzebub"
           data-video="https://www.youtube.com/watch?v=ggfU7vxOFiU">
        <h2 class="card-title">Zenon Zogratis</h2>
        <p class="card-body">
          Dark Triad member with bone and spatial magic, hosting the devil Beelzebub.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/blackclover/vanica.png');"
           data-character="Vanica Zogratis"
           data-description="Vanica Zogratis is another member of the Dark Triad and the most sadistic of the three. She hosts the devil Megicula, giving her Blood Magic and Curse-Warding Magic. She can manipulate blood to create powerful attacks and enhance her allies. Her curses are nearly impossible to remove and can kill slowly. Vanica is battle-obsessed and enjoys fighting strong opponents, especially Noelle. At higher devil percentages, she becomes incredibly fast and powerful. Her Red Beast transformation makes her almost unstoppable in combat."
           data-ability="Blood Magic + Curse-Warding Magic + Red Beast + Megicula"
           data-video="https://www.youtube.com/watch?v=MNGjG_TZV4g">
        <h2 class="card-title">Vanica Zogratis</h2>
        <p class="card-body">
          Sadistic Dark Triad member wielding blood and curse magic through devil Megicula.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/blackclover/dante.png');"
           data-character="Dante Zogratis"
           data-description="Dante Zogratis is the leader of the Dark Triad and the king of the Spade Kingdom. He hosts Lucifero, the most powerful devil, granting him immense Body Magic and Gravity Magic. His body can regenerate from any damage instantly, making him nearly immortal. His gravity magic can crush anything and create black holes. At 80% devil power, he becomes overwhelmingly powerful. Dante is arrogant and believes in the survival of the fittest. He seeks to open the gate to the underworld to bring all devils to the human world."
           data-ability="Body Magic + Gravity Magic + Regeneration + Lucifero"
           data-video="https://www.youtube.com/watch?v=aN3MnVUwhvA">
        <h2 class="card-title">Dante Zogratis</h2>
        <p class="card-body">
          Dark Triad leader with gravity magic and instant regeneration, hosting Lucifero.
        </p>
      </div>
      <div class="card"
           data-character="Coming Soon"
           data-description="More characters will be added soon! Stay tuned for updates on more Black Clover Magic Knights and villains!"
           data-ability="TBA"
           data-video="">
        <h2 class="card-title">More Coming Soon!</h2>
        <p class="card-body">
          Stay tuned for more character profiles and magic abilities!
        </p>
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