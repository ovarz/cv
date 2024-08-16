<?php 
  $page='dashboard';
  $nav='Ticket Status';
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



    <section class="ticket-status">
	  <div class="input-data-box white-box">
	    <h2 class="ticket-status-title">Ticket Information</h2>
	    <ul class="idb-list idb-detail">
		  <li class="idb-row">
		    <div class="idb-label">Request Ticket Number</div>
			<div class="idb-info">XXXXX-XXXXX-XXXXX-XXXXX</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Ticket Type</div>
			<div class="idb-info">Complaint</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Ticket Category</div>
			<div class="idb-info">Down</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Ticket Symptom</div>
			<div class="idb-info">Down</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Customer Name</div>
			<div class="idb-info">PT Cyberindo Aditama</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">End Customer</div>
			<div class="idb-info">PT Des Teknologi Informasi</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Region</div>
			<div class="idb-info">Central</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Sub Region</div>
			<div class="idb-info">Central Java</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Related Product</div>
			<div class="idb-info">NET-002G</div>
		  </li>
		  <li class="idb-row">
		    <div class="idb-label">Current PIC</div>
			<div class="idb-info">Sri Maya Sari Nainggolan</div>
		  </li>
		</ul>
	  </div>
	  
	  <div class="ticket-status-track white-box">
	    <h2 class="ticket-status-title">Tracking Progress</h2>
	    <ul class="tst-list">
		
		  <li class="tst-step">
		    <div class="tst-left">
			  <div class="tst-line content_center">
			    <div class="tst-line-inside tst-done"></div>
			  </div>
			  <div class="tst-circle">
			    <div class="tst-circle-inside tst-done"></div>
			  </div>
			  <div class="tst-line content_center">
			    <div class="tst-line-inside tst-done"></div>
			  </div>
			</div>
		    <div class="tst-right">
			  <div class="tst-info">
			    <div class="tst-label tst-done">Open</div>
			    <!-- <div class="tst-date">00 September 0000 - 00:00</div> -->
			  </div>
			</div>
		  </li>
		
		  <li class="tst-step">
		    <div class="tst-left">
			  <div class="tst-line content_center">
			    <div class="tst-icon tst-done content_center">
				  <?php require ($_SERVER['FIERSA'].'img/icon/tracking.svg')?>
				</div>
			    <div class="tst-line-inside tst-done"></div>
			  </div>
			  <div class="tst-circle">
			    <div class="tst-circle-inside tst-done"></div>
			  </div>
			  <div class="tst-line content_center">
			    <div class="tst-line-inside tst-done"></div>
			  </div>
			</div>
		    <div class="tst-right">
			  <div class="tst-info">
			    <div class="tst-label tst-done">Escalate</div>
			  </div>
			</div>
		  </li>
		
		  <li class="tst-step">
		    <div class="tst-left">
			  <div class="tst-line content_center">
			    <div class="tst-icon tst-done content_center">
				  <?php require ($_SERVER['FIERSA'].'img/icon/tracking.svg')?>
				</div>
			    <div class="tst-line-inside tst-done"></div>
			  </div>
			  <div class="tst-circle">
			    <div class="tst-circle-inside tst-onprogress"></div>
			  </div>
			  <div class="tst-line content_center">
			    <div class="tst-line-inside tst-notstarted"></div>
			  </div>
			</div>
		    <div class="tst-right">
			  <div class="tst-info">
			    <div class="tst-label tst-onprogress">Onprogress</div>
			  </div>
			</div>
		  </li>
		
		  <li class="tst-step">
		    <div class="tst-left">
			  <div class="tst-line content_center">
			    <div class="tst-icon tst-notstarted content_center">
				  <?php require ($_SERVER['FIERSA'].'img/icon/tracking.svg')?>
				</div>
			    <div class="tst-line-inside tst-notstarted"></div>
			  </div>
			  <div class="tst-circle">
			    <div class="tst-circle-inside tst-notstarted"></div>
			  </div>
			  <div class="tst-line content_center">
			    <div class="tst-line-inside tst-notstarted"></div>
			  </div>
			</div>
		    <div class="tst-right">
			  <div class="tst-info">
			    <div class="tst-label tst-notstarted">Hold</div>
			  </div>
			</div>
		  </li>
		
		  <li class="tst-step">
		    <div class="tst-left">
			  <div class="tst-line content_center">
			    <div class="tst-icon tst-notstarted content_center">
				  <?php require ($_SERVER['FIERSA'].'img/icon/tracking.svg')?>
				</div>
			    <div class="tst-line-inside tst-notstarted"></div>
			  </div>
			  <div class="tst-circle">
			    <div class="tst-circle-inside tst-notstarted"></div>
			  </div>
			  <div class="tst-line content_center">
			    <div class="tst-line-inside tst-notstarted"></div>
			  </div>
			</div>
		    <div class="tst-right">
			  <div class="tst-info">
			    <div class="tst-label tst-notstarted">Resolved</div>
			  </div>
			</div>
		  </li>
		
		  <li class="tst-step">
		    <div class="tst-left">
			  <div class="tst-line content_center">
			    <div class="tst-icon tst-notstarted content_center">
				  <?php require ($_SERVER['FIERSA'].'img/icon/tracking.svg')?>
				</div>
			    <div class="tst-line-inside tst-notstarted"></div>
			  </div>
			  <div class="tst-circle">
			    <div class="tst-circle-inside tst-notstarted"></div>
			  </div>
			  <div class="tst-line content_center">
			    <div class="tst-line-inside tst-notstarted"></div>
			  </div>
			</div>
		    <div class="tst-right">
			  <div class="tst-info">
			    <div class="tst-label tst-notstarted">Closed</div>
			  </div>
			</div>
		  </li>
		  
		</ul>
	  </div>
	</section>



</div>




<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>