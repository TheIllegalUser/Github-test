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
        <h1 class="white_glow_big">Sign Up</h1>
        <p class="hidden white_glow_big">Ready to <span class="quotationcolorswap" id="scroll-down-button">Embark</span> on your journey?</p>
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
  <section class="first-body sign-up-body" id="part-1"> 
    <div class="container level_one_body" id="content">
      <form>
        <div class="row">
          <div class="col-7">
            <img src="img/Form_floater.png" alt="floaty boi" class="floating">
          </div>
          <div class="col-5">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" autocomplete="off" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" autocomplete="off" required>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" autocomplete="off" required>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" autocomplete="off" required>
            <div class="submit_button">
            <input type="submit" value="Sign Up" class="red rounded grow">
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <section class="first-body sign-up-body" id="part-2" style="display: none;">
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
    <div class="col-5">
      <h3 class="h3styles white_glow_big">Or Create Your Own</h3>
      <div class="form-scroll">
      <form action="#" method="post">
        <p>Choose Your Flight Level</p>
        <label>
          <input type="radio" name="answer" value="a">
          Economy
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="b">
          Business
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="c">
          First
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="d">
          Private
        </label>
        <br>
      </form>
      <form action="#" method="post">
        <p>Select Your Accomidation Plan</p>
        <label>
          <input type="radio" name="answer" value="a">
          Standard Hotel
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="b">
          Upgraded Hotel Room
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="c">
          Private Suit
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="d">
          Private Penthouse
        </label>
        <br>
      </form>
      <form action="#" method="post">
        <p>Pick your meal plan</p>
        <label>
          <input type="radio" name="answer" value="a">
          Meal Vouchers(standard amount)
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="b">
          Meal Vouchers(increased amount)
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="c">
          5 Star Resturant Plan
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="d">
          Private Chef
        </label>
        <br>
      </form>
      <form action="#" method="post">
        <p>Choose Your City Travel Method</p>
        <label>
          <input type="radio" name="answer" value="a">
          Basic Transport
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="b">
          Private Transport
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="c">
          Personal Driver
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="d">
          limousine
        </label>
        <br>
      </form>
      <form action="#" method="post">
        <p>Select Your Ocean Transportation Method</p>
        <label>
          <input type="radio" name="answer" value="a">
          Basic Transportation
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="b">
          Small Yatch Transportation
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="c">
          Large Yatch Transportation
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="d">
          Luxory Yatch Transportation
        </label>
        <br>
      </form>
      <form action="#" method="post">
        <p>Pick your sea gear</p>
        <label>
          <input type="radio" name="answer" value="a">
          Sea Flippers/Goggles
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="b">
          Previous + Diving suit
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="c">
          Previous + Light Oxygen Tank
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="d">
          Previous + Double Cylinder Oxygen Tank
        </label>
        <br>
      </form>
      <form action="#" method="post">
        <p>Select your guide</p>
        <label>
          <input type="radio" name="answer" value="a">
          Designated Guide
        </label>
        <br>
        <label>
          <input type="radio" name="answer" value="b">
          Guide For Every Member
        </label>
        <br>
      </form>
    </div>
    <div class="submit_button">
      <input type="submit" value="Sign Up" class="red rounded grow" style="margin-left: 12px;margin-top: 1rem;">
    </div>
    </div>
    </div>
  </section>
  <section class="first-body sign-up-body" id="part-3" style="display: none;">
    <div class="container level_one_body" id="content">
      <div class="row">
      <div class="col-6" style="height: 520px;">
    <form method="post" action="process_form.php" class="third-form-styles">
    <label for="dropdown"><h2 class="white_glow_big">Choose Your Airport</h2></label>
    <p>These airports fly to our location. Choose the one best for you.</p>
      <select name="dropdown" id="dropdown" style="margin-top: 4.5rem;">
      <option value="option1">Hartsfield-Jackson Atlanta International Airport</option>
      <option value="option2">Dallas/Fort Worth International Airport</option>
      <option value="option3">Denver International Airport</option>
      <option value="option4">O'Hare International Airport</option>
      <option value="option5">Los Angeles International Airport</option>
      <option value="option6">Charlotte Douglas International Airport</option>
      <option value="option7">Orlando International Airport</option>
      <option value="option8">Harry Reid International Airport</option>
      <option value="option9">Phoenix Sky Harbor International Airport</option>
      <option value="option10">Miami International Airport</option>
      <option value="option11">Seattle-Tacoma International Airport</option>
      <option value="option12">George Bush Intercontinental Airport</option>
      <option value="option13">John F. Kennedy International Airport</option>
      <option value="option14">Newark Liberty International Airport</option>
      <option value="option15">Fort Lauderdale-Hollywood International Airport</option>
      <option value="option16">Minneapolis-Saint Paul International Airport</option>
      <option value="option17">San Francisco International Airport</option>
      <option value="option18">Detroit Metropolitan Airport</option>
      <option value="option19">Logan International Airport</option>
      <option value="option20">	Salt Lake City International Airport</option>
      </select>
    </form>
    </div>
    <div class="col-6" style="height: 520px;">
      <h2 class="white_glow_big" style="margin-bottom: 1.1rem;">Sign Our Waiver</h2>
      <form id="waiver-form">
        <p>By checking this box, I agree to the terms of the <span class="quotationcolorswap"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLong">waiver.</a></span></p>
        <input type="checkbox" name="agree" id="agree" class="grow-noglow" style="margin-top: 5.5rem;" required>
        <label for="agree" class="quotationcolorswap">I Agree</label>
        <br>
      </form>
    </div>
      <button type="submit" class="centered red rounded button21 grow">Sign Up</button>
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
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Waiver of Consent</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Waiver and release of liability
          IN CONSIDERATION OF the risk of injury that exists while participating in suicide(hereinafter the “activity”); and 
          IN CONSIDERATION OF my desire to participate in said activity and being given the right to participate in same;
          I HEREBY, for myself, my heirs, executors, administrators, assigns, or personal representatives (hereinafter collectively, “Releasor,” “I” or “me,” which terms shall also include Releasor’s parents or guardians if Releasor is under 18 years of age), knowingly and voluntarily enter into this WAIVER AND RELEASE OF LIABILITY and hereby waive any and all rights, claims, or causes of action of any kind arising out of my participation in the Activity; and
          I HEREBY release and forever discharge EXPEDITION MARIANA, located at 308 Negra Arroyo Lane, Albuquerque, New Mexico 87104, their affiliates, managers, members, agents, attorneys, staff, volunteers, heirs, representatives, predecessors, successors and assigns (collectively “Releases”), from any physical or psychological injury that I may suffer as a direct result of my participation in the aforementioned Activity.
          <br><br>
          I AM VOLUNTARILY PARTICIPATING IN THE AFOREMENTIONED
          ACTIVITY AND I AM PARTICIPATING IN THE ACTIVITY ENTIRELY AT MY
          OWN RISK. I AM AWARE OF THE RISKS ASSOCIATED WITH
          PARTICIPATING IN THIS ACTIVITY, WHICH MAY INCLUDE, BUT ARE NOT
          LIMITED TO: PHYSICAL OR PSYCHOLOGICAL INJURY, PAIN, SUFFERING,
          ILLNESS, DISFIGUREMENT, TEMPORARY OR PERMANENT DISABILITY
          (INCLUDING PARALYSIS), ECONOMIC OR EMOTIONAL LOSS, AND DEATH.
          I UNDERSTAND THAT THESE INJURIES OR OUTCOMES MAY ARISE FROM
          MY OWN OR OTHERS' NEGLIGENCE, CONDITIONS RELATED TO TRAVEL
          TO AND FROM THE ACTIVITY, OR FROM CONDITIONS AT THE ACTIVITY
          LOCATION(S). NONETHELESS, I ASSUME ALL RELATED RISKS, BOTH
          KNOWN AND UNKNOWN TO ME, OF MY PARTICIPATION IN THIS
          ACTIVITY.
          <br><br>
          I FURTHER AGREE to indemnify, defend and hold harmless the Releases against any
          and all claims, suits or actions of any kind whatsoever for liability, damages, compensation
          or otherwise brought by me or anyone on my behalf, including attorney's fees and any
          related costs.
          <br><br>
          I FURTHER ACKNOWLEDGE that Releases are not responsible for errors, omissions,
          acts or failures for act of any party or entity conducting a specific event or activity on
          behalf of Releases. In the event that I should require medical care or treatment, I
          authorize Mariana Dives to provide all emergency medical care deemed necessary,
          including but not limited to, first aid, CPR, the use of AEDs, emergency medical transport,
          and sharing of medical information with medical personnel. I further agree to assume all
          costs involved and agree to be financially responsible for any costs incurred as a result of
          such treatment. I am aware and understand that I should carry my own health insurance.
          <br><br>
          I FURTHER ACKNOWLEDGE that this Activity may involve a test of a person's
          physical and mental limits and may carry with it the potential for death, serious injury, and
          property loss. I agree not to participate in the Activity unless I am medically able and
          properly trained, and I agree to abide by the decision of the Mariana Dives official or
          agent, regarding my approval to participate in the Activity.
          <br><br>
          I HEREBY ACKNOWLEDGE THAT I HAVE CAREFULLY READ THIS
          "WAIVER AND RELEASE" AND FULLY UNDERSTAND THAT IT IS A
          RELEASE OF LIABILITY. I EXPRESSLY AGREE TO RELEASE AND
          DISCHARGE Expedition Mariana AND ALL OF ITS AFFILIATES, MANAGERS,
          MEMBERS, AGENTS, ATTORNEYS, STAFF, VOLUNTEERS, HEIRS,
          REPRESENTATIVES, PREDECESSORS, SUCCESSORS AND ASSIGNS, FROM
          ANY AND ALL CLAIMS OR CAUSES OF ACTION AND I AGREE TO
          VOLUNTARILY GIVE UP OR WAIVE ANY RIGHT THAT I OTHERWISE HAVE
          TO BRING A LEGAL ACTION AGAINST Expedition Mariana FOR PERSONAL
          INJURY OR PROPERTY DAMAGE.
          <br><br>
          To the extent that statute or case law does not prohibit releases for ordinary negligence,
          this release is also for such negligence on the part of Mariana Dives, its agents, and
          employees.
          <br><br>
          I agree that this Release shall be governed for all purposes by New Mexico law, without
          regard to any conflict of law principles. This Release supersedes any and all previous oral
          or written promises or other agreements.
          <br><br>
          In the event that any damage for equipment or facilities occurs as a result of my or my
          family's or my agent's willful actions, neglect or recklessness, I acknowledge and agree to
          be held liable for any and all costs associated with any such actions of neglect or recklessness.
          <br><br>
          THIS WAIVER AND RELEASE OF LIABILITY SHALL REMAIN IN EFFECT FOR
          THE DURATION OF MY PARTICIPATION IN THE ACTIVITY, DURING THIS
          INITIAL AND ALL SUBSEQUENT EVENTS OF PARTICIPATION.
          <br><br>
          THIS AGREEMENT was entered into at arm's-length, without duress or coercion, and is
          to be interpreted as an agreement between two parties of equal bargaining strength. Both
          Participant, and Expedition Mariana agree that this agreement is
          clear and unambiguous as to its terms, and that no other evidence shall be used or admitted
          to alter or explain the terms of this agreement, but that it will be interpreted based on the
          language in accordance with the purposes for which it is entered into.
          <br><br>
          In the event that any provision contained within this Release of Liability shall be deemed
          to be severable or invalid, or if any term, condition, phrase or portion of this agreement
          shall be determined to be unlawful or otherwise unenforceable, the remainder of this
          agreement shall remain in full force and effect. If a court should find that any provision of
          this agreement to be invalid or unenforceable, but that by limiting said provision it would
          become valid and enforceable, then said provision shall be deemed to be written, construed,
          and enforced as so limited.
          </p>
      </div>
    </div>
  </div>
</div>
</html>