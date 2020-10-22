<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header();
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

          </div>
        </div>

      </div>
    </div>
	</main><!-- #main -->
<?php
get_footer();
