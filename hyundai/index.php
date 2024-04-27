<?php 
  $page='default';
  $nav='Home';
  $slideshow='yes';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/sample.php')?>
<?php require ($_SERVER['HY'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<?php $header_style='transparent'; require ($_SERVER['HY'].'inc/header.php')?>
<div class="rancak-container">





  <section title="Cover" class="slideshow-full slideshow-full-top">
    <?php require ($_SERVER['HY'].'section/slideshow-full.php')?>
  </section>
  
  
  <section title="Our Models" class="rancak-section section-our-models" style="margin-top:var(--size-5)">
    <span class="width-max">
      <?php require ($_SERVER['HY'].'section/our-models.php')?>
	</span>
  </section>



  <section title="Newest Car" class="rancak-section gridbox-a">
    <span class="width-max">
      <?php 
        $contentbox_array = array();
        $contentbox_array[]=array(
          'contentbox_title'=>'Creta Alpha',
          'contentbox_img'=>'sample/sample-8',
          'contentbox_label'=>'Say no to ordinary.',
          'contentbox_link'=>'',
        );
        $contentbox_array[]=array(
          'contentbox_title'=>'Ioniq 5',
          'contentbox_img'=>'sample/sample-7',
          'contentbox_label'=>'Powering Legacy through Innovation',
          'contentbox_link'=>'',
        );
        $contentbox_array[]=array(
          'contentbox_title'=>'Stargazer',
          'contentbox_img'=>'sample/sample-11',
          'contentbox_label'=>'The new star of the family.',
          'contentbox_link'=>'',
        );
        foreach($contentbox_array as $contentbox_list){
      ?>
	    <?php require ($_SERVER['HY'].'module/box-a.php')?>
	  <?php } ?>
	</span>
  </section>



  <section title="Cover" class="rancak-section">
    <span class="width-max">
	  rancak-section
	</span>
  </section>
  
  
  
  
  
</div>
<?php require ($_SERVER['HY'].'inc/footer.php')?>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>