<?php 
  $page='dashboard';
  $nav='Outage Report';
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



    <section class="table-default">
	  <div class="table-default-head">
	    <div class="tdh-left">
		  <?php $search_placeholder='Search here.....'; $search_to='customer-data.php'; require ($_SERVER['FIERSA'].'module/search-box.php')?>
		</div>
	    <div class="tdh-right">
		  <div class="tdh-box">
            <button title="Export to PDF" class="btn tdh-button">
              Export to PDF
            </button>
		  </div>
		</div>
	  </div>
	  
	  <div class="table-default-box white-box">
	    <div class="tdb-row tdb-head">
          <div class="tdb-column tdb-column-ticketnumber">
            Ticket Number
          </div>
          <div class="tdb-column tdb-column-circuitid">
            Circuit ID
          </div>
          <div class="tdb-column tdb-column-customername">
            Customer Name
          </div>
          <div class="tdb-column tdb-column-endcustomername">
            End Customer Name
          </div>
          <div class="tdb-column tdb-column-ticketcategory">
            Ticket Category
          </div>
          <div class="tdb-column tdb-column-relatedproduct">
            Related Product
          </div>
          <div class="tdb-column tdb-column-action"></div>
		</div>
		
	    <?php for ($i=1; $i <= 10; $i++) { ?>
          <div class="tdb-row">
            <div class="tdb-column tdb-column-ticketnumber">
              XXXX XXXX XXXX
            </div>
            <div class="tdb-column tdb-column-circuitid">
              CRT2311017603
            </div>
            <div class="tdb-column tdb-column-customername">
              <?php echo $random_username[array_rand($random_username)]; ?>
            </div>
            <div class="tdb-column tdb-column-endcustomername">
              BCA ITC Mangga Dua
            </div>
            <div class="tdb-column tdb-column-ticketcategory">
              Cek Status
            </div>
            <div class="tdb-column tdb-column-relatedproduct">
              NET-200M
            </div>
            <div class="tdb-column tdb-column-action">
              <button title="Show Detail" aria-popup="XXX004" class="tdb-ca-button tdb-ca-toggle open-sticky">
                <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
              </button>
            </div>
          </div>	
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['FIERSA'].'module/table-default-foot.php')?>
	</section>



</div>



<div class="rancak-popup rancak-popup-right" aria-overlay="XXX004">
  <div class="rancak-popup-overlay"></div>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box custom-scrollbar">
	  <div class="rancak-popup-content">
	    <div class="rpc-doc">
		  <div class="rpc-doc-img rancak-lazy thumb-loading">
		    <img class="lazyload" data-original="img/sample/dokumen.jpg" />
		  </div>
		</div>
	    <ul class="rpc-detail-data">
		  <li>
		    <div class="rpc-detail-label">Ticket Number</div>
		    <div class="rpc-detail-info">XXXX XXXX XXXX</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Circuit ID</div>
		    <div class="rpc-detail-info">CRT2311017603</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Customer Name</div>
		    <div class="rpc-detail-info"><?php echo $random_username[array_rand($random_username)]; ?></div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">End Customer Name</div>
		    <div class="rpc-detail-info">BCA ITC Mangga Dua</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Ticket Category</div>
		    <div class="rpc-detail-info">Cek Status</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Related Product</div>
		    <div class="rpc-detail-info">NET-200M</div>
		  </li>
		</ul>
	  </div>
      <button title="Close Popup" class="rancak-popup-close content_center">
        <?php require ($_SERVER['FIERSA'].'img/icon/close.svg')?>
      </button>
	</div>
  </div>
</div>




<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>