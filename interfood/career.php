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
	    <div class="form-box form-select career-option">
		  <select class="form-field text-id">
            <option value="1">-- Semua Tipe --</option>
            <option value="2">Penuh Waktu</option>
            <option value="3">Paruh Waktu</option>
            <option value="4">Magang</option>
          </select>
		  <select class="form-field text-en">
            <option value="1">-- All Type --</option>
            <option value="2">Full Time</option>
            <option value="3">Part Time</option>
            <option value="4">Internship</option>
          </select>
		  <div class="form-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/down.svg')?></div>
		</div>
	    <div class="form-box form-select career-option">
		  <select class="form-field text-id">
            <option value="1">-- Semua Lokasi --</option>
            <option value="2">Jakarta</option>
            <option value="3">Batam</option>
            <option value="4">Banten</option>
          </select>
		  <select class="form-field text-en">
            <option value="1">-- All Location --</option>
            <option value="2">Jakarta</option>
            <option value="3">Batam</option>
            <option value="4">Banten</option>
          </select>
		  <div class="form-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/down.svg')?></div>
		</div>
	    <div class="form-box form-select career-option">
		  <select class="form-field text-id">
            <option value="1">-- Semua Status --</option>
            <option value="2">Open</option>
            <option value="3">Close</option>
          </select>
		  <select class="form-field text-en">
            <option value="1">-- All Status --</option>
            <option value="2">Open</option>
            <option value="3">Close</option>
          </select>
		  <div class="form-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/down.svg')?></div>
		</div>
	    <div class="career-submit">
		  <button title="Submit" class="btn career-submit-button">Submit</button>
		</div>
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