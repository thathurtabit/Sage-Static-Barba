<?php
// Change this var to update your website name
$websiteName = "My Website Name"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="<?php echo $myPath; ?>dist/images/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo $myPath; ?>dist/images/favicon-16x16.png" sizes="16x16">
  <link rel="stylesheet" href="<?php echo $myPath; ?>dist/styles/main.css" type="text/css" media="all">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $myPath; ?>dist/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php echo $myPath; ?>dist/images/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo $myPath; ?>dist/images/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?php echo $myPath; ?>dist/images/manifest.json">
  <link rel="mask-icon" href="<?php echo $myPath; ?>dist/images/safari-pinned-tab.svg" color="#1f2021">
  <meta name="theme-color" content="#1f2021">
  
  <title><?php echo $pageName . " " . $websiteName; ?></title>

  <link rel="canonical" href="http://blacklodge.me">
  <meta property="og:locale" content="en_GB">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $websiteName; ?>">
  <meta property="og:description" content="<?php echo $pageName . " " . $websiteName; ?>">
  <meta property="og:url" content="www">
  <meta property="og:site_name" content="<?php echo $websiteName; ?>">
  <meta property="og:image" content="http://blacklodge.me/dist/images/og.png" />
  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="<?php echo $pageName . " " . $websiteName; ?>">
  <meta name="twitter:title" content="<?php echo $websiteName; ?>">
</head>

<body>    
      <!--[if IE]>
        <div class="alert alert-warning">
          You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.        </div>
      <![endif]-->       
      