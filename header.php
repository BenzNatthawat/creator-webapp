<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php wp_head(); ?>
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="google-site-verification" content="PaCh2NRIN-oweaDbGykXvmRm9x_vb1tDJIPowhlduA8" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="รับเขียนเว็บโรงแรมเว็บทัวร์เว็บรถเช่าเว็บห้องเช่าเว็บการตลาดเว็บบริษัทใช้งานง่าย สำหรับเพิ่มการเข้าถึงข้อมูลลูกค้าและเพิ่มยอดการขาย" />
  <meta name="keywords" content="เว็บโรงแรม,เว็บทัวร์,เว็บรถเช่า,เว็บห้องเช่า,รับทำเว็บภูเก็ต,ออกแบบเว็บภูเก็ต,รับเขียนเว็บโรงแรม,รับเขียนเว็บทัวร์,รับเขียนเว็บห้องเช่า" />
  <meta http-equiv="content-language" content="th" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="revisit-after" content="7 days" />
  <meta name="robots" content="index, follow" />

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-logo//manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIwzALxUPNbatRBj3Xi1Uhp0fFzwWNBkE&callback=initMap&libraries=&v=weekly"
  defer
></script>
    

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <nav id='navbar' class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php 
        $logo = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $logo , 'full' );
        $image_url = $image[0];
      ?>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class='logo-a' href="<?php echo home_url() ?>">
          <img width='100' src="<?php echo $image_url ?>" class="site-logo" alt="Logo" />
        </a>
        <?php
          wp_nav_menu(
            array(
              'theme_location'  =>  'menu-1',
              'menu_class'      =>  'nav',
              'container'       =>  'ul',
            )
          );
        ?>
      </div>
    </div>
  </nav>
  