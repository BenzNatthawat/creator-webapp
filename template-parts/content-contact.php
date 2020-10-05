<?php
/**
 * Template part for displaying page content in page.php
 * Template Name: Contact
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>
<?php get_header(); ?>

<main id="primary" class="site-main">
  <div class="container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </header><!-- .entry-header -->

      <?php creator_webapp_post_thumbnail(); ?>

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

    <div id="map"></div>

  </div>
</main>
<?php get_footer(); ?>

<script>
$(document).ready(function () {
  function initMap() {
    const myLatLng = { lat: -25.363, lng: 131.044 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: myLatLng,
    });
    new google.maps.Marker({
      position: myLatLng,
      map,
      title: "Hello World!",
    });
  }
})
</script>