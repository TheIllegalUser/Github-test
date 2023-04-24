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
        <h1 class="title_screen_glow">Sign Up</h1>
        <p class="hidden title_screen_glow">Where Will You Travel From?</p>
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
  <section class="first-body sign-up-body" id="part-3">
  <div class="container level_one_body" id="content">
    <div class="row">
      <div class="col-6" style="height: 520px;">
        <form method="POST" action="includes/sign_up.inc3.php" class="third-form-styles" id="3rdformcontent">
          <label for="dropdown"><h2 class="white_glow_big">Choose Your Airport</h2></label>
          <p>These airports fly to our location. Choose the one best for you.</p>
          <select name="dropdown" id="dropdown" style="margin-top: 4.5rem;">
            <option value="Hartsfield-Jackson_Atlanta_International_Airport">Hartsfield-Jackson Atlanta International Airport</option>
            <option value="Dallas/Fort_Worth_International_Airport">Dallas/Fort Worth International Airport</option>
            <option value="Denver_International_Airport">Denver International Airport</option>
            <option value="O'Hare_International_Airport">O'Hare International Airport</option>
            <option value="Los_Angeles_International_Airport">Los Angeles International Airport</option>
            <option value="Charlotte_Douglas_International_Airport">Charlotte Douglas International Airport</option>
            <option value="Orlando_International_Airport">Orlando International Airport</option>
            <option value="Harry_Reid_International_Airport">Harry Reid International Airport</option>
            <option value="Phoenix_Sky_Harbor_International_Airport">Phoenix Sky Harbor International Airport</option>
            <option value="Miami_International_Airport">Miami International Airport</option>
            <option value="Seattle-Tacoma_International_Airport">Seattle-Tacoma International Airport</option>
            <option value="George_Bush_Intercontinental_Airport">George Bush Intercontinental Airport</option>
            <option value="John_F._Kennedy_International_Airport">John F. Kennedy International Airport</option>
            <option value="Newark_Liberty_International_Airport">Newark Liberty International Airport</option>
            <option value="Fort_Lauderdale-Hollywood_International_Airport">Fort Lauderdale-Hollywood International Airport</option>
            <option value="Minneapolis-Saint_Paul_International_Airport">Minneapolis-Saint Paul International Airport</option>
            <option value="San_Francisco_International_Airport">San Francisco International Airport</option>
            <option value="Detroit_Metropolitan_Airport">Detroit Metropolitan Airport</option>
            <option value="Logan_International_Airport">Logan International Airport</option>
            <option value="Salt_Lake_City_International_Airport">Salt Lake City International Airport</option>
          </select>
        </div>
        <div class="col-6" style="height: 520px;">
          <h2 class="white_glow_big" style="margin-top: 3rem;">Sign Our Waiver</h2>
          <p>By checking this box, I agree to the terms of the <span class="quotationcolorswap"><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModalLong">waiver.</a></span></p>
          <div style="display: flex; flex-direction: column; align-items: center; margin-top: 6.5rem;">
            <input type="checkbox" name="agree" id="agree" class="grow-noglow" required>
            <label for="agree" class="quotationcolorswap" style="margin-top: 5px;">I Agree</label>
          </div>
        </div>
      </form>
      </div>
      <div class="row">
      <button type="submit" form="3rdformcontent" class="centered red rounded button21 grow">Sign Up</button>
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