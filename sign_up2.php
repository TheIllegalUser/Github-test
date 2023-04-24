<?php
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Expedition Mariana</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="styles.css">
<script defer src="script.js"></script>
<script defer src="sign_up2.js"></script>
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
        <h1 class="title_screen_glow">Sign Up</h1>
        <p class="hidden title_screen_glow">What Will Your Experience Be?</p>
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
  <section class="first-body sign-up-body" id="part-2">
    <div class="row">
    <div class="col-6">
    <h3 class="h3styles white_glow_big">Choose from a preset Package</h3>
    <form class="form2">
      <input type="radio" id="Bronze" name="PremadePackage" value="Bronze">
      <label for="html">Bronze</label><br>
      <input type="radio" id="Silver" name="PremadePackage" value="Silver">
      <label for="css">Silver</label><br>
      <input type="radio" id="Gold" name="PremadePackage" value="Gold">
      <label for="javascript">Gold</label>
      <input type="radio" id="Platinum" name="PremadePackage" value="Platinum">
      <label for="javascript">Platinum</label>
      <div class="submit_button">
        <input type="submit" value="Sign Up" class="red rounded grow" style="margin-left: 12px;margin-top: 2.5rem;">
      </div>
  </form>
  </div> 
  <div class="col-5" id="formscrollerselector">
  <form action="includes/sign_up.inc2.php" method="POST">
    <h3 class="h3styles white_glow_big">Or Create Your Own</h3>
    <div class="form-scroll">
      <p>Choose Your Flight Level</p>
      <label>
        <input type="radio" name="flight_level" value="a" class="formscroller">
        Economy
      </label>
      <br>
      <label>
        <input type="radio" name="flight_level" value="b" class="formscroller">
        Business
      </label>
      <br>
      <label>
        <input type="radio" name="flight_level" value="c" class="formscroller">
        First
      </label>
      <br>
      <label>
        <input type="radio" name="flight_level" value="d" class="formscroller">
        Private
      </label>
      <br>
      
      <p>Select Your Accommodation Plan</p>
      <label>
        <input type="radio" name="accommodation_plan" value="a" class="formscroller">
        Standard Hotel
      </label>
      <br>
      <label>
        <input type="radio" name="accommodation_plan" value="b" class="formscroller">
        Upgraded Hotel Room
      </label>
      <br>
      <label>
        <input type="radio" name="accommodation_plan" value="c" class="formscroller">
        Private Suite
      </label>
      <br>
      <label>
        <input type="radio" name="accommodation_plan" value="d" class="formscroller">
        Private Penthouse
      </label>
      <br>
      
      <p>Pick your meal plan</p>
      <label>
        <input type="radio" name="meal_plan" value="a" class="formscroller">
        Meal Vouchers (standard amount)
      </label>
      <br>
      <label>
        <input type="radio" name="meal_plan" value="b" class="formscroller">
        Meal Vouchers (increased amount)
      </label>
      <br>
      <label>
        <input type="radio" name="meal_plan" value="c" class="formscroller">
        5 Star Restaurant Plan
      </label>
      <br>
      <label>
        <input type="radio" name="meal_plan" value="d" class="formscroller">
        Private Chef
      </label>
      <br>
      
      <p>Choose Your City Travel Method</p>
      <label>
        <input type="radio" name="city_travel_method" value="a" class="formscroller">
        Basic Transport
      </label>
      <br>
      <label>
        <input type="radio" name="city_travel_method" value="b" class="formscroller">
        Private Transport
      </label>
      <br>
      <label>
        <input type="radio" name="city_travel_method" value="c" class="formscroller">
        Personal Driver
      </label>
      <br>
      <label>
        <input type="radio" name="city_travel_method" value="d" class="formscroller">
        Limousine
      </label>
      <br>

      <p>Select Your Ocean Transportation Method</p>
      <label>
        <input type="radio" name="ocean_transportation_method" value="a" class="formscroller">
        Basic Transportation
      </label>
      <br>
      <label>
        <input type="radio" name="ocean_transportation_method" value="b" class="formscroller">
        Small Yatch Transport
      </label>
      <br>
      <label>
        <input type="radio" name="ocean_transportation_method" value="c" class="formscroller">
        Large Yatch Transportation
      </label>
      <br>
      <label>
        <input type="radio" name="ocean_transportation_method" value="d" class="formscroller">
        Luxory Yatch Transportation
      </label>
      <br>

      <p>Pick your sea gear</p>
      <label>
        <input type="radio" name="sea_gear" value="a" class="formscroller">
        Sea Flippers/Goggles
      </label>
      <br>
      <label>
        <input type="radio" name="sea_gear" value="b" class="formscroller">
        Previous + Diving Suit
      </label>
      <br>
      <label>
        <input type="radio" name="sea_gear" value="c" class="formscroller">
        Previous + Light Oxygen Tank
      </label>
      <br>
      <label>
        <input type="radio" name="sea_gear" value="d" class="formscroller">
        Previous + Double Cylinder Oxygen Tank
      </label>
      <br>

      <p>Select Your Guide</p>
      <label>
        <input type="radio" name="guide" value="a" class="formscroller">
        Designated Guide
      </label>
      <br>
      <label>
        <input type="radio" name="guide" value="b" class="formscroller">
        Guide For Every Member
      </label>
      <br>
    </div>
    <div class="submit_button">
        <input type="submit" value="Sign Up" class="red rounded grow" style="margin-left: 12px;margin-top: 1.5rem;">
    </div>
</form>
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