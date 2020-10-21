<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

?>
xxxxxx
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

<div class="col col-6 col-sm-6 col-lg-6">
    <form id="form-message" onSubmit="return false" attr-data="<?php echo get_template_directory_uri() ?>">
        <div class="form-group">
            <label for="name">ชื่อ</label>
            <input name='name' type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="ชื่อ">
        </div>
        <div class="form-group">
            <label for="mail">อีเมล</label>
            <input name='mail' type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="อีเมล">
        </div>
        <div class="form-group">
            <label for="tel">เบอร์โทรศัพท์</label>
            <input name='tel' type="text" class="form-control" id="tel" placeholder="เบอร์โทรศัพท์">
        </div>
        <div class="form-group">
            <label for="message">ข้อความ</label>
            <textarea name='message' class="form-control" id="message" rows="3" placeholder="ข้อความ"></textarea>
        </div>
        <div class="formpart">
            <span class="errormessage text-danger">ส่งอีเมลติดต่อผิดพลาด</span>
            <span class="successmessage text-success">ส่งอีเมลติดต่อสำเร็จ</span>
            <span class="sendingmessage">กำลังส่งอีเมลติดต่อ</span>
        </div>
        <button  id="submit-message" type="submit" class="btn btn-primary">ส่งข้อความ</button>
    </form>
</div>

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