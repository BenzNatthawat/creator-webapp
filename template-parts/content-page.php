<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>
<div class="container">
  <div class="row">
    <div class="col col-12 col-sm-12 col-md-8 col-lg-8">
      <div class="box-content">
        <div class="container">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <?php the_title( '<h1 class="entry-title d-flex justify-content-center">', '</h1>' ); ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
              <?php
              the_content();

              wp_link_pages(
                array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'creator-webapp' ),
                  'after'  => '</div>',
                )
              );
              ?>
            </div><!-- .entry-content -->

            <?php if ( get_edit_post_link() ) : ?>
              <footer class="entry-footer">
                <?php
                edit_post_link(
                  sprintf(
                    wp_kses(
                      /* translators: %s: Name of current post. Only visible to screen readers */
                      __( 'Edit <span class="screen-reader-text">%s</span>', 'creator-webapp' ),
                      array(
                        'span' => array(
                          'class' => array(),
                        ),
                      )
                    ),
                    wp_kses_post( get_the_title() )
                  ),
                  '<span class="edit-link">',
                  '</span>'
                );
                ?>
              </footer><!-- .entry-footer -->
            <?php endif; ?>
          </article><!-- #post-<?php the_ID(); ?> -->
        </div>

            <?php 
            // creator_webapp_post_thumbnail();
            ?>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
