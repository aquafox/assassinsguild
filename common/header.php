<!DOCTYPE html>
<?php echo $lang['HTML']; ?>
<head>
  <meta charset="UTF-8">
  <title><?php echo $lang['PAGE_TITLE']; ?></title>
  <link rel="stylesheet" type="text/css" href="common/styles.css">
  <link rel="stylesheet" type="text/css" href="common/addtohomescreen.css">
  
  <!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
  <!--[if IE]><link rel="shortcut icon" href="icons/favicon.ico"><![endif]-->
  <!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. --> 
  <link rel="apple-touch-icon-precomposed" href="icons/favicon-mobile.png">
  <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
  <link rel="icon" href="icons/favicon.png">
  <link rel="shortcut icon" sizes="196x196" href="icons/favicon.png">

  <meta name="description" content="Assassins Guild is an open source web platform to manage your games of Assassins.">
  <meta name="keywords" content="assassins,assassins guild,live action,opensource,game,live action game,killers">
  <meta name="author" content="Qusai Al Shidi">
  
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">  
  <meta name="viewport" content="width=device-width">
  <meta name="apple-mobile-web-app-title" content="Assassins Guild">
  
  <script src="common/addtohomescreen.js"></script>
  <script>
    addToHomescreen();
  </script>
  
</head>

<body>

<!-- Facebook like button script preload -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=827682223934410";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header>
<div class="banner">
  <?php echo "<img src=\"img/logo.svg\" class=\"logo\" alt=\"" . $lang['LOGO_ALT'] . "\" />" ?>
</div>
<h1><?php echo $lang['HEADER_TITLE']; ?></h1>
</header>