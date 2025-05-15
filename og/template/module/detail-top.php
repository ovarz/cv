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
	    <a title="<?php echo $random_author[array_rand($random_author)];?>" class="detail-info-link" href="author.php">
		  <?php echo $random_author[array_rand($random_author)];?>
		</a>
	  </li>
	</ul>
  </div>
</div>