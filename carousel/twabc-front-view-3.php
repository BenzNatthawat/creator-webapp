<?php
  if( count( $images ) > 1 ){ 
  
  if($atts['showindicator'] != 'false') { ?>
    <ol class="carousel-indicators">
    <?php 
    $ind = 0;
    foreach ($images as $key => $image) { 
    $ind++;
    ?>
      <li data-target="#carousel_<?php echo $id; ?>" data-slide-to="<?php echo $key; ?>" <?php echo $key == 0 ? 'class="active"' : ''; ?>><?php if($atts['showindicator'] === 'numbered') {echo $ind;} ?></li>
    <?php } ?>
    </ol>
  <?php }
}?>
<div class="carousel-inner">
  <?php
  // Carousel Content
  foreach ($images as $key => $image) {
    ?>

    <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>" id="carousel-item-<?php echo $image['post_id']; ?>">
      <?php
      // Regular behaviour - display image with link around it
      // The Caption div
      // Caption
        echo '<img src="'.$image['img_src'].'" alt="'.$image['title'].'" />';
        if(strlen($image['content']) > 0){
          echo '<div class="carousel-caption">';
          echo $image['content'];
          echo '</div>';
        }	
      ?>
    </div>
  <?php } ?>
</div>
<?php // Previous / Next controls
  if( count( $images ) > 1 ){
    if($atts['showcontrols'] === 'true') { ?>
      <a class="carousel-control-prev" href="#carousel_<?php echo $id; ?>" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel_<?php echo $id; ?>" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  <?php }
} ?>