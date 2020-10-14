<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<div class="col col-12 col-sm-12 col-md-4 col-lg-4 sidebar">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sidebar.png" class="site-logo" alt="Logo" />
  <div class="box-content">
    <aside id="secondary" class="widget-area">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->
  </div>
</div>
