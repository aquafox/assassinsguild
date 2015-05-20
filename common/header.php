<!DOCTYPE html>
<?php echo $lang['HTML']; ?>
<head>
  <meta charset="UTF-8">
  <title><?php echo $lang['PAGE_TITLE']; ?></title>
  <link rel="stylesheet" type="text/css" href="common/styles.css">
  
  <!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
  <!--[if IE]><link rel="shortcut icon" href="icons/favicon.ico"><![endif]-->
  <!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. --> 
  <link rel="apple-touch-icon-precomposed" href="icons/favicon-mobile.png">
  <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
  <link rel="icon" href="icons/favicon.png">

  <meta name="description" content="Assassins Guild is an opensource web platform to manage your games of Assassins.">
  <meta name="keywords" content="assassins,assassins guild,live action,opensource,game,live action game,killers">
  <meta name="author" content="Qusai Al Shidi">
  
  <meta name="viewport" content="width=device-width" />
</head>

<body>

<header>
<div class="banner">
  <?php echo "<img src=\"img/logo.svg\" class=\"logo\" alt=\"" . $lang['LOGO_ALT'] . "\" />" ?>
</div>
<h1><?php echo $lang['HEADER_TITLE']; ?></h1>
</header>