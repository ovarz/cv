<?php 
  $page='dashboard';
  $nav='Ticket Complaint';
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
            <a title="Filter" class="btn tdh-button" href="ticket-complaint-new.php">
              New Ticket
            </a>
		  </div>
		</div>
	  </div>
	  
	  <div class="table-default-box white-box">
	    <div class="tdb-row tdb-head">
          <div class="tdb-column tdb-column-ticketnumber">
            Ticket Number
          </div>
          <div class="tdb-column tdb-column-ticketcategory">
            Ticket Category
          </div>
          <div class="tdb-column tdb-column-name">
            End Customer Name
          </div>
          <div class="tdb-column tdb-column-status">
            Status
          </div>
          <div class="tdb-column tdb-column-action"></div>
          <div class="tdb-column tdb-column-action"></div>
		</div>
		
	    <?php for ($i=1; $i <= 10; $i++) { ?>
          <div class="tdb-row">
            <div class="tdb-column tdb-column-ticketnumber">
              XXXXX XXXXX
            </div>
            <div class="tdb-column tdb-column-ticketcategory">
              Request
            </div>
            <div class="tdb-column tdb-column-name">
              Adira Finance Cirebon
            </div>
            <div class="tdb-column tdb-column-status">
              Closed
            </div>
            <div class="tdb-column tdb-column-action">
              <a title="Edit Data" class="tdb-ca-button" href="ticket-complaint-new.php">
                <?php require ($_SERVER['FIERSA'].'img/icon/edit.svg')?>
              </a>
            </div>
            <div class="tdb-column tdb-column-action">
              <button title="Show Detail" aria-popup="XXX006" class="tdb-ca-button tdb-ca-toggle open-sticky">
                <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
              </button>
            </div>
          </div>	
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['FIERSA'].'module/table-default-foot.php')?>
	</section>



</div>



<div class="rancak-popup rancak-popup-right" aria-overlay="XXX006">
  <div class="rancak-popup-overlay"></div>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box custom-scrollbar">
	  <div class="rancak-popup-content">
	    <ul class="rpc-detail-data">
		  <li>
		    <div class="rpc-detail-label">Ticket Number</div>
		    <div class="rpc-detail-info">XXXXX XXXXX</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Ticket Type</div>
		    <div class="rpc-detail-info">Request</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Status</div>
		    <div class="rpc-detail-info">Closed</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Customer Type</div>
		    <div class="rpc-detail-info">LMS</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Customer Name</div>
		    <div class="rpc-detail-info">Adira Finance Cirebon</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Email</div>
		    <div class="rpc-detail-info">me@aufarmahardi.com</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Phone</div>
		    <div class="rpc-detail-info">080000000000</div>
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