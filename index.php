<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>
  <div class='carousel-bg'>
    <div class="container">
      <?php echo do_shortcode('[twabc-carousel]'); ?>
    </div>
  </div>

  <div class="container marquee">
    <div class="row">
      <div class="col col-12">
        <svg class="svg-marquee" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <polygon points="0,0 0,50 100,50 50,0" style="fill:#cfa445" />
        </svg>
        <marquee behavior="scroll" direction="left">
          บริการออกแบบเว็บไซต์ เขียนเว็บไซต์ แอพพลิเคชั่น ทั้ง Android และ IOS ราคาเริ่มต้นสำหรับเว็บไซต์ที่ 4000 บาท พร้อมทั้งทำ SEO ฟรีโดเมนและเซิฟเวอร์
        </marquee>
      </div>
    </div>
  </div>

	<main id="primary" class="site-main">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-sm-12 col-md-8 col-lg-8">
          <div class="box-content">
            <?php
            if ( have_posts() ) :

              if ( is_home() && ! is_front_page() ) :
                ?>
                <header>
                  <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
                <?php
              endif;

              /* Start the Loop */
              while ( have_posts() ) :
                the_post();

                /*
                * Include the Post-Type-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                */
                get_template_part( 'template-parts/content', get_post_type() );

              endwhile;

              the_posts_navigation();

            else :

              get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

          </div>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
