<?php 
  $menu='About';
  require ('../template/inc/base.php')
?>
<?php require ($_SERVER['TK'].'template/inc/meta.php')?>
<?php require ($_SERVER['TK'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="highlight-A section-dark content-center">
    <?php 
      $hero_image='hero-about.jpg';
      $title='Impact by Design';
      $desc='Learn how innovative teams like yours leverage design to increase revenue, position products, and grow market share.';
      $link='';
      require ($_SERVER['TK'].'template/module/highlight-a.php')
    ?>
  </section>
  
  
  
  <section class="content-C space-top-2x content-center">
    <div class="site-container">
      <?php 
        $desc='Most innovation and marketing teams in high tech companies struggle with leveraging design to sell their products. Having worked with innovators for over 15 years, we understand how daunting the marketing and design process can be. In this time, Titus Klein developed a unique framework that helps these companies leverage branding and design to ensure the success of their IoT, AI and tech products.';
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
            <h2 class="content-D-title">Your Guide</h2>
            <div class="content-D-type-3">Helping Your Innovation</div>
		  ',
        );
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <div class="content-D-type-4">Innovation is not a one-off effort, but a continuous process. Using our innovation-focused design framework, we’ve helped innovation and marketing teams unleash the potential of their technological advances by bridging the gap between R&D, product, and marketing teams to create revolutionary new products</div>
		  ',
        );
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <div class="content-D-type-4">Titus Klein focuses on turning your teams ideas and concepts into viable commercial products and revolutionary ecosystems that drive revenue and serve as a foundation for growth. Working with startups, we’ve helped innovation and marketing teams like yours launch over 200+ products in the last 15 years.</div>
		  ',
        );
        foreach($content_D_array as $content_D_box){
      ?>
        <?php require ($_SERVER['TK'].'template/module/content-d.php') ?>
	  <?php } ?>
	</div>
  </section>
  
  
  
  <section class="content-D next-step content-center">
    <div class="site-container">
      <?php 
        $content_D_array = array();
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <h2 class="content-D-title">Next Step</h2>
            <div class="content-D-type-3">How to Partner with Us</div>
            <div class="content-D-action">
              <a title="" class="btn content-D-button" href="">Lets Talk</a>
            </div>
		  ',
        );
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <div class="content-D-type-2">30 Min Meeting</div>
            <div class="content-D-type-4">Discover how TK can help your team optimize design and marketing to launch effective campaigns.</div>
		  ',
        );
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <div class="content-D-type-2">Dedicated Creative Team</div>
            <div class="content-D-type-4">Do your teams have immediate needs? TK can assemble a team to help accomplish a single project.</div>
		  ',
        );
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <div class="content-D-type-2">Innovation Blueprint</div>
            <div class="content-D-type-4">TK will audit your specific structure and build a creative blueprint for your team and all initiatives.</div>
		  ',
        );
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <div class="content-D-type-2">Design Project</div>
            <div class="content-D-type-4">Discover how engaging a specialized innovation design/marketing team can accelerate the success of your launch and drive revenue.</div>
		  ',
        );
        foreach($content_D_array as $content_D_box){
      ?>
        <?php require ($_SERVER['TK'].'template/module/content-d.php') ?>
	  <?php } ?>
	</div>
  </section>
  
  
  
  <section class="content-D space-bottom-2x content-center">
    <div class="site-container">
      <?php 
        $content_D_array = array();
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <h2 class="content-D-title">Location</h2>
            <div class="content-D-type-3">Where We Work</div>
		  ',
        );
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <div class="content-D-type-2">San Francisco</div>
            <div class="content-D-type-4">388 Market St.</div>
            <div class="content-D-type-4">San Francisco, CA.</div>
		  ',
        );
        $content_D_array[]=array(
          'content_D_info'=>
		  '
            <div class="content-D-type-2">Santa Cruz</div>
            <div class="content-D-type-4">1260 41st. Ave Suite i</div>
            <div class="content-D-type-4">Capitola, CA 95010</div>
		  ',
        );
        foreach($content_D_array as $content_D_box){
      ?>
        <?php require ($_SERVER['TK'].'template/module/content-d.php') ?>
	  <?php } ?>
	</div>
  </section>
  
  
  
  <section class="highlight-B section-dark">
    <?php 
      $hero_image='hero-office.jpeg';
      require ($_SERVER['TK'].'template/module/highlight-b.php')
    ?>
  </section>
  
  
  
</div>
<?php require ($_SERVER['TK'].'template/inc/footer.php')?>
<?php require ($_SERVER['TK'].'template/inc/base-bottom.php')?>