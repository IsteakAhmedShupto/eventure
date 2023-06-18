<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./root.css" />
  <link rel="stylesheet" href="./index.css" />
  <link rel="stylesheet" href="./header.css" />
  <link rel="stylesheet" href="./home.css" />
  <link rel="stylesheet" href="./about.css" />
  <link rel="stylesheet" href="./learnings.css" />
  <link rel="stylesheet" href="./partners.css" />
  <link rel="stylesheet" href="./offers.css" />
  <link rel="stylesheet" href="./contact.css" />
  <link rel="stylesheet" href="./footer.css" />
  <title>Eventure</title>
</head>

<body>
  <?php include "./nav.php"; ?>

  <section class="home-container" id="home">
    <div class="texts-links-container">
      <h3>We are event professionals</h3>
      <p>
        Whether it is your birthday, concert, wedding or any event, we are
        here to make it complete for you!
      </p>
      <div class="links">
        <a href="./login/login.php">Login</a>
        <a href="./registration/registration.html">Registration</a>
      </div>
    </div>
    <section class="home-container-images">
      <div class="img-container">
        <img src="./images/home-bg-1.jpg" alt="home-bg-1" />
        <p>Our special board meeting</p>
      </div>
      <div class="img-container">
        <img src="./images/home-bg-2.jpg" alt="home-bg-2" />
        <p>Tactical plan to make events successful</p>
      </div>
      <div class="img-container">
        <img src="./images/home-bg-3.jpg" alt="home-bg-3" />
        <p>Weekly conferences to make our events better</p>
      </div>
    </section>
  </section>

  <article class="about-us-container" id="about">
    <h3 class="title">About Us</h3>
    <div class="section-image">
      <div class="title-wrapper">
        <p>
          Our mission is to help you grow as successful. We have successfully
          launched 65+ events.
        </p>
        <div class="title-plus">
          <p>65+</p>
          <p>55+</p>
        </div>
        <p>
          we have got 55+ positive feedbacks and our return customers are 95%.
        </p>
      </div>
      <img src="./images/about-us-section-image.jpg" alt="box-section" />
    </div>
    <section class="box-section">
      <h3 class="title">Why Choose us?</h3>
      <div class="box-text-wrapper">
        <div class="box-text-left">
          <h3>Why us?</h3>
          <p>
            We are successfully doing events for over 50 years. We pride
            ourselves on our ability to challenge perfecting events for people
            to make their moments best. We shape our events such in a way that
            once any client joins us rarely do other of their events without
            us.
          </p>
          <div class="links">
            <a href="./registration/">Join us</a>
          </div>
        </div>
        <div class="box-text-right">
          <h3>Helping you</h3>
          <h3>to perfect your special moments.</h3>
          <p>
            With life-centric design at the core of our principles, we depend
            on our team's varied perspectives and life experiences to make
            your event successful.
          </p>
        </div>
      </div>
    </section>
  </article>

  <article class="learnings">
    <p class="heading">Things you will get</p>
    <p class="second-heading">
      Along with lot's of features you will also get many things from us.
    </p>
    <section class="texts">
      <p>Finding perfect place</p>
      <p>Hosting events with no problems</p>
      <p>Building event awareness</p>
      <p>Event hacks for social purposes</p>
      <p>Influencers marketing for events</p>
      <p>Influencers presence on events</p>
    </section>
  </article>

  <article class="partners" id="partners">
    <h3>TRUSTED BY OVER ONE THOUSAND COMPANIES</h3>
    <div class="partners-logo">
      <p class="first">Paperlive</p>
      <p class="second">Entrepreneur</p>
      <p class="third">FORTUNE</p>
      <p class="fourth">GOTUBE</p>
      <p class="fifth">MASHABLE</p>
    </div>
  </article>

  <article class="offers" id="offers">
    <h3>What we offer</h3>
    <div class="offers-discount-groups"></div>
  </article>

  <article class="contact-container">
    <h3>Contact Us</h3>
    <form>
      <div class="name-container">
        <input type="text" placeholder="First name" />
        <input type="text" placeholder="Last name" />
      </div>
      <input type="email" placeholder="Email" />
      <textarea placeholder="Enter your feedback here"></textarea>
      <input type="submit" value="Submit" />
    </form>
  </article>

  <?php include "./footer.php"; ?>

  <!--Javascript file attachment-->
  <script src="./index.js"></script>
  <script src="./offers.js"></script>
</body>

</html>