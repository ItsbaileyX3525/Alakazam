<?php
session_start();

$logged_in = false;

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === "true") {
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
    <title>Bleach Character Lists</title>
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
      <div class="card" style="background-image: url('/assets/images/bleach/ichigo.png');" 
           data-character="Ichigo Kurosaki"
           data-description="Ichigo Kurosaki is the main protagonist of Bleach and a substitute Soul Reaper. His Zanpakutō, Zangetsu, grants him immense spiritual power. His Bankai, Tensa Zangetsu, compresses his power into a smaller form for incredible speed and strength. Later, he unlocks his true Bankai which combines his Hollow, Quincy, and Soul Reaper powers. His signature move is the Getsuga Tenshō, a powerful energy wave attack that can devastate opponents."
           data-ability="Bankai: Tensa Zangetsu + Hollow Powers + Quincy Powers"
           data-video="https://www.youtube.com/watch?v=yw78YldkK28">
        <h2 class="card-title">Ichigo Kurosaki</h2>
        <p class="card-body">
          The substitute Soul Reaper with hybrid powers combining Hollow, Quincy, and Soul Reaper abilities.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/bleach/rukia.png')"
           data-character="Rukia Kuchiki"
           data-description="Rukia Kuchiki is a Soul Reaper of the 13th Division and Byakuya's adopted sister. Her Zanpakutō, Sode no Shirayuki, is considered the most beautiful ice-type Zanpakutō. Her Bankai, Hakka no Togame, drops her body temperature to absolute zero, freezing everything around her including herself. This makes her incredibly powerful but also vulnerable during use. She must carefully control the duration to avoid permanent damage to her own body."
           data-ability="Bankai: Hakka no Togame (Censure of the White Haze) - Absolute Zero Ice Powers"
           data-video="https://www.youtube.com/watch?v=r8cnImB-SK4">
        <h2 class="card-title">Rukia Kuchiki</h2>
        <p class="card-body">
          Master of ice manipulation with absolute zero freezing powers.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/bleach/byakuya.png')"
           data-character="Byakuya Kuchiki"
           data-description="Byakuya Kuchiki is the captain of the 6th Division and head of the noble Kuchiki clan. His Zanpakutō, Senbonzakura, transforms into thousands of tiny blade petals. His Bankai, Senbonzakura Kageyoshi, creates millions of blade petals that he can control with his mind, making him nearly impossible to defend against. He can also use Kidō spells proficiently. His final form, Senkei and Shūkei Hakuteiken, concentrate all the blades for devastating single-target attacks."
           data-ability="Bankai: Senbonzakura Kageyoshi (Vibrant Display of a Thousand Cherry Blossoms) + Kidō"
           data-video="https://www.youtube.com/watch?v=Uz_p7bxbBnY">
        <h2 class="card-title">Byakuya Kuchiki</h2>
        <p class="card-body">
          Noble captain with millions of blade petals and advanced Kidō mastery.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/bleach/toshiro.png')"
           data-character="Tōshirō Hitsugaya"
           data-description="Tōshirō Hitsugaya is the captain of the 10th Division and a child prodigy. His Zanpakutō, Hyōrinmaru, is the strongest ice-type Zanpakutō in Soul Society. His Bankai, Daiguren Hyōrinmaru, creates ice wings, a tail, and allows him to control the weather and create ice dragons. When fully matured, his Bankai grants him incredible power and the ability to freeze anything instantly. Ice flowers appear on his back counting down to his full maturity."
           data-ability="Bankai: Daiguren Hyōrinmaru (Grand Crimson Lotus Ice Ring) - Ice Dragon Control"
           data-video="https://www.youtube.com/watch?v=VHKmW-FJo4M">
        <h2 class="card-title">Tōshirō Hitsugaya</h2>
        <p class="card-body">
          The youngest captain with the strongest ice-type Zanpakutō and weather control.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/bleach/kenpachi.png')"
           data-character="Kenpachi Zaraki"
           data-description="Kenpachi Zaraki is the captain of the 11th Division and one of the strongest Soul Reapers. He fights purely on instinct and raw power. His Zanpakutō, Nozarashi, is a massive cleaver. His Bankai makes him a demonic berserker with red skin and incredible destructive power that can cut through anything, including space itself. However, using it strains his body severely. He's known for wearing an eyepatch that constantly drains his power to make fights more enjoyable."
           data-ability="Bankai: Unnamed - Demonic Berserker Form with Immense Cutting Power"
           data-video="https://www.youtube.com/watch?v=M1v3asoFXjA">
        <h2 class="card-title">Kenpachi Zaraki</h2>
        <p class="card-body">
          The most powerful fighter who transforms into a demonic berserker in Bankai.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/bleach/kisuke.png')"
           data-character="Kisuke Urahara"
           data-description="Kisuke Urahara is the former captain of the 12th Division and founder of the Soul Reaper Research Institute. A genius scientist and master of Kidō, his Zanpakutō Benihime can restructure matter. His Bankai, Kannonbiraki Benihime Aratame, allows him to restructure anything it touches, granting healing, enhancement, and even the ability to rewrite reality in a limited area. He's also a master of forbidden Kidō spells and created many of the Soul Society's most important inventions."
           data-ability="Bankai: Kannonbiraki Benihime Aratame (Modification) + Master Kidō User"
           data-video="https://www.youtube.com/watch?v=KuXwJ86JJfc">
        <h2 class="card-title">Kisuke Urahara</h2>
        <p class="card-body">
          Genius scientist with reality-warping Bankai and master of forbidden Kidō.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/bleach/aizen.png')"
           data-character="Sōsuke Aizen"
           data-description="Sōsuke Aizen is the main antagonist and former captain of the 5th Division. His Zanpakutō, Kyōka Suigetsu, has the power of Perfect Hypnosis, controlling all five senses of anyone who sees its release. After fusing with the Hōgyoku, he transcends Soul Reaper limits and gains immense power without needing Bankai. He's also a Kidō master who can use high-level spells without incantations. His intelligence and manipulation skills make him one of the most dangerous characters in the series."
           data-ability="Shikai: Kyōka Suigetsu (Perfect Hypnosis) + Hōgyoku Fusion + Master Kidō"
           data-video="https://www.youtube.com/watch?v=C1vG62Z-gRU">
        <h2 class="card-title">Sōsuke Aizen</h2>
        <p class="card-body">
          The master manipulator with perfect hypnosis and god-like powers from Hōgyoku fusion.
        </p>
      </div>
      <div class="card" style="background-image: url('/assets/images/bleach/yamamoto.png')"
           data-character="Genryūsai Yamamoto"
           data-description="Genryūsai Shigekuni Yamamoto is the Captain-Commander of the Gotei 13 and the strongest Soul Reaper for over 1,000 years. His Zanpakutō, Ryūjin Jakka, is the oldest and most powerful fire-type Zanpakutō. His Bankai, Zanka no Tachi, concentrates all his flames into his blade with heat equal to the sun's core (15 million degrees). It has four stages: East (resurrects the dead as ash zombies), West (absolute erasure), South (explosive flame armor), and North (his blade becomes the sun itself)."
           data-ability="Bankai: Zanka no Tachi (Longsword of the Remnant Flame) - Sun-Level Flames"
           data-video="https://www.youtube.com/watch?v=g_CoMIlxgaw">
        <h2 class="card-title">Genryūsai Yamamoto</h2>
        <p class="card-body">
          The strongest Soul Reaper with flames as hot as the sun's core.
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
      </div>
    </div>
  </main>
</body>
<script src="/assets/javascript/lists-character.js"></script>
</html>