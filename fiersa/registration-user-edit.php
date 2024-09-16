<?php 
  $page='dashboard';
  $nav='Registration User';
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
		    <div class="idb-label">Username</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Username">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Name</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Name">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Group</div>
			<div class="idb-info">
              <div class="formbase">
                <select class="formbase-field formbase-field-select">
                  <option value="1">User</option>
                  <option value="2">Admin</option>
                </select>
                <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Email Label</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Email Label">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Email Address</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Email Address">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Phone Label</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Phone Label">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Phone Number</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Phone Number">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Address</div>
			<div class="idb-info">
			  <textarea class="formbase-field" placeholder="Insert Address....."></textarea>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">City</div>
			<div class="idb-info">
              <div class="formbase">
                <select class="formbase-field formbase-field-select">
                  <option value="1">Central Jakarta</option>
                  <option value="2">South Jakarta</option>
                </select>
                <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Postal Code</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Postal Code">
              </div>
			</div>
		  </li>
		</ul>
	  </div>
	  <div class="input-data-action">
	    <button title="Submit" class="btn ida-submit" onclick="location.href='registration-user.php';">Submit</button>
	    <button title="Reset" class="btn ida-reset" onclick="location.href='registration-user-edit.php';">Reset</button>
	  </div>
	</section>



</div>




<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>