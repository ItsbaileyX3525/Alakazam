<?php
session_start();

$logged_in = false;

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    $logged_in = true;
}

// Debug: Uncomment these lines to check your session
// echo "<!-- DEBUG: logged_in = " . ($logged_in ? 'true' : 'false') . " -->";
// echo "<!-- DEBUG: SESSION = " . print_r($_SESSION, true) . " -->";
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
      <div class="card" style="background-image: url('/assets/images/onepiece/luffy.png');" 
           data-character="Monkey D. Luffy"
           data-description="Monkey D. Luffy is the captain of the Straw Hat Pirates and one of the most powerful people in the One Piece universe. With his Gum-Gum Devil Fruit powers, he can stretch his body like rubber, giving him incredible combat abilities. His signature techniques include Gear Second, Gear Third, Gear Fourth, and his awakened Gear Fifth form. Luffy's determination and willpower are unmatched as he pursues his dream of becoming the Pirate King."
           data-ability="Gomu Gomu no Mi (Rubber-Rubber Fruit / Hito Hito no Mi, Model: Nika)"
           data-video="https://www.youtube.com/watch?v=scPBmrzdD0g">
        <h2 class="card-title">Monkey D. Luffy</h2>
        <p class="card-body">
          Monkey D. Luffy is one of the most powerful people in the one piece universe, with his gum gum rubber fruit he dominates the scene.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/onepiece/nico.png')"
           data-character="Nico Robin"
           data-description="Nico Robin is the archaeologist of the Straw Hat Pirates and the sole survivor of Ohara. She possesses the Hana Hana no Mi (Flower-Flower Fruit) which allows her to sprout copies of her body parts on any surface. Robin is one of the few people who can read the ancient Poneglyphs, making her essential to discovering the true history of the world. Her knowledge and combat abilities make her invaluable to the crew."
           data-ability="Hana Hana no Mi (Flower-Flower Fruit)"
           data-video="https://www.youtube.com/watch?v=6vcS1iSiBNk">
        <h2 class="card-title">Nico Robin</h2>
        <p class="card-body">
          Nico Robin is the intelligent archaeologist with the power to sprout body parts anywhere.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/onepiece/chopper.png')"
           data-character="Tony Tony Chopper"
           data-description="Tony Tony Chopper is the doctor of the Straw Hat Pirates. Originally a reindeer, he gained human intelligence after eating the Hito Hito no Mi (Human-Human Fruit). Chopper can transform between multiple forms called Points, including his monstrous Monster Point. Despite his cute appearance, he's a skilled doctor and capable fighter who invented the Rumble Ball to enhance his transformations. His medical expertise has saved the crew countless times."
           data-ability="Hito Hito no Mi (Human-Human Fruit) + Rumble Ball Transformations"
           data-video="https://www.youtube.com/watch?v=5reop01XCuk">
        <h2 class="card-title">Tony Tony Chopper</h2>
        <p class="card-body">
          The adorable reindeer doctor with multiple transformation forms and incredible medical skills.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/onepiece/brooke.png')"
           data-character="Brook"
           data-description="Brook is the musician of the Straw Hat Pirates and a living skeleton. After eating the Yomi Yomi no Mi (Revive-Revive Fruit), he gained the ability to return to life after death. Brook is a master swordsman and musician whose soul-based powers allow him to freeze opponents, project his soul from his body, and even hypnotize enemies with his music. His skeletal form makes him incredibly light and fast, and he can run on water."
           data-ability="Yomi Yomi no Mi (Revive-Revive Fruit) + Soul King Powers"
           data-video="https://www.youtube.com/watch?v=zj4-ebPPwLQ">
        <h2 class="card-title">Brook</h2>
        <p class="card-body">
          The undead skeleton musician with soul-based powers and incredible swordsmanship.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/onepiece/kaido.png')"
           data-character="Kaido"
           data-description="Kaido, known as the 'Strongest Creature in the World,' is one of the Four Emperors of the Sea. He possesses the Uo Uo no Mi, Model: Seiryu (Fish-Fish Fruit, Model: Azure Dragon), allowing him to transform into a massive dragon. Kaido is nearly indestructible with incredible physical strength and the ability to use advanced Haki. His Hybrid Form combines his human strength with dragon powers. He has attempted suicide numerous times but has never succeeded due to his unbreakable body."
           data-ability="Uo Uo no Mi, Model: Seiryu (Fish-Fish Fruit, Azure Dragon) + Advanced Haki"
           data-video="https://www.youtube.com/watch?v=jDXHImQnfew">
        <h2 class="card-title">Kaido</h2>
        <p class="card-body">
          The nearly indestructible Emperor with dragon transformation powers.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/onepiece/elders.png')"
           data-character="The Five Elders"
           data-description="The Five Elders (Gorosei) are the highest-ranking Celestial Dragons and the leaders of the World Government. They possess mysterious and ancient powers, with each elder having a Mythical Zoan Devil Fruit transformation. They serve Imu and maintain the world order, keeping secrets about the Void Century and the true history. Their true power and Devil Fruit abilities are among the most formidable in the series."
           data-ability="Mythical Zoan Devil Fruits (Various Ancient Yokai Forms)"
           data-video="https://www.youtube.com/watch?v=V4ZWvL70_x0">
        <h2 class="card-title">The Five Elders</h2>
        <p class="card-body">
          The mysterious leaders of the World Government with ancient mythical powers.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/onepiece/teach.png')"
           data-character="Marshall D. Teach (Blackbeard)"
           data-description="Marshall D. Teach, better known as Blackbeard, is one of the Four Emperors and the only known person to possess two Devil Fruit powers. He wields the Yami Yami no Mi (Dark-Dark Fruit), which can nullify other Devil Fruit powers and create black holes, and the Gura Gura no Mi (Tremor-Tremor Fruit), stolen from Whitebeard, which can create devastating earthquakes. His mysterious body allows him to have multiple Devil Fruits without dying. He's one of Luffy's greatest enemies."
           data-ability="Yami Yami no Mi (Dark-Dark Fruit) + Gura Gura no Mi (Tremor-Tremor Fruit)"
           data-video="https://www.youtube.com/watch?v=NPUrwKuwoDc">
        <h2 class="card-title">Marshall D. Teach</h2>
        <p class="card-body">
          The only person with two Devil Fruits: darkness and earthquake powers.
        </p>
      </div>
      <div class="card"
           data-character="Coming Soon"
           data-description="More characters will be added soon! Stay tuned for updates on more One Piece characters and their incredible abilities."
           data-ability="TBA"
           data-video="">
        <h2 class="card-title">More Coming Soon!</h2>
        <p class="card-body">
          Stay tuned for more character profiles and abilities!
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