<?php 
  $menu='Home';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['TK'].'template/inc/meta.php')?>
<?php require ($_SERVER['TK'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="highlight-A section-dark content-center">
    <?php 
      $hero_image='hero-home.jpg';
      $title='Drive Revenue';
      $desc='Discover how marketing and innovation teams leverage design to turn disruptive technologies into real products that generate revenue and earn consumer interest.';
      $link='';
      require ($_SERVER['TK'].'template/module/highlight-a.php')
    ?>
  </section>
  
  
  
  <section class="content-A content-center">
    <div class="site-container">
	  <?php 
	    $back_image='home-image-1a.jpg';
	    $front_image='home-image-1b.jpg';
	    $intro='Innovation by Design';
	    $title='Drive Revenue';
	    $desc='Discover how marketing and innovation teams leverage design to turn disruptive technologies into real products that generate revenue and earn consumer interest.';
	    require ($_SERVER['TK'].'template/module/content-a.php')
	  ?>
	</div>
  </section>
  
  
  
  <section class="content-A content-A-invert content-center">
    <div class="site-container">
	  <?php 
	    $back_image='home-image-2a.jpg';
	    $front_image='home-image-2b.jpg';
	    $intro='Innovation by Design';
	    $title='Ensure Success';
	    $desc='Give your team the best chance of success by pairing your innovative products with beautiful, engaging design.';
	    require ($_SERVER['TK'].'template/module/content-a.php')
	  ?>
	</div>
  </section>
  
  
  
  <section class="content-A content-center">
    <div class="site-container">
	  <?php 
	    $back_image='home-image-3a.jpg';
	    $front_image='home-image-3b.jpg';
	    $intro='Innovation by Design';
	    $title='Captivate Customers';
	    $desc='Distinguish your brands with targeted design and marketing that translates your vision into compelling products.';
	    require ($_SERVER['TK'].'template/module/content-a.php')
	  ?>
	</div>
  </section>
  
  
  
  <section class="content-B content-center">
    <div class="site-container content-center">
	  <?php 
	    $intro='Innovation by Design';
	    $title='Set Up a 15 Min Meeting';
	    $desc='Set up a call with one of our creative directors to discover how you can leverage design to enhance the launch of your products.';
	    $button_link='';
	    $button_label='Schedule a Call';
	    require ($_SERVER['TK'].'template/module/content-b.php')
	  ?>
	</div>
  </section>
  
  
  
  <section class="product-A content-center">
    <div class="site-container">
	  <div class="section-title">View Our Works</div>
	  <div class="product-A-list">
        <?php 
          $product_array = array();
          $product_array[]=array(
            'product_image'=>'product-1.jpg', 
			'product_name'=>'Ryde', 
			'product_link'=>'',
          );
          $product_array[]=array(
            'product_image'=>'product-2.jpg', 
			'product_name'=>'ADA', 
			'product_link'=>'',
          );
          $product_array[]=array(
            'product_image'=>'product-3.jpg', 
			'product_name'=>'Espy', 
			'product_link'=>'',
          );
          $product_array[]=array(
            'product_image'=>'product-4.jpg', 
			'product_name'=>'D.A.S.H', 
			'product_link'=>'',
          );
          foreach($product_array as $product_list){
        ?>
		  <?php require ($_SERVER['TK'].'template/module/product-a.php')?>
	    <?php } ?>
	  </div>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['TK'].'template/inc/footer.php')?>
<?php require ($_SERVER['TK'].'template/inc/base-bottom.php')?>