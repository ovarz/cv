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
  
  
  
  <section class="content-D space-bottom-2x content-center">
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
  
  
  
  <section class="maps img-frame thumb-loading">
    <iframe title="" class="lazyload" data-original="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.90405113899!2d-122.4005352236951!3d37.792288311150294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858063cf978997%3A0x55dc8f513115871e!2sTitus%20Klein!5e0!3m2!1sen!2sid!4v1763228796695!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
  
  
  
</div>
<?php require ($_SERVER['TK'].'template/inc/footer.php')?>
<?php require ($_SERVER['TK'].'template/inc/base-bottom.php')?>