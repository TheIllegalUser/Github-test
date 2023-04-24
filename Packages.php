<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Expedition Mariana</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script defer src="script.js"></script>
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
        <h1 class="title_screen_glow">Select Your Experience</h1>
        <p class="info-para-text hidden title_screen_glow">“The sea, once it casts its spell, holds one in its net of wonder forever.” - Jacques Cousteau
        </p>
      </div>
      </div>
    </div>
      </div>
    </div>
  </section>
  <section class="first-body first-body-shop">
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
       <!--image slider start-->
       <div class="slider hidden">
        <div class="slides">
          <!--radio buttons start-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <!--radio buttons end-->
          <!--slide images start-->
          <div class="slide first">
            <div class="row bronze-header">
              <a href="#"><h2>Bronze package</h2></a>
            </div>
            <div class="row">
            <div class="col-5">
            <img src="img/Bronze_logo.png" class="floating">
            </div>
            <div class="col-6">
            <p>-Airline ticket to closest city<br>
              -Basic accomidations<br>
              -Meal vouchers of choice<br>
              -Basic Transportation in city<br>
              -Transportation to trench<br>
              -Sea Flippers<br>
              -Sea Goggles<br>
              -Designated Guide<br></p>
            </div>
          </div>
          </div>
          <div class="slide">
            <div class="row silver-header">
              <h2>Silver package</h2>
            </div>
            <div class="row">
              <div class="col-5">
              <img src="img/Silver_logo.png" class="floating2">
              </div>
              <div class="col-6">
              <p><span class="quotationcolorswap">-Business class</span> to closest city<br>
                -<span class="quotationcolorswap">Premium</span> accomidations<br>
                -Meal vouchers of choice<br>
                -<span class="quotationcolorswap">Private</span> transportation in city<br>
                -<span class="quotationcolorswap">Yatch</span> transportation to trench<br>
                -<span class="quotationcolorswap">Premium Diving Suit</span><br>
                -<span class="quotationcolorswap">Full diving Mask</span><br>
                -Designated Guide<br></p>
              </div>
            </div>
            </div>
          <div class="slide">
            <div class="row gold-header">
              <h2>Gold package</h2>
            </div>
            <div class="row">
              <div class="col-5">
              <img src="img/Gold_logo.png" class="floating">
              </div>
              <div class="col-6">
              <p>-<span class="quotationcolorswap">1st class</span> ticket to closest city<br>
                -<span class="quotationcolorswap">Private Suit with designated caretakers</span><br>
                -<span class="quotationcolorswap">Exclusive 5 star resturant plan</span><br>
                -<span class="quotationcolorswap">Personal driver</span> in city<br>
                -Yatch transportation to trench<br>
                -<span class="quotationcolorswap">Light oxygen tank</span><br>
                -Designated Guide<br></p>
              </div>
            </div>
            </div>
          <div class="slide">
            <div class="row platinum-header">
              <h2>Platinum package</h2>
            </div>
            <div class="row">
              <div class="col-4">
              <img src="img/Platinum_logo.png" class="floating2">
              </div>
              <div class="col-8">
              <p>-<span class="quotationcolorswap">Exclusive private jet</span> with full amenities<br>
                -<span class="quotationcolorswap">Private penthouse</span> with staff 24/7<br>
                -<span class="quotationcolorswap">Private Chef</span> on duty 24/7<br>
                -<span class="quotationcolorswap">Limo</span> with full accomidations 24/7<br>
                -<span class="quotationcolorswap">Luxory Yatch</span> with full amenities<br>
                -<span class="quotationcolorswap">Double cylinder</span> oxygen tank<br>
                -<span class="quotationcolorswap">Full guide team for each member going</span><br></p>
              </div>
            </div>
            </div>
          <!--slide images end-->
          <!--automatic navigation start-->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
          <!--automatic navigation end-->
        </div>
        <!--manual navigation start-->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
        <!--manual navigation end-->
      </div>
      <!--image slider end-->        
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
    <div class="container hidden">
      <div class="row">
        <div class="col-6">
          <h2 class="white_glow_big">Our Policy on Refunds</h2>
          <p>Experience the trip of a lifetime without any worries. 
            We guarantee that this journey will exceed your expectations or your money back - no questions asked. 
            Join us and let us take care of everything while you create unforgettable memories that will last a lifetime.
          </p>
        </div>
        <div class="col-6 graph-second-para floating">
          <img src="img/1st_para_img(3).png">
        </div>
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
        <div class="col-6 graph-third-para floating">
          <img src="img/2nd_para_img(3).png">
        </div>
        <div class="col-6">
          <h2 class="white_glow_big">Transportation On a Free Dive?</h2>
          <p>We've got you covered from start to finish. With our packages, you'll get transportation included,
             taking you to the mariana trench located 125 miles away from land. Choose from our selection of luxurious packages,
             each with top-notch hospitality at the nearest country, ensuring a stress-free wait time before your freedive.
          </p>
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