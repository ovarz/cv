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
		    <div class="idb-label">Username</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Username" value="ovarz">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Name</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Name" value="Aufar Mahardi">
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
                <input type="text" class="formbase-field" placeholder="Insert Email Label" value="Email Kantor">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Email Address</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Email Address" value="me@aufarmahardi.com">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Phone Label</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Phone Label" value="Telpon Kantor">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Phone Number</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="text" class="formbase-field" placeholder="Insert Phone Number" value="080000000000">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Address</div>
			<div class="idb-info">
			  <textarea class="formbase-field" placeholder="Insert Address.....">Jl. Tebet Timur Dalam XIII A No.8, Tebet Timur</textarea>
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
                <input type="text" class="formbase-field" placeholder="Insert Postal Code" value="11280">
              </div>
			</div>
		  </li>
		</ul>
	  </div>
	  <div class="input-data-action">
	    <button title="Submit" class="btn ida-submit" onclick="location.href='list-user.php';">Submit</button>
	    <button title="Reset" class="btn ida-reset" onclick="location.href='list-user-edit.php';">Reset</button>
	  </div>
	</section>



</div>




<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>