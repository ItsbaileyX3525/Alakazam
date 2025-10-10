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
    <title>JoJo lists</title>
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
      <div class="card" style="background-image: url('/assets/images/jojo/joseph.png');" 
           data-character="Joseph Joestar"
           data-description="Joseph Joestar is the son of Jonathan Joestar. Joseph learnt hamon so that he could take on the foes of his time, mainly that of the pillar men and the final boss, kars."
           data-ability="Hamon"
           data-video="https://www.youtube.com/watch?v=WXoKv5e3Ql8">
        <h2 class="card-title">Joseph Joestar</h2>
        <p class="card-body">
          Channelling the power of hamon, Joseph Joestar takes on the vampires in part 2.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jojo/jotaro.png')"
           data-character="Jotaro Kujo"
           data-description="Jotaro kujo was one of the first charcters in the Joestar family to unlock the stand ability and use it to its fullest. Jotaro's destiny involves him finishing off jonathans battle from part 1, beating dio in a battle of pure strength and power"
           data-ability="Star Platnium, stand ability: Time Stop"
           data-video="https://www.youtube.com/watch?v=GngqB6up8fc">
        <h2 class="card-title">Jotaro Kujo</h2>
        <p class="card-body">
          Jotaro kujo, son of Joseph Joestar, awakened his stand "Star Platnium" which he uses to fight with devastating blows.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jojo/josuke.png')"
           data-character="Josuke Higashikta"
           data-description="Josuke gained his power probably during the time of part 3 where he got crazy diamond which allows him to attack faster than Jotaro (outside timestop) and upon contact with the person can reverse the changes that have been made to them, essentially healing them. He can also change how a thing looked in its original state."
           data-ability="Crazy Diamond, stand ability: Heal"
           data-video="https://www.youtube.com/watch?v=V3HBnK0g-_U">
        <h2 class="card-title">Josuke Higashikta</h2>
        <p class="card-body">
          Josuke Higashikta uses his stand "Crazy Diamond" to deliver high speed blows whilst also having the ability to heal/reverse things.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jojo/giorno.png')"
           data-character="Giorno Giovanna"
           data-description="The son of Dio. Techically a Joestar as Dio had the body of Jonathan which made him be able to bare a Joestar child. Giorno Giovanna uses his stand Golden Experience and the requiem version to defeat his for, Diavolo, user of king crimson."
           data-ability="Golden Experience (Requiem), stand ability: Life Transmutation + Never arrive at truth"
           data-video="https://www.youtube.com/watch?v=W944vHnaQPw">
        <h2 class="card-title">Giorno Giovanna</h2>
        <p class="card-body">
          Giorno Giovanna uses his stand Golden Experience (Requiem) to help him fight the boss, Diavolo. After using the requiem stand arrow, golden experience evolved into Golden Experience Requiem.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jojo/dio.png')"
           data-character="Dio Brando"
           data-description="Dio Brando was the child of Dario Brando, he fought with the Joestars for generations, starting off with Jonathan Joestar who nearly killed Dio and later reawakening with a stand THE WORLD, the stardust crusaders track DIO down to defeat him once and for all."
           data-ability="The World, stand ability: Time Stop"
           data-video="https://www.youtube.com/watch?v=DefXS17jZwE">
        <h2 class="card-title">Dio Brando</h2>
        <p class="card-body">
          A man of pure evil, his vampire abilities and stand power lets him reign supreme.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jojo/diavolo.png')"
           data-character="Diavolo"
           data-description="Diavolo, the man who actually found the stand arrows, used one on himself and gained the stand of King Crimson and the sub-stand epitaph which allow him to erase time with king crimson and then use epitaph to see where he would end up and change his positioning."
           data-ability="King Crimson + Epitaph, stand ability: Time Erasure"
           data-video="https://www.youtube.com/watch?v=uD1Mu-rSyVc">
        <h2 class="card-title">Diavolo</h2>
        <p class="card-body">
          The leader of the mafia, Diavolo uses his power to erase time to win.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/jojo/kira.png')"
           data-character="Kira Yoshikage"
           data-description="Kira from a young age had a fetish with hands and ever since growing up he used his stand ability Killer Queen to kill women and steal their hands. Killer Queen has an evolved version called Killer Queen: Bites The Dust which he uses to reverse time when activating it."
           data-ability="Killer Queen: Bites the Dust, stand ability: Bomb Transmutation"
           data-video="https://www.youtube.com/watch?v=8yPwbWi76Ak">
        <h2 class="card-title">Kira Yoshikage</h2>
        <p class="card-body">
          The man who had the freaky hand fetish. User of Killer Queen, he can turn anything he touches into a bomb and cause it to explode.
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