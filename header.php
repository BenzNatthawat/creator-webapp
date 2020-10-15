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
  <meta name="keywords" content="รับออกแบบเว็บไซต์,เว็บโรงแรม,เว็บทัวร์,เว็บรถเช่า,เว็บห้องเช่า,รับทำเว็บภูเก็ต,ออกแบบเว็บภูเก็ต,รับเขียนเว็บโรงแรม,รับเขียนเว็บทัวร์,รับเขียนเว็บห้องเช่า" />
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
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <nav id='navbar' class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <?php 
        $logo = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $logo , 'full' );
        $image_url = $image[0];
      ?>
      <a class='logo-a' href="<?php echo home_url() ?>">
        <img src="<?php echo $image_url ?>" class="site-logo" alt="Logo" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
  