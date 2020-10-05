<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>

<div class='footer-infomation'>
  <div class="container">
    <div class="row">
      <?php 
        $logo = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $logo , 'full' );
        $image_url = $image[0];
      ?>
      <img width='100' height='100' src="<?php echo $image_url ?>" class="site-logo" alt="Logo" />
      <div class="col-sm">
        เกี่ยวกับเรา
        cretor-webapp.com รับทําเว็บไซต์ บริการออกแบบเว็บไซต์ และรับทำการตลาดออนไลน์ต่างๆ เช่น รับทำ SEO หรือ ลงโฆษณาใน Social Media ต่างๆ เช่น Facebook Ads หรือ Google Ads โดยทางเรามีประสบการณ์ในวงการไอทีและออนไลน์มามากกว่า 20 ปี เราพร้อมเสนอบริการจัดทำเว็บไซต์แก่ท่านที่สวยงาม รองรับการใช้งานทุกอุปกรณ์ (Responsive) และให้คำปรึกษาด้าน SEO รวมทั้งการประชาสัมพันธ์เว็บไซต์ของท่านให้เป็นที่รู้จักทั่วโลก โดยมีค่าใช้จ่ายในงบประมาณที่ท่านพึงพอใจ
        รับเขียนโปรแกรมออกแบบเว็บภูเก็ตและทั่วประเทศไทย ออกแบบเว็บทันสมัย ใช้งานง่าย เพิ่มยอดการตลาดและการเข้าถึง
      </div>
      <div class="col-sm">
        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx  
      </div>
      <div class="col-sm">
        cretor-webapp.com

        47/2 ถนน เทพกระษัตรี ตำบลไม้ขาว 
        อำเภอถลาง จังหวัดภูเก็ต 83110

        Phone โทรศัพท์ : 0874746612
        E-mail อีเมล์ : cretor-webapp@gamil.com

        Line: cretor-webapp
        Facebook: CretorWebapp
      </div>
    </div>
  </div>
</div>

<footer id="colophon" class="site-footer">
  <div class="site-info">
    <div class="container">
      © Copyright <?php echo date("Y"); ?> by <a href='https://creator-webapp.com'>creator-webapp.com</a>
    </div>
  </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>
        
</body>
</html>
