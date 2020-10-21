<?php
/**
 * Template part for displaying page content in page.php
 * Template Name: Contact
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>
<?php get_header(); ?>
 
  <?php include get_template_directory().'../slider-marquee.php';  ?>

 <div id="primary" class="content-area">
     <main id="main" class="site-contact" role="main">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-12 col-lg-12">
                    <div class="box-content">

                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                        // Include the page content template.
                        get_template_part( 'template-parts/content-page-contact', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }

                        // End of the loop.
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
     </main><!-- .site-main -->
    
 </div><!-- .content-area -->
  
 <?php get_footer(); ?>
