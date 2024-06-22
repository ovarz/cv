<?php 
  $page='menteng';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/opt2-meta.php')?>
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
		<div class="mainform-data" style="height:4vw">
		  Aufar Mahardi
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Company Name</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  OtoGear
		</div>
	  </div>
	
	  <div class="mainform-row mainform-choice">
	    <div class="mainform-label">Request Tax Invoice</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <div aria-choice="" class="mainform-choice-box">
		    <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			<div class="mcb-label">Yes</div>
		  </div>
		  <div aria-choice="this" class="mainform-choice-box">
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
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Correspondent Address</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:6vw">
		  Jl. Tebet Timur Dalam VIII H No.3, RT.11/RW.6, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Phone No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  622100000000
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Fax No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  622100000000
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Mobile No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  6280000000000
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Email</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  me@aufarmahardi.com
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Contact Person Name</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  me@aufarmahardi.com
		</div>
	  </div>
	<!--
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Contact Person Phone No</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  6280000000000
		</div>
	  </div>
	-->  
	</div>
	<div class="mainform-side mainform-right">
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">STNK Name</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:4vw">
		  Aufar Mahardi
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">STNK Address</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:6vw">
		  Jl. Tebet Timur Dalam VIII H No.3, RT.11/RW.6, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820
		</div>
	  </div>
	
	  <div class="mainform-row mainform-choice">
	    <div class="mainform-label">Plate No. Request</div>
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
		  <div class="mainform-pno">
		    <div class="mainform-pno-label">*Plate Number Option:</div>
			<div class="mainform-pno-list">
			  <div class="mainform-pno-row">
			    <div class="mainform-pno-number">1.</div>
			    <div class="mainform-pno-data">B 14 RIN</div>
			  </div>
			  <div class="mainform-pno-row">
			    <div class="mainform-pno-number">2.</div>
			    <div class="mainform-pno-data">D 1616 IT</div>
			  </div>
			  <div class="mainform-pno-row">
			    <div class="mainform-pno-number">3.</div>
			    <div class="mainform-pno-data">P 461 KK</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">*Subject to Confirmation</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Notes</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:6vw">
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mi eget metus hendrerit ultrices. Fusce blandit, ex eu euismod placerat, quam diam rhoncus tortor, in pellentesque dui lectus ac augue. Sed vel metus urna. Cras quis ultrices erat.
		</div>
	  </div>
	  
	</div>
	<div class="mainform-side mainform-left">
	
	  <div class="mainform-row mainform-lexustype">
	    <div class="mainform-label">Lexus Type</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <div class="mainform-lexustype-content">UX 250h F Sport</div>
		  <div class="mainform-lexustype-label">Qty</div>
		  <div class="mainform-lexustype-content">800</div>
		  <div class="mainform-lexustype-label">Unit</div>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Exterior Color</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  Black
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Interior Color</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  Leather
		</div>
	  </div>
	
	  <div class="mainform-row mainform-lop">
	    <div class="mainform-label">Lexus Ownership Package</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <div aria-choice="check" class="mainform-lop-row">
		    <div class="mainform-lop-check"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
		    <div class="mainform-lop-label">1. Lexus 5 Years Free Service & Maintenance</div>
		  </div>
		  <div aria-choice="" class="mainform-lop-row">
		    <div class="mainform-lop-check"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
		    <div class="mainform-lop-label">2. Lexus 3 Years Warranty (Exc. Tire & Battery)</div>
		  </div>
		  <div aria-choice="check" class="mainform-lop-row">
		    <div class="mainform-lop-check"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
		    <div class="mainform-lop-label">3. Premium Autodetailing</div>
		  </div>
		  <div aria-choice="check" class="mainform-lop-row">
		    <div class="mainform-lop-check"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
		    <div class="mainform-lop-label">4. Premium Glass Film</div>
		  </div>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Notes</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:10vw">
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mi eget metus hendrerit ultrices. Fusce blandit, ex eu euismod placerat, quam diam rhoncus tortor, in pellentesque dui lectus ac augue. Sed vel metus urna. Cras quis ultrices erat.
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Frame No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  XXXX-XXXX-XXXX-XXXX
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Engine No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  XXXX-XXXX-XXXX-XXXX
		</div>
	  </div>
	
	</div>
	<div class="mainform-side mainform-right">
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Price Calculation</div>
		<div class="mainform-separator">:</div>
	  </div>
	
	  <div class="mainform-row mainform-fbl">
	    <div class="mainform-label">*Filled by Lexus</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <div class="mainform-fbl-row">
		    <div aria-choice="" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">NRC</div>
		    </div>
		    <div aria-choice="this" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">RC</div>
		    </div>
			<div class="mainform-fbl-note">
			  <div class="mainform-fbl-note-label">Notes:</div>
			  <div class="mainform-fbl-note-data">Lorem Ipsum</div>
			</div>
		  </div>
		  <div class="mainform-fbl-row">
		    <div aria-choice="this" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">NP</div>
		    </div>
		    <div aria-choice="" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">P</div>
		    </div>
			<div class="mainform-fbl-note">
			  <div class="mainform-fbl-note-label">Notes:</div>
			  <div class="mainform-fbl-note-data">Lorem Ipsum</div>
			</div>
		  </div>
		  <div class="mainform-fbl-row">
		    <div aria-choice="" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">NU</div>
		    </div>
		    <div aria-choice="this" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">U</div>
		    </div>
			<div class="mainform-fbl-note">
			  <div class="mainform-fbl-note-label">Notes:</div>
			  <div class="mainform-fbl-note-data">Lorem Ipsum</div>
			</div>
		  </div>
		</div>
	  </div>
	
	</div>
  </div>
  
  
  
</div>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>