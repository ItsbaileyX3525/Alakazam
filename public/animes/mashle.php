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
    <title>Mashle Character Lists</title>
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
      <div class="card" style="background-image: url('/assets/images/mashle/mash.png');" 
           data-character="Mash Burnedead"
           data-description="Mash Burnedead is the main protagonist of Mashle, born without magic in a world where magic is everything. To survive, he trained his body to superhuman levels, developing incredible strength, speed, and durability. He can create shockwaves with his punches, move faster than the eye can see, and deflect spells with pure physical force. Despite having no magic, he attends the prestigious Easton Magic Academy and defeats powerful wizards through sheer strength alone. His dream is to live peacefully with his adoptive father."
           data-ability="Superhuman Strength + Extreme Speed + Physical Combat Mastery + Anti-Magic Muscles"
           data-video="https://www.youtube.com/watch?v=4PXAoWQSopo">
        <h2 class="card-title">Mash Burnedead</h2>
        <p class="card-body">
          The man born without magic who uses his strength to beat all of his enemies!
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/mashle/finn.png')"
           data-character="Finn Ames"
           data-description="Finn Ames is Mash's roommate and first friend at Easton Magic Academy. Though initially timid and anxious, Finn is a loyal friend who stands by Mash despite the dangers. He possesses average magical ability and uses basic spells, but his greatest strength is his courage and determination to support his friends. Despite being weaker than most students, Finn constantly pushes himself to improve and never abandons his friends in battle. His character growth shows that bravery isn't about power, but about standing up when it matters most."
           data-ability="Basic Magic Spells + Protective Charms + Courage Under Pressure"
           data-video="https://www.youtube.com/watch?v=pW6D_Wy3vyo">
        <h2 class="card-title">Finn Ames</h2>
        <p class="card-body">
          Mash's loyal friend who may lack power but never lacks courage when it matters.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/mashle/lemon.png')"
           data-character="Lemon Irvine"
           data-description="Lemon Irvine is a student at Easton Magic Academy with a unique personality and powerful magic abilities. She has an obsession with a character from her favorite manga and often compares people to him. Despite her quirky nature, Lemon is a skilled magic user who specializes in various magical techniques. She's fiercely protective of her friends and isn't afraid to stand up to stronger opponents. Her unpredictable behavior combined with her genuine kindness makes her an invaluable member of Mash's friend group. I couldn't find a video of her using magic :("
           data-ability="Advanced Magic Spells + Elemental Magic + Strategic Combat"
           data-video="https://www.youtube.com/watch?v=HmPXOvOH44s">
        <h2 class="card-title">Lemon Irvine</h2>
        <p class="card-body">
          Quirky magic user with powerful abilities and unwavering loyalty to her friends.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/mashle/dot.png')"
           data-character="Dot Barrett"
           data-description="Dot Barrett is a hot-headed student at Easton Magic Academy with a rivalry-turned-friendship with Mash. He initially starts as an antagonist but becomes one of Mash's closest allies. Dot possesses Explomb magic, which allows him to create and control powerful explosions. His signature move, Burst, creates devastating explosive attacks. Despite his aggressive personality and constant declarations of rivalry, Dot has a kind heart and deeply cares for his friends. His explosive magic combined with his determination makes him a formidable fighter."
           data-ability="Explomb Magic + Burst + Explosive Combat Techniques"
           data-video="https://www.youtube.com/watch?v=Gl6K0xquhJQ">
        <h2 class="card-title">Dot Barrett</h2>
        <p class="card-body">
          Hot-blooded magic user with explosive power and a heart of gold beneath his rough exterior.
        </p>
      </div>

      <div class="card" style="background-image: url('/assets/images/mashle/abel.png')"
           data-character="Abel Walker"
           data-description="Abel Walker is a powerful magic user and one of the Divine Visionaries' chosen ones at Easton Magic Academy. He possesses the rare ability to manipulate dolls and puppets with his magic, controlling them with incredible precision. Abel is known for his calm demeanor and strategic mind in battle. Despite his elite status, he shows respect for strength regardless of its source, which leads to his acknowledgment of Mash's abilities. His puppet magic allows him to fight from a distance while maintaining perfect control over multiple constructs simultaneously."
           data-ability="Puppet Magic + Doll Manipulation + Strategic Combat + Advanced Spellcasting"
           data-video="https://www.youtube.com/watch?v=6eUxgstKHhI">
        <h2 class="card-title">Abel Walker</h2>
        <p class="card-body">
          Master of puppet magic who controls battles with strategic precision and multiple constructs.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/mashle/love.png')"
           data-character="Love Cute"
           data-description="Love Cute is a powerful student at Easton Magic Academy and a candidate for Divine Visionary. Despite his intimidating appearance and name, he's actually a kind-hearted individual who values friendship and justice. Love possesses immense magical power and physical strength, making him one of the academy's top students. He uses gravity magic and has the ability to manipulate the weight and force of objects around him. His imposing presence hides a gentle soul who fights to protect those who cannot protect themselves."
           data-ability="Gravity Magic + Super Strength + Weight Manipulation + Protective Barriers"
           data-video="https://www.youtube.com/watch?v=pa6gSQv7gt8">
        <h2 class="card-title">Love Cute</h2>
        <p class="card-body">
          Gentle giant with gravity magic and incredible strength who fights for justice and friendship.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/mashle/cell.png')"
           data-character="Cell War"
           data-description="Cell War is a powerful antagonist and a Divine Visionary candidate at Easton Magic Academy. He possesses carbon manipulation magic, allowing him to create and control carbon-based structures with deadly precision. His abilities include forming carbon weapons, shields, and even manipulating the carbon in living organisms. Cell is ruthless and believes in survival of the fittest, showing no mercy to those he deems weak. His tactical intelligence combined with his versatile magic makes him a dangerous opponent who can adapt to various combat situations."
           data-ability="Carbon Manipulation + Weapon Creation + Organic Control + Tactical Combat"
           data-video="https://www.youtube.com/watch?v=nbTZKTr794E">
        <h2 class="card-title">Cell War</h2>
        <p class="card-body">
          Ruthless fighter with carbon magic who can create deadly weapons and manipulate matter itself.
        </p>
      </div>
      <div class="card"
           data-character="Coming Soon"
           data-description="More characters will be added soon! Stay tuned for updates on more Mashle characters and their magical abilities!"
           data-ability="TBA"
           data-video="">
        <h2 class="card-title">More Coming Soon!</h2>
        <p class="card-body">
          Stay tuned for more character profiles and magical abilities!
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