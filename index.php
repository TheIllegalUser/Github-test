<?php
header("Cache-Control: no-cache, must-revalidate"); // force browser to always request the latest version of the page
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // set a past expiration date

// clear all cache-related headers
header("Pragma: no-cache");
header("Surrogate-Control: no-store");
header("Vary: *");

// clear session cache
session_cache_limiter('nocache');
session_start();
session_destroy();

// clear OPcache (if enabled)
if (function_exists('opcache_reset')) {
    opcache_reset();
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Expedition Mariana</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script defer src="script.js"></script>
<script defer src="color.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e8b3e939ce.js" crossorigin="anonymous"></script>
<body class="cursor1">
  <div id="preloader">
  <div class="sea">
    <div class="circle-wrapper">
        <div class="bubble"></div>
        <div class="submarine-wrapper">
            <div class="submarine-body">
                <div class="window"></div>
                <div class="engine"></div>
                <div class="light"></div>
            </div>
            <div class="helix"></div>
            <div class="hat">
              <div class="leds-wrapper">
                  <div class="periscope"></div>
                  <div class="leds"></div>
              </div>
            </div>
        </div>
    </div>
  </div>
  </div>
  <div id="progressbar"></div>
  <div id="scrollPath"></div>
  <section class="title-screen-bk">
  <nav class="nav1">
    <div class="container">
      <div class="row">
        <div class="d-none d-md-block col-md-1 col-lg-2">
          <a href="#"><img id="image1" src="img/Logo.png" alt="logo"></a>
        </div>
        <div class="col-xs-12 col-md-7 col-lg-7 nav-text">
          <ul>
            <li><a class="white_glow_big" href="index.php">Home</a></li>
            <li><a class="white_glow_big" href="Info.php">Info</a></li>
            <li><a class="white_glow_big" href="Packages.php">Packages</a></li>
          </ul>
        </div>
        <div class="d-none d-md-block col-md-4 col-lg-3">
          <div class="centered">
            <button onclick="location.href='sign_up.php'" type="button" class="red rounded grow">Sign Up</button>
            <button class="rounded grow" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Watch Video</button>  
          </div>
        </div>
      </div>
    </div>
  </nav>
    <div class="container title-text">
      <div class="row">
        <div class="col-12">
        <h1 class="title_screen_glow">Expedition Mariana</h1>
        <p class="hidden title_screen_glow">A Once In A Lifetime Opportunity</p>
      </div>
      </div>
      <div class="row">
        <div class="col-1 col-sm-2 col-md-3 col-lg-3 col-xl-4">
        </div>
        <div class="col-5 col-sm-4 col-md-3 col-lg-3 col-xl-2 centered title-buttons hidden">
          <button onclick="location.href='sign_up.php'" type="button" class="red rounded grow">Sign Up</button>
        </div>
        <div class="col-6 col-md-3 col-lg-3 col-xl-2 centered title-buttons hidden">
          <button class="rounded grow" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Watch Video</button>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-2">
        </div>
      </div>
    </div>
  </section>
  <section class="first-body">
    <div class="wrapper" id="bubble">
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
      <div><span class="dot"></span></div>
    </div>
    <div class="container hidden">
      <div class="row">
        <div class="col-sm-0 col-xl-6 graph-first-para floating">
          <img src="img/1st_para_img.png" alt="this is supposed to be an image lol">
        </div>
        <div class="col-sm-12 col-xl-6">
          <h2 class="white_glow_big">Experience The Greatest Unknowns</h2>
          <p>Join us on a heroic journey to conquer the deepest point on Earth - the Mariana Trench.
             While many have scaled the highest peak, the mysteries of the ocean's depths remain uncharted.
             Are you ready to push the boundaries of human exploration and unlock the secrets of the deep?
          </p>
        </div>
      </div>
      <div class="row centered">
        <div class="col-5 col-xl-8">
        </div>
        <div class="col-6 col-xl-4">
          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" class="rounded grow para-buttons">Watch Video</button>
        </div>
      </div>
    </div>
  </section>
  <section class="grad-1">
    <p>&nbsp</p>
    <br>
    <p>&nbsp</p>
    <br>
    <p>&nbsp</p>
    <br>
    <p>&nbsp</p>
  </section>
  <section class="second-body">
      <div class="slider2nd hidden">
        <input type="radio" name="testimonial" id="t-1">
        <input type="radio" name="testimonial" id="t-2">
        <input type="radio" name="testimonial" id="t-3" checked>
        <input type="radio" name="testimonial" id="t-4">
        <input type="radio" name="testimonial" id="t-5">
        <div class="testimonials">
          <label class="item" for="t-1">
            <img src="img/profile-pic_1.png" alt="picture" class="floating3">
            <p><span class="quotationcolorswap">"</span>You cant see me crying if im underwater<span class="quotationcolorswap">"<br>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
            <h2><span class="quotationcolorswap">-</span>Bella Raven</h2>
          </label>
          <label class="item" for="t-2">
            <img src="img/profile-pic_2.png" alt="picture" class="floating4">
            <p><span class="quotationcolorswap">"</span>Based on my extensive research and analysis, I have come to the conclusion that this freedive is the most cost effective way to experience a dopamine hit.<span class="quotationcolorswap">"<br>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
            <h2><span class="quotationcolorswap">-</span>Ethan Goldberg</h2>
          </label>
          <label class="item" for="t-3">
            <img src="img/profile-pic_3.jpg" alt="picture" class="floating3">
            <p><span class="quotationcolorswap">"</span>My dudes i cannot wait to do this, Boutta set the fattest PR. Those swimmers dont got nothing on me<span class="quotationcolorswap">"<br>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
            <h2><span class="quotationcolorswap">-</span>Lachlan Gallagher</h2>
          </label>
          <label class="item" for="t-4">
            <img src="img/profile-pic_4.png" alt="picture" class="floating4">
            <p><span class="quotationcolorswap">"</span>Aw hell naw dawg you fr rn? Man Expedition Mariana really comin in clutch for a brother in need ya know? These mf chill.<span class="quotationcolorswap">"<br>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
            <h2><br><br><span class="quotationcolorswap">-</span>Bubba Sparxxx</h2>
          </label>
          <label class="item" for="t-5">
            <img src="img/profile-pic_5.png" alt="picture" class="floating3">
            <p><span class="quotationcolorswap">"</span>If i preach the gospel to the fish, will i be a martyr?<span class="quotationcolorswap">"<br>
              <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
            <h2><span class="quotationcolorswap">-</span>Caleb Matthews</h2>
          </label>
        </div>
        <div class="dots">
          <label for="t-1"></label>
          <label for="t-2"></label>
          <label for="t-3"></label>
          <label for="t-4"></label>
          <label for="t-5"></label>
        </div>
      </div>
  </section>
  <section class="grad-2">
    <p>&nbsp</p>
    <br>
    <p>&nbsp</p>
    <br>
    <p>&nbsp</p>
    <br>
    <p>&nbsp</p>
  </section>
  <section class="third-body">
    <div class="container hidden">
      <div class="row">
        <div class="col-sm-0 col-xl-6 graph-third-para floating">
          <img src="img/3rd_para_img.png">
        </div>
        <div class="col-sm-12 col-xl-6">
          <h2 class="white_glow_big">We Promise a 100% Refund</h2>
          <p>Our 100% refund guarantee ensures your complete satisfaction with no strings attached. 
            If for any reason you're not satisfied with your dive, simply ask for a full refund. 
            If it reassures you though, nobody has every claimed a refund, and we promise you wont either! 
            Join us today and embark on an epic adventure, free of worry and filled with wonder. 
          </p>
        </div>
      </div>
      <div class="row centered">
        <div class="col-5 col-xl-8">
        </div>
        <div class="col-6 col-xl-4">
          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" class="rounded grow para-buttons">Watch Video</button>
        </div>
      </div>
    </div>
  </section>
  <section class="grad-3">
    <p>&nbsp</p>
    <br>
    <p>&nbsp</p>
    <br>
    <p>&nbsp</p>
    <br>
    <p>&nbsp</p>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-4 col-xl-3">
          <h3><i class="fa-sharp fa-solid fa-phone-volume"></i> Contact Us</h3><br>
          <ul>
            <li class="hidden"><a href="#"><i class="fa-solid fa-phone"></i> (731)616-0706</a></li>
            <li class="hidden"><a href="#"><i class="fa-solid fa-phone"></i> (731)803-6897</a></li>
            <li class="hidden"><a href="#"><i class="fa-solid fa-phone"></i> (731)298-1218</a></li>
          </ul>
        </div>
        <div class="col-4 col-xl-3">
          <h3><i class="fa-solid fa-share-nodes"></i> Our Socials</h3><br>
          <ul>
            <li class="hidden"><a href="#"><i class="fa-brands fa-youtube"></i> Youtube</a></li>
            <li class="hidden"><a href="#" style="font-size:20px;"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
            <li class="hidden"><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
          </ul>
        </div>
        <div class="col-4 col-xl-3">
          <h3><i class="fa-solid fa-link"></i> Other Links</h3><br>
          <ul>
            <li class="hidden"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter""><i class="fa-solid fa-video"></i> About us Video</a></li>
            <li class="hidden"><a href="info.php"><i class="fa-solid fa-question"></i> About the Mariana Trench</a></li>
          </ul>
        </div>
        <div class="col-0 col-xl-3">
          <a href="#"><img src="img/Logo.png" alt="image" height="200px"></a>
        </div>
      </div>
    </div>
  </footer>
</body>
<!---->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-body modal-decorator-body">
      <p>&nbsp</p>
      <br>
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" id='closebutton'>close</button>
      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="801" height="450" type="text/html" src="https://www.youtube.com/embed/h7pmtxvM0RI?autoplay=0&fs=1&iv_load_policy=3&showinfo=1&rel=0&cc_load_policy=0&start=0&end=0&origin=http://youtubeembedcode.com"></iframe>
      <p>&nbsp</p>
      <br>
      </div>
    </div>
  </div>
</div>
<!---->
</html>