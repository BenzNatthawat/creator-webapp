<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header();
?>


	<?php 
		$path = 'phuketwebsite';
		if(strpos($_SERVER['REQUEST_URI'], $path)) :
			include('slider-marquee.php');
	?>

		<main id="primary" class="site-main phuketwebsite">
			<?php
					$pagename = get_page_by_title($path);
					$args = array(
						'p'         => $pagename->ID, // ID of a page, post, or custom type
						'post_type' => 'any'
					);
					$query = new WP_Query($args);
					if ( $query->have_posts() ) {
						while ($query->have_posts()) :
							$query->the_post();
				
							get_template_part( 'template-parts/content', 'page' );
				
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile; // End of the loop.
					}
			?>
		</main><!-- #main -->

	<?php 
		else :
	?>

	<main id="primary" class="site-main">
		<div class="container pt-3">
      <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
          <div class="box-content">

						<section class="error-404 not-found text-center m-5">
							<header class="page-header">
								<h1 class="page-title text-danger">
									404
								</h1>
								<h1 class="page-title">
									ไม่เจอหน้าที่กำลังค้นหา
								</h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p>
									ขออภัยเว็บรับเขียนเว็บไซต์ รับทำเว็บไซต์ ไม่สามารถไม่เจอหน้าที่กำลังค้นหา
								</p>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->

					</main><!-- #main -->
				</div>
			</div>

			<?php 
					endif;
			?>

		</div>
	</div>
<?php
get_footer();
