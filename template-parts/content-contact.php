<?php
/**
 * Template part for displaying page content in page.php
 * Template Name: Contact
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>
<?php get_header(); ?>
 
 <div id="primary" class="content-area">
     <main id="main" class="site-main" role="main">
        <div class="container">
          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();

              // Include the page content template.
              get_template_part( 'template-parts/content', 'page' );

              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) {
                  comments_template();
              }

              // End of the loop.
          endwhile;
          ?>
        </div>
     </main><!-- .site-main -->
  
     <?php 
        // get_sidebar( 'content-bottom' );
    ?>
  
 </div><!-- .content-area -->
  
 <?php get_footer(); ?>
 
