<div class="detail-box detail-top">
  <h1 class="detail-title"><?php echo $random_title[array_rand($random_title)];?></h1>
  <h2 class="detail-desc"><?php echo $random_desc[array_rand($random_desc)];?></h2>
  <div class="detail-info">
    <ul class="detail-info-list">
	  <li class="detail-info-label">Kategori</li>
	  <li class="detail-info-separator">:</li>
	  <li class="detail-info-data">
	    <a title="<?php echo $menu; ?>" class="detail-info-link" href="subdomain.php"><?php echo $menu; ?></a>
	  </li>
	</ul>
    <ul class="detail-info-list">
	  <li class="detail-info-label">Tanggal</li>
	  <li class="detail-info-separator">:</li>
	  <li class="detail-info-data">
	    Minggu, 00 September 0000
	  </li>
	</ul>
    <ul class="detail-info-list">
	  <li class="detail-info-label">Penulis</li>
	  <li class="detail-info-separator">:</li>
	  <li class="detail-info-data">
	    <div class="detail-info-link">
		  <?php echo $random_author[array_rand($random_author)];?>
		</div>
	  </li>
	</ul>
    <ul class="detail-info-list">
	  <li class="detail-info-label">Kata Kunci</li>
	  <li class="detail-info-separator">:</li>
	  <li class="detail-info-data detail-info-topic">
	    <?php for ($i=1; $i<=5; $i++){ ?>
	    <a title="<?php echo $random_topic[array_rand($random_topic)];?>" class="detail-info-link" href="topic.php">
		  <?php echo $random_topic[array_rand($random_topic)];?>
		</a>
		<?php } ?>
	  </li>
	</ul>
  </div>
</div>