<?php 
  $page='dashboard';
  $nav='List User';
  $opensub='';
  $slideshow='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['FIERSA'].'inc/sample.php')?>
<?php require ($_SERVER['FIERSA'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<?php require ($_SERVER['FIERSA'].'inc/header.php')?>
<?php require ($_SERVER['FIERSA'].'inc/nav-admin.php')?>
<div class="rancak-container">



    <section class="input-data">
	  <div class="input-data-box white-box">
	    <ul class="idb-list idb-form">
		  <li class="idb-row">
		    <div class="idb-label">New Password</div>
			<div class="idb-info">
              <div class="formbase formbase-password">
                <input type="password" class="formbase-field" placeholder="Insert New Password">
                <button title="Toggle Password" class="formbase-toggle show-pass content_center">
                  <?php require ($_SERVER['FIERSA'].'img/icon/pass-hide.svg')?>
                  <?php require ($_SERVER['FIERSA'].'img/icon/pass-show.svg')?>
                </button>
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Re-type New Password</div>
			<div class="idb-info">
              <div class="formbase formbase-password">
                <input type="password" class="formbase-field" placeholder="Re-type New Password">
                <button title="Toggle Password" class="formbase-toggle show-pass content_center">
                  <?php require ($_SERVER['FIERSA'].'img/icon/pass-hide.svg')?>
                  <?php require ($_SERVER['FIERSA'].'img/icon/pass-show.svg')?>
                </button>
              </div>
			</div>
		  </li>
		</ul>
	  </div>
	  <div class="input-data-action">
	    <button title="Submit" class="btn ida-submit" onclick="location.href='list-user.php';">Submit</button>
	    <button title="Reset" class="btn ida-reset" onclick="location.href='list-user-pass.php';">Reset</button>
	  </div>
	</section>



</div>




<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>