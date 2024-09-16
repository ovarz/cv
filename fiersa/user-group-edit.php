<?php 
  $page='dashboard';
  $nav='User Group';
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
		    <div class="idb-label">Group Name</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Group Name">
              </div>
			</div>
		  </li>
		</ul>
	  </div>
	  <div class="input-data-action">
	    <button title="Submit" class="btn ida-submit" onclick="location.href='user-group.php';">Submit</button>
	    <button title="Reset" class="btn ida-reset" onclick="location.href='user-group-edit.php';">Reset</button>
	  </div>
	</section>



</div>




<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>