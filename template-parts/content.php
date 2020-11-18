<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <?php
        if ( is_singular() ) :
          the_title( '<h1 class="entry-title">', '</h1>' );
        else :
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
      ?>

    </header><!-- .entry-header -->

    <?php creator_webapp_post_thumbnail(); ?>

    <div class="entry-content">
      <?php
      the_content(
        sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'creator-webapp' ),
            array(
              'span' => array(
                'class' => array(),
              ),
            )
          ),
          wp_kses_post( get_the_title() )
        )
      );

      wp_link_pages(
        array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'creator-webapp' ),
          'after'  => '</div>',
        )
      );
      ?>
    </div><!-- .entry-content -->

    <div class="row">
      <?php 
      /**
       * Setup query to show the ‘services' post type with ‘8' posts.
       * Output the title with an excerpt.
       */
      $args = array(  
        'post_type'       => 'portfolio',
        'pagination'      => true,
        'posts_per_page'  => '9',
        'orderby'         => 'date',
        'paged'           => $paged,
        'cat'             => $category_id,
      );
      $querys = new WP_Query( $args ); 
      while($querys->have_posts()) : $querys->the_post();
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
      ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="card">
            <img class="card-img-top" src="<?php echo $url ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo get_the_title() ?></h5>
              <p class="card-text"><?php echo $post->post_content ?></p>
              <a href="<?php echo get_permalink() ?>" class="btn btn-primary">ชมเว็บไซต์</a>
            </div>
          </div>
        </div>
      <?php
      endwhile;
      ?>
    </div>

    <!-- <footer class="entry-footer"> -->
      <?php 
        // creator_webapp_entry_footer();
      ?>
    <!-- </footer> -->
  </article><!-- #post-<?php the_ID(); ?> -->