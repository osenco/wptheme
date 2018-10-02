<?php
/**
 * @package WPTHEME
 * @subpackage Header Template
 * @author Osen Concepts < hi@osen.co.ke >
 * @since 0.1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Android  -->
    <meta name="theme-color" content="<?php echo get_theme_mod( 'osen_manifest_color', '#ffffff' ); ?>">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- iOS -->
    <meta name="apple-mobile-web-app-title" content="<?php echo get_theme_mod( 'osen_manifest_name', get_bloginfo('name') ); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- Windows  -->
    <meta name="msapplication-navbutton-color" content="red">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/mstile-150x150.png">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/browserconfig.xml">

    <!-- Pinned Sites  -->
    <meta name="application-name" content="<?php bloginfo( 'name' ); ?>">
    <meta name="msapplication-tooltip" content="<?php echo get_theme_mod( 'osen_manifest_description', get_bloginfo('description') ); ?>">
    <meta name="msapplication-starturl" content="/">

    <!-- Tap highlighting  -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- UC Mobile Browser  -->
    <meta name="full-screen" content="yes">
    <meta name="browsermode" content="application">

    <!-- Disable night mode for this page  -->
    <meta name="nightmode" content="enable/disable">

    <!-- Layout mode -->
    <meta name="layoutmode" content="fitscreen/standard">

    <!-- imagemode - show image even in text only mode  -->
    <meta name="imagemode" content="force">

    <!-- Orientation  -->
    <meta name="screen-orientation" content="<?php echo get_theme_mod( 'osen_manifest_orientation', 'portrait' ); ?>">

    <!-- Main Link Tags  -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">

    <!-- iOS  -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
    <!-- <link href="touch-icon-ipad.png" rel="apple-touch-icon" sizes="76x76">
    <link href="touch-icon-iphone-retina.png" rel="apple-touch-icon" sizes="120x120">
    <link href="touch-icon-ipad-retina.png" rel="apple-touch-icon" sizes="152x152"> -->

    <!-- Startup Image  -->
<!--   <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)"> -->

    <!-- Pinned Tab  -->
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">

    <!-- <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest"> -->

    <!-- Android  -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/android-chrome-192x192" rel="icon" sizes="192x192">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/android-chrome-384x384" rel="icon" sizes="384x384">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <?php wp_enqueue_script("jquery"); ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>