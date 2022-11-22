<?php
if (isset($_POST['submit'])) {
  if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '6LdMPyogAAAAADDOuyIBM_Go8Dl2HijuW_-4mzGa';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
      $mailTo = "austin@atlantacreative.org";
      $txt = "NEW LEAD";
      $name = $_POST['name'];
      $email = $_POST['email'];
      $tel = $_POST['tel'];
      $message = "~Contact information~" . "\r\n" . "Name: " . $name . "\r\n" . "Email: " . $email . "\r\n" . "Phone: " . $tel . "\r\n" . "Lead Source: Homepage";
      mail($mailTo, $txt, $message);
      $headers = "From: Atlanta Creative Solutions LLC <austin@atlantacreative.org>\r\n";
      header("Location:thanks.php?mailsend");
    } else {
      header("Location:index.php");
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2X8MYVB6MQ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-2X8MYVB6MQ');
  </script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Meta data for social media website sharing-->
  <meta property="og:url" content="https://www.atlantacreative.org" />
  <meta property="og:image" content="https://www.atlantacreative.org/image/logo/homepage-social-share.png" />
  <meta property="og:title" content="Atlanta Creative Solutions LLC" />
  <meta property="og:description" content="Atlanta Creative Solutions Website" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />

  <title>Atlanta Creative Solutions LLC</title>

  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.ico" />

  <!-- Bootstrap CSS CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!-- Main CSS -->
  <link href="style.css" rel="stylesheet" media="screen" />
  <!-- For Chrome for Android: -->
  <link rel="icon" sizes="192x192" href="/image/logo/android-chrome-192x192.png">
  <!-- For iPhone 6 Plus with @3× display: -->
  <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/image/logo/apple-touch-icon.png">
  <!-- For iPad with @2× display running iOS ≥ 7: -->
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/image/logo/apple-touch-icon-152x152.png">
  <!-- For iPad with @2× display running iOS ≤ 6: -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/image/logo/apple-touch-icon-144x144.png">
  <!-- For iPhone with @2× display running iOS ≥ 7: -->
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/image/logo/apple-touch-icon-120x120.png">
  <!-- For iPhone with @2× display running iOS ≤ 6: -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/image/logo/apple-touch-icon-114x114.png">
  <!-- For the iPad mini and the first- and second-generation iPad (@1× display) on iOS ≥ 7: -->
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/image/logo/apple-touch-icon-76x76.png">
  <!-- For the iPad mini and the first- and second-generation iPad (@1× display) on iOS ≤ 6: -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/image/logo/apple-touch-icon-72x72.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/image/logo/apple-touch-icon-57x57.png"><!-- 57×57px -->
</head>

<body>
  <!-- Messenger Chat Plugin Code -->
  <div id="fb-root"></div>

  <!-- Your Chat Plugin code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>
  <!--navigation bar-->
  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="/image/logo/logo-brand(2).png" width="200px" alt="Welcome to Atlanta Creative Solutions LLC" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#process">Process</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faq">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!--section 1-->
  <section class="container section-styling">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-12">
            <p class="fs-4">Business Professional Marketing And Advertising Solutions</p>
          </div>
        </div>
        <div class="row">
          <p>Serving those who God puts in partnership with us by providing new and existing professionally licensed businesses (lawyers, doctors, pastors, CPA's, ect...) with creative bundles and stand alone creative solutions to help get the word out about their product or service to thier customers.</p>
        </div>
        <div class="row">
          <a href="#portfolio" class="s1-buttons">View work</a>
          <a href="#about" class="s1-buttons">About us</a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="row">
      <div class="col-12">
        <div id="processControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/image/s6/section-six-carousel(1).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Step one">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(2).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Step Two">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(3).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Step Three">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(4).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Step Four">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(5).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Step Five">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#processControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#processControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
      </div>
    </div>
  </section>

  <section class="process">
    <div class="row d-flex justify-content-center">
      <div class="col-8">
        <div id="processControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/image/s6/section-six-carousel(1).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Step one">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(2).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Step Two">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(3).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Step Three">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(4).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Step Four">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(5).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Step Five">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#processControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#processControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!--section 2-->
  <!-- <section class="container section-styling">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <p>Why me</p>
        <p class="fs-4">Your Website Should Not Just Be Beautiful But Should Also Make A Difference</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="/image/s2/hp-section-two.png" class="img-fluid" alt="Why choose Atlanta Creative Solutions LLC">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <p>Let us craft a high-performing beautiful website for you that will get you new clients, portray your brand, and be both mobile-friendly and desktop-friendly.</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!--section 3-->
  <!-- <section class="container section-styling" id="services">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <p>Services</p>
        <p class="fs-4">
          We Are Here To Help
        </p>
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-sm-12">
        <div id="carouselIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/image/s3/hp-section-three(1)-type.png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Design Work">
            </div>
            <div class="carousel-item">
              <img src="/image/s3/hp-section-three(2)-type.png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Development Work">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section> -->
  <!--section 4-->
  <!-- <section class="container section-styling" id="portfolio">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <p>Portfolio</p>
        <p class="fs-4">Company Work</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-12">
            <img src="/image/s4/work(1).png" class="img-fluid" alt="Atlanta Creative Solutions LLC Company Reviews">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="fs-4">The Keener Law Firm - Website Design/Website Development/Social Media</p>
            <p>
              The Keener Law Firm Was Looking For A Fresh Website And Updated Social Media Presence. In Return We Were Able To Deliver A Lead Converting Website Which Currently Receives Maintenance On A Weekly Basis And Also Take Time To Add Content To Social Media For Them As Well.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <span class="badge rounded-pill text-bg-light">Website Design</span>
          </div>
          <div class="col-4">
            <span class="badge rounded-pill text-bg-light">Graphic and Web Development</span>
          </div>
          <div class="col-4">
            <span class="badge rounded-pill text-bg-light">Branding</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-12">
            <img src="/image/s4/major-details-logo-brand-474x375.png" class="img-fluid" alt="Atlanta Creative Solutions LLC Company Reviews">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="fs-4">Major Details Cleaning Service LLC/Auto Detailing - Logo Creation</p>
            <p>
              Major Details Wanted A New Logo. In Return We Were Able To Provide This Business With A Fresh Look To Use On Their T-Shirts, Hats, Trucks And Social Media Platforms.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12">
            <span class="badge rounded-pill text-bg-light">Branding</span>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <span class="badge rounded-pill text-bg-light">Logo Design</span>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--section 5-->
  <!-- <section class="container section-styling" id="testimonials">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <p>Testimonials</p>
        <p class="fs-4">What Our Clients Are Saying</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <p class="fs-1">"</p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, saepe, necessitatibus voluptatum ea molestiae incidunt excepturi, ab possimus ad aliquam culpa nisi eius fuga! Doloremque iste assumenda distinctio eligendi mollitia!
          </p>
          <p class="fs-4">Mr. Keener</p>
          <p>Owner, The Keener Law Firm</p>
        </div>
        <div class="row">
          <img src="/image/s5/the-keener-law-firm-s5.png" width="200px" alt="Atlanta Creative Solutions LLC Company Reviews">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <p class="fs-1">"</p>
          <p>
            I Was Completely New To The Concept Of Graphic Design. I Knew What I Wanted But Had No Idea How To Make It Happen. Austin Took The Time To Hear Me And Capture My Vision. He Is Extremely Patient And Can Bring Your Ideas To Life. Thanks Austin For Holding My Hand Through The Process.
          </p>
          <p class="fs-4">Mr. Angelethy</p>
          <p>Owner, Major Details Cleaning Service, LLC/Auto Detailing</p>
        </div>
        <div class="row">
          <img src="/image/s5/major-details-s5.png" width="200px" alt="Atlanta Creative Solutions LLC Company Reviews">
        </div>
      </div>
    </div>
  </section> -->
  <!--section 6-->
  <!-- <section class="container section-styling" id="process">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <p>Methodology</p>
        <p class="fs-4">A Streamlined Process</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div id="carouselIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/image/s6/section-six-carousel(1).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Services">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(2).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Services">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(3).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Services">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(4).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Services">
            </div>
            <div class="carousel-item">
              <img src="/image/s6/section-six-carousel(5).png" class="d-block w-100" alt="Atlanta Creative Solutions LLC Services">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section> -->
  <!--section 7-->
  <!-- <section class="container section-styling" id="about">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-12">
            <p>About</p>
            <p class="fs-4">Hi, I am a Creative Solutions Specialist</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p>
              Hello My Name Is Austin. Here In Atlanta Georgia We Here At Atlanta Creative Solutions Strive To Provide Our Clients With A Streamline Process From Start To Finish. When All Is Said And Done We Want To Make Sure That They Feel Like They Have The Confidence To Go Out And Make A Bigger Difference In Their Community With The Service We Can Provide To Them.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <img src="/image/s7/hp-section-seven.png" alt="Atlanta Creative Solutions LLC Creative Solutions Specialists">
      </div>
    </div>
  </section> -->
  <!-- section 8
  <section id="faq">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <p>FAQ Section</p>
        <p class="fs-4">Common Questions Answered</p>
      </div>
    </div>
  </section> -->
  <!--section 9-->
  <section id="contact">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Need A High-Performing Website?</h1>
        <p><i>Let Us Get Started</i></p>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-6">
        <form method="post" action="index.php">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Name" name="name" required />
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Phone" name="tel" pattern="[0-9-()]+" title="Phone number" />
          </div>
          <div class="row">
            <div class="col-12">
              <input id="submit_btn" hidden disabled value="Submit" type="submit" name="submit" value="Submit" class="reviews-contact-form-submit" />
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <div data-callback="enableSubmit" class="g-recaptcha" data-sitekey="6LdMPyogAAAAAP9TegH0MCML_Mr_2k5PK6OhCReW">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!--page footer-->
  <footer>
    <div class="row">
      <div class="col-12 mt-3">
        <p class="ms-3">Atlanta Creative Solutions LLC &copy; 2022 all rights reserved</p>
        <img src="/image/footer/f_logo_RGB-Blue_100.png" width="50px" height="50px" class="footer-social-media" alt="Atlanta Creative Solutions LLC on Facebook">
        <img src="/image/footer/Instagram_Glyph_Gradient_RGB.png" width="50px" height="50px" class="footer-social-media" alt="Atlanta Creative Solutions LLC on Instagram">
      </div>
    </div>
  </footer>
  <!--Bootstrap JS CDN-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <!--Facebook chat box script-->
  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "113276933916027");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
      FB.init({
        xfbml: true,
        version: 'v12.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
</body>

</html>