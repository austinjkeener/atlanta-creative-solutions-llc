<?php
if (isset($_POST['submit'])) {
  if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '';
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

  <!-- Bootstrap CDN-->
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
    <a class="navbar-brand" href="#">
      <img src="/image/logo/logo-brand(2).png" class="img-fluid" alt="Welcome to Atlanta Creative Solutions LLC">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Work</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Process</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </header>

  <!--section 1-->
<section>
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="row">
        <p class="fs-3">Business Professional Marketing And Advertising Solutions</p>
      </div>
      <div class="row">
        <p>Serving those who God puts in partnership with us by providing new and existing professionally licensed businesses (lawyers, doctors, pastors, CPA's, ect...) with creative bundles and stand alone creative solutions to help get the word out about their product or service to thier customers.</p>
      </div>
      <div class="row">
        <a href="#" class="s1-buttons">View work</a>
        <a href="#" class="s1-buttons">About us</a>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
    </div>
  </div>
</section>

<!--section 2-->
<section>
      <div class="row">
        <div class="col-12">
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
  </section>

    <!--section 3-->
    <section>
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12">
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
    </section>
  <!--section 4-->
  <!--section 5-->
  <!--section 6-->
  <!--section 7-->
  <!--section 8-->
  <!--section 9-->
  <!--page footer-->
  <footer>
    <div class="row">
      <div class="col-12 mt-3">
        <p class="ms-3">Atlanta Creative Solutions LLC &copy; 2022 all rights reserved</p>
        <img src="/image/footer/f_logo_RGB-Blue_100.png"  width="50px" height="50px" class="footer-social-media" alt="Atlanta Creative Solutions LLC on Facebook">
        <img src="/image/footer/Instagram_Glyph_Gradient_RGB.png" width="50px" height="50px" class="footer-social-media" alt="Atlanta Creative Solutions LLC on Instagram">
      </div>
    </div>
  </footer>
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