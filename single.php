<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header();
?>

	<?php include get_template_directory().'./slider-marquee.php';  ?>

	<main id="primary" class="site-main">
		<div class="container">
      <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12 p-0">
          <div class="box-content">
						<?php
            while ( have_posts() ) :
              
              the_post();
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
