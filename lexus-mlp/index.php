<?php 
  $page='menteng';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div class="rancak-container">
  <div class="rancak-form">
    <img class="rancak-form-bg" src="img/<?php echo $page; ?>.jpg?1"/>
  </div>
  <div class="rancak-form-box">
    <div aria-label="Date" class="rancak-form-input" style="top:14.1vw; left:59.2vw;">10 September 2024</div>
	
    <div aria-label="SPK No." class="rancak-form-input" style="top:16.4vw; left:58.9vw;">xxxx-xxxx-xxxx-xxxx</div>
	
    <div aria-label="Cust. Single ID" class="rancak-form-input" style="top:18.9vw; left:58.9vw;">LEX-00000</div>
	
    <div aria-label="Customer Name" class="rancak-form-input" style="width:28vw; height:4vw; top:27.7vw; left:19.2vw;">
	  Aufar Mahardi
	</div>
	
    <div aria-label="Company Name" class="rancak-form-input" style="width:28vw; height:2vw; top:31.8vw; left:19.2vw;">
	  Neo Fusion Indonesia
	</div>
	
    <div aria-label="Request tax invoice" aria-choice="No" class="rancak-form-input rancak-form-yesno" style="top:34.3vw; left:19.2vw;">
	  <div aria-label="Yes" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="No" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	</div>
	
    <div aria-label="NPWP" class="rancak-form-input rancak-form-npwp" style="top:36.9vw; left:19.2vw;">
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
	  62000000000000
	</div>
	
    <div aria-label="Email Address" class="rancak-form-input" style="width:28vw; height:2vw; top:51.7vw; left:19.2vw;">
	  me@aufarmahardi.com
	</div>
	
    <div aria-label="Contact Person Name" class="rancak-form-input" style="width:28vw; height:2vw; top:53.8vw; left:19.2vw;">
	  Auzan Alkhawarizmi
	</div>
	
    <div aria-label="Contact Person phone" class="rancak-form-input" style="width:28vw; height:2vw; top:55.8vw; left:19.2vw;">
	  62000000000000
	</div>
	
    <div aria-label="STNK Name" class="rancak-form-input" style="width:28vw; height:4vw; top:28.8vw; left:64.7vw;">
	  Aufar Mahardi
	</div>
	
    <div aria-label="STNK Address" class="rancak-form-input" style="width:28vw; height:4vw; top:32.9vw; left:64.7vw;">
	  Jl. Tebet Timur Dalam VIII H No.3, RT.11/RW.6, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820
	</div>
	
    <div aria-label="Plate No Request" aria-choice="Yes" class="rancak-form-input rancak-form-yesno" style="top:39.5vw; left:64.7vw;">
	  <div aria-label="Yes" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="No" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	</div>
      <div aria-label="Plate No 1" class="rancak-form-input" style="width:28vw; height:2vw; top:43.3vw; left:65.8vw;">
        B 14 RIN
      </div>
      <div aria-label="Plate No 2" class="rancak-form-input" style="width:28vw; height:2vw; top:45.3vw; left:65.8vw;">
        D 1616 IT
      </div>
      <div aria-label="Plate No 3" class="rancak-form-input" style="width:28vw; height:2vw; top:47.5vw; left:65.8vw;">
        P 461 KK
      </div>
	
    <div aria-label="Note" class="rancak-form-input" style="width:28vw; height:5.5vw; top:51.6vw; left:64.7vw; line-height:1.8vw;">
	  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mi eget metus hendrerit ultrices. Fusce blandit, ex eu euismod placerat, quam diam rhoncus tortor, in pellentesque dui lectus ac augue. Sed vel metus urna. Cras quis ultrices erat.
	</div>
	
    <div aria-label="Car Type" class="rancak-form-input rancak-form-cartype" style="width:26vw; height:2vw; top:58.8vw; left:19.2vw;">
	  <div class="rancak-form-cartype-name">UX 250h F SPORT</div>
	  <div class="rancak-form-cartype-total">000</div>
	</div>
	
    <div aria-label="Exterior Color" class="rancak-form-input" style="width:28vw; height:2vw; top:60.85vw; left:19.2vw;">
	  Silver Metallic
	</div>
	
    <div aria-label="Interior Color" class="rancak-form-input" style="width:28vw; height:2vw; top:62.9vw; left:19.2vw;">
	  Black Carbon
	</div>
	
    <div aria-label="Lexus Ownership Package" class="rancak-form-input rancak-form-lop" style="top:65.9vw; left:18.8vw;">
	  <div aria-label="1" aria-check="yes" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="2" aria-check="yes" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="3" aria-check="no" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="4" aria-check="yes" class="rancak-form-checklist">
	    <?php require ($_SERVER['HY'].'img/check.svg')?>
	    <div class="rancak-form-lop-pgf">28%</div>
	  </div>
	</div>
	
    <div aria-label="Note" class="rancak-form-input" style="width:28vw; height:9.5vw; top:73.8vw; left:19.2vw; line-height:1.95vw;">
	  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mi eget metus hendrerit ultrices. Fusce blandit, ex eu euismod placerat, quam diam rhoncus tortor, in pellentesque dui lectus ac augue. Sed vel metus urna. Cras quis ultrices erat.
	</div>
	
    <div aria-label="Frame No." class="rancak-form-input" style="width:36vw; top:84.7vw; left:11.8vw;">xxxx-xxxx-xxxx-xxxx</div>
	
    <div aria-label="Engine No." class="rancak-form-input" style="width:36vw; top:87.4vw; left:11.8vw;">xxxx-xxxx-xxxx-xxxx</div>
	
    <div aria-label="Price Calculation" class="rancak-form-input" style="width:24.5vw; height:1.7vw; top:59.8vw; left:64.7vw; line-height:1.8vw;">IDR 000.000.000.000</div>
	
    <div aria-label="OTR Info" class="rancak-form-input rancak-form-otr" style="width:15vw; height:7.5vw; top:64.5vw; left:52vw; line-height:1.8vw;">Off The Road Price</div>
	
    <div aria-label="OTR Price" class="rancak-form-input" style="width:24.5vw; height:7.5vw; top:64.5vw; left:68vw; line-height:1.8vw;">IDR 000.000.000.000</div>
	
    <div aria-label="Special Appreciation" class="rancak-form-input" style="width:24.5vw; height:1.9vw; top:73.0vw; left:68vw; line-height:1.8vw;">IDR 000.000.000</div>
	
    <div aria-label="Total Price" class="rancak-form-input" style="width:24.5vw; height:1.9vw; top:75.9vw; left:68vw; line-height:1.8vw;">IDR 000.000.000.000</div>
	
    <div aria-label="Choose Payment" aria-choice="Lease" class="rancak-form-input rancak-form-choosepayment" style="top:78.8vw; left:68.9vw;">
	  <div aria-label="Cash" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="Lease" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?><span>Adira Finance</span></div>
	</div>
	
    <div aria-label="NRC/RC" aria-choice="opt1" class="rancak-form-input rancak-form-yesno" style="top:82.6vw; left:65.1vw;">
	  <div aria-label="opt1" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="opt2" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div class="rancak-form-checklist-note">Lorem Ipsum</div>
	</div>
	
    <div aria-label="NP/P" aria-choice="opt2" class="rancak-form-input rancak-form-yesno" style="top:84.9vw; left:65.1vw;">
	  <div aria-label="opt1" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="opt2" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div class="rancak-form-checklist-note">Lorem Ipsum</div>
	</div>
	
    <div aria-label="NU/U" aria-choice="opt1" class="rancak-form-input rancak-form-yesno" style="top:87.3vw; left:65.1vw;">
	  <div aria-label="opt1" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="opt2" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div class="rancak-form-checklist-note">Lorem Ipsum</div>
	</div>
	
    <div aria-label="Signature" class="rancak-form-signature rancak-form-signature-<?php echo $page; ?>" style="top:126.1vw; left:7.3vw;">
	  <div class="rancak-form-signature-box">
	    <img src="img/sample/signature-1.png"/>
	  </div>
	  <div class="rancak-form-signature-box">
	    <img src="img/sample/signature-2.png"/>
	  </div>
	  <div class="rancak-form-signature-box">
	    <img src="img/sample/signature-3.png"/>
	  </div>
	  <div class="rancak-form-signature-box">
	    <img src="img/sample/signature-4.png"/>
	  </div>
	</div>
  </div>
</div>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>