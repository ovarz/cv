<?php 
  $page='menteng';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/meta-2.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div class="rancak-container">



  <div class="top-default">
    <div class="top-default-logo">
	  <?php require ($_SERVER['HY'].'img/logo.svg')?>
	</div>
	<div class="top-default-title"><?php echo $page; ?> gallery</div>
  </div>
  
  
  
  <div class="header">
    <div class="header-left">
	  <b>PT. ASTRA INTERNATIONAL Tbk</b>
	  <b class="header-left-dealer">lexus <?php echo $page; ?> gallery</b>
	  <p>Proklamasi No.35, Central Jakarta - 10320</p>
	  <p>Tel: (021) 390-1325, Mon-Fri : 8.30 am - 4.30 pm, Sat : 08.00 am - 02.00 pm</p>
	</div>
	<div class="header-right">
	  <div class="header-right-form">
	    <div class="hrf-label">Date</div>
	    <div class="hrf-separator">:</div>
	    <div class="input-result hrf-box hrf-box-outline">30 September 2024</div>
	  </div>
	  <div class="header-right-form">
	    <div class="hrf-label">SPK No.</div>
	    <div class="hrf-separator">:</div>
	    <div class="input-result hrf-box hrf-box-solid">XXXX-XXXX-XXXX-XXXX</div>
	  </div>
	  <div class="header-right-form">
	    <div class="hrf-label">Cust.Single ID</div>
	    <div class="hrf-separator">:</div>
	    <div class="input-result hrf-box hrf-box-solid">LXID-00000</div>
	  </div>
	</div>
  </div>
  
  
  
  <div class="mainform">
    <div class="mainform-head"><b>Lexus Order Form</b></div>
	<div class="mainform-side mainform-left">
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Customer Name</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  Aufar <br/> Mahardi
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Company Name</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  OtoGear
		</div>
	  </div>
	
	  <div class="mainform-row mainform-choice">
	    <div class="mainform-label">Request Tax Invoice</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <div aria-choice="this" class="mainform-choice-box">
		    <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			<div class="mcb-label">Yes</div>
		  </div>
		  <div aria-choice="" class="mainform-choice-box">
		    <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			<div class="mcb-label">No</div>
		  </div>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-npwp">
	    <div class="mainform-label">NPWP</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <?php for ($i=1; $i <= 15 ; $i++) { ?>
            <div class="mainform-choice-box">
              <div class="mcb-frame">0</div>
            </div>
		  <?php } ?>
		</div>
	  </div>
	  
	</div>
	<div class="mainform-side mainform-right">
	  right
	</div>
  </div>
  
  
  
</div>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>