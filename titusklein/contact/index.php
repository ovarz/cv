<?php 
  $menu='Contact';
  require ('../template/inc/base.php')
?>
<?php require ($_SERVER['TK'].'template/inc/meta.php')?>
<?php require ($_SERVER['TK'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="highlight-A section-dark content-center">
    <?php 
      $hero_image='hero-contact.jpg';
      $title='Contact';
      $desc='Let us help your innovative teams leverage design to commercialize innovations and drive revenue growth.';
      $link='';
      require ($_SERVER['TK'].'template/module/highlight-a.php')
    ?>
  </section>
  
  
  
  <section class="content-C space-top-2x content-center">
    <div class="site-container">
      <?php 
        $desc='We intimately understand how daunting the design process can be; we’ve worked with innovators of all types and have launched hundreds of products. Using our unique innovation-focused design framework, we provide your team with the creative support needed to avoid failure and ensure product success.';
        require ($_SERVER['TK'].'template/module/content-c.php')
      ?>
	</div>
  </section>
  
  
  
  <section class="content-D content-center">
    <div class="site-container">
      <?php 
        $content_D_array = array();
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <h2 class="content-D-title">Get Advice</h2>
            <div class="content-D-type-3">Discover Your Next Steps</div>
            <div class="content-D-type-4">Innovation starts with you. Get in touch and discover how we’ve helped companies like yours leverage design to fuel innovation that drives revenue growth.</div>
		  ',
        );
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <h2 class="content-D-title">Reach Out</h2>
            <div class="content-D-type-3">Step Up a Meeting</div>
            <div class="content-D-type-4">Jared@titusklein.com</div>
            <div class="content-D-action">
              <a title="" class="btn content-D-button" href="">Schedule a Call</a>
            </div>
		  ',
        );
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <h2 class="content-D-title">Locations</h2>
            <div class="content-D-type-3">Where We Work</div>
            <div class="content-D-type-2">San Fransisco</div>
            <div class="content-D-type-4">388 Market St.</div>
            <div class="content-D-type-4">San Francisco, CA.</div>
		  ',
        );
        foreach($content_D_array as $content_D_box){
      ?>
        <?php require ($_SERVER['TK'].'template/module/content-d.php') ?>
	  <?php } ?>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['TK'].'template/inc/footer.php')?>
<?php require ($_SERVER['TK'].'template/inc/base-bottom.php')?>