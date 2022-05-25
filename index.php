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
  <!--section 1-->
  <!--section 2-->
  <!--section 3-->
  <!--section 4-->
  <!--section 5-->
  <!--section 6-->
  <!--section 7-->
  <!--section 8-->
  <!--section 9-->
  <!--page footer-->
  <footer>
    <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12">
        <p>Atlanta Creative Solutions LLC &copy; 2022 all rights reserved</p>
      </div>
      <!--social media-->
      <div class="col-lg-2 col-md-12 col-sm-12">
        <img src="/image/footer/f_logo_RGB-Blue_100.png" class="footer-social-media" alt="Atlanta Creative Solutions LLC on Facebook">
      </div>
      <div class="col-lg-2 col-md-12 col-sm-12">
        <img src="/image/footer/Instagram_Glyph_Gradient_RGB.png" class="footer-social-media" alt="Atlanta Creative Solutions LLC on Instagram">
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