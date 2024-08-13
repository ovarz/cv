<header>
  <div class="header-container">
    <div class="header-left">
	  <div class="header-box header-title content_center">
		<h2 class="header-title-wording"><?php echo $nav;?></h2>
	  </div>
	</div>
	
	<div class="header-right">
	  <button title="Notification" class="header-box header-notif content_center">
		<div class="header-notif-box header-notif-show content_center">
		  <div class="header-notif-circle hide"></div>
		  <?php require ($_SERVER['FIERSA'].'img/icon/notif.svg')?>
		</div>
	  </button>
	  <button title="User" class="header-box header-user content_center" onclick="location.href='login.php';">
		<div class="header-user-box">
		  <div class="hub-image">
		    <div class="hub-image-frame rancak-lazy thumb-loading">
			  <img class="lazyload" src="img/sample/user-<?php echo rand(1,5);?>.jpg" />
			</div>
		  </div>
		  <div class="hub-info">
		    <div class="hub-username"><?php echo $random_username[array_rand($random_username)]; ?></div>
		    <div class="hub-title">Administrator</div>
		  </div>
		</div>
	  </button>
	</div>
  </div>
</header>