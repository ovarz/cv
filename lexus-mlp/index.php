<?php 
  $page='astra';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div class="rancak-container">
  <div class="rancak-form">
    <img class="rancak-form-bg" src="img/<?php echo $page; ?>.jpg"/>
  </div>
  <div class="rancak-form-box">
    <div aria-label="Date" class="rancak-form-input" style="top:14.1vw; left:59.2vw;">10 September 2024</div>
	
    <div aria-label="SPK No." class="rancak-form-input" style="top:16.4vw; left:58.9vw;">xxxx-xxxx-xxxx-xxxx</div>
	
    <div aria-label="Cust. Single ID" class="rancak-form-input" style="top:18.8vw; left:58.9vw;">LEX-00000</div>
	
    <div aria-label="Customer Name" class="rancak-form-input" style="width:28vw; height:4vw; top:27.7vw; left:19.2vw;">
	  Aufar Mahardi
	</div>
	
    <div aria-label="Company Name" class="rancak-form-input" style="width:28vw; height:2vw; top:31.8vw; left:19.2vw;">
	  Neo Fusion Indonesia
	</div>
	
    <div aria-label="Request tax invoice" aria-choice="No" class="rancak-form-input rancak-form-yesno" style="top:34.3vw; left:19.2vw;">
	  <div aria-label="Yes" class="rancak-form-checklist" style="left:59.2vw;"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="No" class="rancak-form-checklist" style="left:79.2vw;"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	</div>
	
    <div aria-label="NPWP" class="rancak-form-input rancak-form-npwp" style="top:36.9vw; left:19.3vw;">
	  <?php for ($i=1; $i <= 15 ; $i++) { ?>
	    <div class="rancak-form-npwp-box">0</div>
	  <?php } ?>
	</div>
	
    <div aria-label="Correspondent Address" class="rancak-form-input" style="width:28vw; height:6vw; top:39.4vw; left:19.2vw;">
	  Jl. Tebet Timur Dalam VIII H No.3, RT.11/RW.6, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820
	</div>
	
    <div aria-label="Phone Number" class="rancak-form-input rancak-form-phone" style="width:28vw; height:2vw; top:45.5vw; left:19.2vw;">
	  <div class="rancak-form-phone-areacode">0000</div>
	  <div class="rancak-form-phone-number">00000000</div>
	</div>
	
    <div aria-label="Fax Number" class="rancak-form-input rancak-form-phone" style="width:28vw; height:2vw; top:47.5vw; left:19.2vw;">
	  <div class="rancak-form-phone-areacode">0000</div>
	  <div class="rancak-form-phone-number">00000000</div>
	</div>
	
    <div aria-label="Mobile Number" class="rancak-form-input" style="width:28vw; height:2vw; top:49.6vw; left:19.2vw;">
	  62 000000000000
	</div>
	
    <div aria-label="Email Address" class="rancak-form-input" style="width:28vw; height:2vw; top:51.7vw; left:19.2vw;">
	  me@aufarmahardi.com
	</div>
	
    <div aria-label="Contact Person Name" class="rancak-form-input" style="width:28vw; height:2vw; top:53.8vw; left:19.2vw;">
	  Auzan Alkhawarizmi
	</div>
	
    <div aria-label="Contact Person phone" class="rancak-form-input" style="width:28vw; height:2vw; top:55.8vw; left:19.2vw;">
	  62 000000000000
	</div>
  </div>
</div>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>