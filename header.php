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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
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
  