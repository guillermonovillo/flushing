<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Exchange
 * @since Twenty Fifteen 1.0
 */
define("DIR",get_template_directory_uri());
define("IDIOMA",pll_current_language());

?><!doctype html>
<html class="no-js" lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flushing Commons</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="<?php echo DIR; ?>/css/libraries.min.css">
    <link rel="stylesheet" href="<?php echo DIR; ?>/css/app.min.css">
    <script src="<?php echo DIR; ?>/js/vendor/modernizr.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <!-- FavIcons -->
<!-- IOS -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo DIR; ?>/img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo DIR; ?>/img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo DIR; ?>/img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo DIR; ?>/img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo DIR; ?>/img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo DIR; ?>/img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo DIR; ?>/img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo DIR; ?>/img/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo DIR; ?>/img/favicon/apple-touch-icon-180x180.png">

<!-- Icons -->
<link rel="icon" type="image/png" href="<?php echo DIR; ?>/img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo DIR; ?>/img/favicon/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php echo DIR; ?>/img/favicon/favicon-96x96.png" sizes="96x96">

<link rel="icon" type="image/png" href="<?php echo DIR; ?>/img/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo DIR; ?>/img/favicon/favicon-16x16.png" sizes="16x16">
<meta name="msapplication-TileColor" content="#a88851">
<meta name="msapplication-TileImage" content="<?php echo DIR; ?>/img/favicon/mstile-144x144.png">
<meta name="theme-color" content="#a88851">

<!-- IE -->
<link rel="shortcut icon" href="<?php echo DIR; ?>/favicon.ico?v=update" type="image/x-icon">
<link rel="icon" href="<?php echo DIR; ?>/favicon.ico?v=update"/>
<link rel="icon" href="<?php echo DIR; ?>/favicon.png?v=update" type="image/png" />
<link rel="icon" href="<?php echo DIR; ?>/favicon.ico?v=update" type="image/vnd.microsoft.icon" />

</head>