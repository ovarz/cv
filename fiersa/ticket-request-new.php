<?php 
  $page='dashboard';
  $nav='Ticket Request';
  $opensub='';
  $slideshow='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['FIERSA'].'inc/sample.php')?>
<?php require ($_SERVER['FIERSA'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<?php require ($_SERVER['FIERSA'].'inc/header.php')?>
<?php require ($_SERVER['FIERSA'].'inc/nav.php')?>
<div class="rancak-container">



    <section class="input-data">
	  <div class="input-data-box white-box">
	    <ul class="idb-list idb-form">
		  <li class="idb-row">
		    <div class="idb-label">Customer Detail</div>
			<div class="idb-info idb-multiple">
              <div class="formbase">
			    <?php require ($_SERVER['FIERSA'].'img/icon/user.svg')?>
                <input type="text" class="formbase-field" placeholder="Contact Person Name">
              </div>
              <div class="formbase">
			    <?php require ($_SERVER['FIERSA'].'img/icon/phone.svg')?>
                <input type="text" class="formbase-field" placeholder="Phone Number">
              </div>
              <div class="formbase">
			    <?php require ($_SERVER['FIERSA'].'img/icon/email.svg')?>
                <input type="text" class="formbase-field" placeholder="Email Address">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Request Ticket Number</div>
			<div class="idb-info">
			  <div class="formbase">
			    <input type="text" class="formbase-field" value="XXXX-XXXX-XXXX" disabled>
			  </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Type of Ticket</div>
			<div class="idb-info">
              <div class="formbase">
                <select class="formbase-field formbase-field-select">
                  <option value="1">Request</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  <option value="4">Option 4</option>
                  <option value="5">Option 5</option>
                </select>
                <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Upload Image</div>
			<div class="idb-info">
              <div class="formbase">
                <input type="file" class="formbase-field" placeholder="Choose Image">
              </div>
			</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Notes</div>
			<div class="idb-info">
			  <textarea class="formbase-field" placeholder="Insert notes....."></textarea>
			</div>
		  </li>
		</ul>
	  </div>
	  <div class="input-data-action">
	    <button title="Submit" class="btn ida-submit" onclick="location.href='ticket-request.php';">Submit</button>
	    <button title="Reset" class="btn ida-reset" onclick="location.href='ticket-request-new.php';">Reset</button>
	  </div>
	</section>



</div>




<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>