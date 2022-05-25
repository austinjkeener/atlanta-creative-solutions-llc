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

</body>

</html>