<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Expedition Mariana</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script defer src="script.js"></script>
<script defer src="sign_up.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e8b3e939ce.js" crossorigin="anonymous"></script>
<body>
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
          <a href="index.php"><img src="img/Logo.png" alt="logo"></a>
        </div>
        <div class="col-xs-12 col-md-7 col-lg-7 nav-text">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Info.php">Info</a></li>
            <li><a href="Packages.php">Packages</a></li>
          </ul>
        </div>
        <div class="d-none d-md-block col-md-4 col-lg-3">
          <div class="centered">
            <button class="red rounded grow">Sign Up</button>
            <button class="rounded grow" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Watch Video</button>
          </div>
        </div>
      </div>
    </div>
  </nav>
    <div class="container title-text">
      <div class="row">
        <div class="col-12">
        <h1 class="title_screen_glow">Congratulations!</h1>
        <p class="hidden title_screen_glow">You Are Officially Signed Up! Below Are Some Important Details</p>
        </div>
      </div>
    </div>
  </section>
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
    <section class="third-body sign-up-body">
      <div class="container hidden">
        <div class="row">
          <div class="col-6 graph-third-para floating">
            <img src="img/Sign_Up.png">
          </div>
          <div class="col-6">
            <h2 class="white_glow_big">Congratulations </h2>
            <p>
            Your trip will be one week from now.
            Please bring $47,500 in a disguised, unmarked bag, to a location that will be sent to your email.<br>
            Dont have that much money? Here's a tip. The goverment is much more leniant with giving loans to students.<br>
            Our team will be in touch with you via email!
            </p>
          </div>
        </div>
        <div class="row centered">
          <div class="col-7">
          </div>
          <div class="col-4">
            <button style="margin-bottom: 10rem; margin-left: 7.5rem;" class="rounded grow para-buttons"><a href="index.php">Return Home</a></button>
          </div>
        </div>
      </div>
    </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-3">
          <h3><i class="fa-sharp fa-solid fa-phone-volume"></i> Contact Us</h3><br>
          <ul>
            <li class="hidden"><a href="#"><i class="fa-solid fa-phone"></i> (731)616-0706</a></li>
            <li class="hidden"><a href="#"><i class="fa-solid fa-phone"></i> (731)803-6897</a></li>
            <li class="hidden"><a href="#"><i class="fa-solid fa-phone"></i> (731)298-1218</a></li>
          </ul>
        </div>
        <div class="col-3">
          <h3><i class="fa-solid fa-share-nodes"></i> Our Socials</h3><br>
          <ul>
            <li class="hidden"><a href="#"><i class="fa-brands fa-youtube"></i> Youtube</a></li>
            <li class="hidden"><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
            <li class="hidden"><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
          </ul>
        </div>
        <div class="col-3">
          <h3><i class="fa-solid fa-link"></i> Others</h3><br>
          <ul>
            <li class="hidden"><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa-solid fa-video"></i> About us Video</a></li>
            <li class="hidden"><a href="Info.php"><i class="fa-solid fa-question"></i> About the Mariana Trench</a></li>
          </ul>
        </div>
        <div class="col-3">
          <a href="#"><img src="img/Logo.png" alt="image" height="200px"></a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>