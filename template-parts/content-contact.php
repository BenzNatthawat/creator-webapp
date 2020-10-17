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
                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }

                        // End of the loop.
                    endwhile;
                    ?>

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
                </div>
            </div>
        </div>
     </main><!-- .site-main -->
    
 </div><!-- .content-area -->
  
 <?php get_footer(); ?>
