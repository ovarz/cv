<?php 
  $page='dashboard';
  $nav='Customer Data';
  $opensub='Customer Data';
  $slideshow='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['FIERSA'].'inc/sample.php')?>
<?php require ($_SERVER['FIERSA'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<?php require ($_SERVER['FIERSA'].'inc/header.php')?>
<?php require ($_SERVER['FIERSA'].'inc/nav.php')?>
<div class="rancak-container">



    <section class="table-default">
	  <div class="table-default-head">
	    <div class="tdh-left">
		  <?php $search_placeholder='Search here.....'; $search_to='customer-data.php'; require ($_SERVER['FIERSA'].'module/search-box.php')?>
		</div>
	    <div class="tdh-right">
		  <button title="Export to Excel" class="btn tdh-button">
		    Export to Excel
		  </button>
		</div>
	  </div>
	  
	  <div class="table-default-box">
	    <div class="tdb-row tdb-head">
          <div class="tdb-column tdb-column-name">
            Name
          </div>
          <div class="tdb-column tdb-column-email">
            Email
          </div>
          <div class="tdb-column tdb-column-phone">
            Phone
          </div>
          <div class="tdb-column tdb-column-address">
            Address
          </div>
          <div class="tdb-column tdb-column-city">
            City
          </div>
          <div class="tdb-column tdb-column-action"></div>
		</div>
		
	    <?php for ($i=1; $i <= 10; $i++) { ?>
	    <div class="tdb-row">
          <div class="tdb-column tdb-column-name">
            Aufar Mahardi
          </div>
          <div class="tdb-column tdb-column-email">
            me@aufarmahardi.com
          </div>
          <div class="tdb-column tdb-column-phone">
            080000000000
          </div>
          <div class="tdb-column tdb-column-address">
            Jl. Tebet Timur Dalam VIIIH No.3, Tebet Timur
          </div>
          <div class="tdb-column tdb-column-city">
            South Jakarta
          </div>
          <div class="tdb-column tdb-column-action">
            <button title="Show Detail" class="tdb-ca-button tdb-ca-toggle">
              <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
            </button>
          </div>
		</div>
		<?php } ?>
	  </div>
	</section>



</div>
<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>