<?php 
  $lang='id';
  $menu='Career';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['IF'].'template/inc/sample.php')?>
<?php require ($_SERVER['IF'].'template/inc/meta.php')?>
<?php require ($_SERVER['IF'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="home-slide">
    <div class="slide-image img-frame thumb-loading">
      <?php 
        $cover_label_id='Karir'; 
		$cover_sublabel_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.'; 
        $cover_label_en='Career'; 
		$cover_sublabel_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
        $cover_gateway='no';
        require ($_SERVER['IF'].'template/module/full-cover.php')
      ?>
    </div>
  </section>
  
  
  
  <section class="career-display content-center">
    <div class="site-container">
	  <?php 
	    $title_id='';
		$subtitle_id='Lowongan pekerjaan Interfood hanya melalui web interfood.co.id. Tidak meminta data KTP dll. Tidak memungut biaya.';
	    $title_en=''; 
		$subtitle_en='Official Interfood jobs are available only through the website interfood.co.id. No ID card details are required, and no fees are charged.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  <div class="career-filter">
	    <div class="form-box form-search career-search">
		  <input class="form-field text-id" name="" type="text" placeholder="Cari Lowongan.....">
		  <input class="form-field text-en" name="" type="text" placeholder="Search Job.....">
		  <div class="form-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/search.svg')?></div>
		</div>
		
        <?php 
          $filter_array = array();
          $filter_array[] = array(
            'filter_option' => 'type',
            'filter_lang' => [
              [
                'filter_lang_name' => 'id',
                'filter_list' => [
                  ['filter_name' => '-- Semua Tipe --'],
                  ['filter_name' => 'Penuh Waktu'],
                  ['filter_name' => 'Paruh Waktu'],
                  ['filter_name' => 'Magang'],
                ],
              ],
              [
                'filter_lang_name' => 'en',
                'filter_list' => [
                  ['filter_name' => '-- All Type --'],
                  ['filter_name' => 'Full Time'],
                  ['filter_name' => 'Part Time'],
                  ['filter_name' => 'Internship'],
                ],
              ],
            ],
          );
          $filter_array[] = array(
            'filter_option' => 'location',
            'filter_lang' => [
              [
                'filter_lang_name' => 'id',
                'filter_list' => [
                  ['filter_name' => '-- Semua Lokasi --'],
                  ['filter_name' => 'Jakarta'],
                  ['filter_name' => 'Batam'],
                  ['filter_name' => 'Banten'],
                ],
              ],
              [
                'filter_lang_name' => 'en',
                'filter_list' => [
                  ['filter_name' => '-- All Location --'],
                  ['filter_name' => 'Jakarta'],
                  ['filter_name' => 'Batam'],
                  ['filter_name' => 'Banten'],
                ],
              ],
            ],
          );
          $filter_array[] = array(
            'filter_option' => 'status',
            'filter_lang' => [
              [
                'filter_lang_name' => 'id',
                'filter_list' => [
                  ['filter_name' => '-- Semua Status --'],
                  ['filter_name' => 'Dibuka'],
                  ['filter_name' => 'Ditutup'],
                ],
              ],
              [
                'filter_lang_name' => 'en',
                'filter_list' => [
                  ['filter_name' => '-- All Status --'],
                  ['filter_name' => 'Open'],
                  ['filter_name' => 'Close'],
                ],
              ],
            ],
          );
          foreach($filter_array as $filter_row => $filter_box){
        ?>
	      <div class="form-box form-select career-option career-option-<?php echo($filter_box['filter_option'])?>">
		    <?php foreach ($filter_box['filter_lang'] as $lang_box) { ?>
              <select class="form-field text-<?php echo($lang_box['filter_lang_name'])?>">
                <?php foreach ($lang_box['filter_list'] as $option) { ?>
                  <option value="<?php echo($option['filter_name'])?>"><?php echo($option['filter_name'])?></option>
                <?php } ?>
              </select>
			<?php } ?>
            <div class="form-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/down.svg')?></div>
		  </div>
		<?php } ?>
		<!--
	    <div class="career-submit">
		  <button title="Submit" class="btn career-submit-button">Submit</button>
		</div>
		-->
	  </div>
	  <div class="career-list">
	    <?php for ($i=1; $i<=10; $i++){ ?>
          <?php $career_status='open'; require ('template/module/career-box.php') ?>
		<?php } ?>
	    <?php for ($i=1; $i<=5; $i++){ ?>
          <?php $career_status='close'; require ('template/module/career-box.php') ?>
		<?php } ?>
	  </div>
	  
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/career-popup.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>