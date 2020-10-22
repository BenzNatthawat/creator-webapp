<main id="primary" class="site-main footer-tag">
  <div class="container">
    <div class="row">
      <div class="col col-12 col-sm-12 col-md-12 col-lg-12 p-0">
        <div class="box-content">
        <?php 
          $color = array("purple", "peach", "aqua", "blue", "warm-flame", "night-fade", "young-passion", "rainy-ashville", "sunny-morning", "lady-lips", "dusty-grass", "tempting-azure", "amy-crisp", "mean-fruit");
          $text = array("รับทำเว็บภูเก็ต", "ทำเว็บภูเก็ต", "ทำเว็บโรงแรมภูเก็ต", "รับออกแบบเว็บ", "บริการออกแบบเว็บไซต์", "ทำเว็บโรงแรม", "ทำเว็บทัวร์", "ทำเว็บท่องเที่ยว", "ทำเว็บ");
          foreach ($text as $value) {
            echo "<a class='btn chip chip-md ".$color[array_rand($color)]."-gradient white-text example z-depth-2 mr-0' href='/phuketwebsite/".$value."'>".$value."</a>";
          }
        ?>  
      </div>
    </div>
  </div>
</main>