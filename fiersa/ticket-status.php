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



    <section class="table-default">
	  <div class="table-default-head">
	    <div class="tdh-left">
		  <?php $search_placeholder='Search here.....'; $search_to='customer-data.php'; require ($_SERVER['FIERSA'].'module/search-box.php')?>
		</div>
	    <div class="tdh-right">
		  <div class="tdh-box">
            <button title="Filter" aria-popup="filter-end-customer-data" class="btn tdh-button open-sticky">
              Filter
            </button>
			<div class="rancak-popup rancak-popup-small" aria-overlay="filter-end-customer-data">
			  <div class="rancak-popup-overlay"></div>
			  <div class="rancak-popup-container content_center">
				<div class="rancak-popup-box custom-scrollbar">
				  <div class="rancak-popup-content popup-filter">
                    <div class="popup-filter-row formbase">
                      <select class="formbase-field formbase-field-select">
                        <option value="0">Select POP ID</option>
                        <option value="1">POP ID 1</option>
                        <option value="1">POP ID 2</option>
                        <option value="1">POP ID 3</option>
                        <option value="1">POP ID 4</option>
                        <option value="1">POP ID 5</option>
                      </select>
                      <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                    </div>
                    <div class="popup-filter-row formbase">
                      <select class="formbase-field formbase-field-select">
                        <option value="0">Select ISP</option>
                        <option value="1">ISP 1</option>
                        <option value="1">ISP 2</option>
                        <option value="1">ISP 3</option>
                        <option value="1">ISP 4</option>
                        <option value="1">ISP 5</option>
                      </select>
                      <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                    </div>
                    <div class="popup-filter-row formbase">
                      <select class="formbase-field formbase-field-select">
                        <option value="0">Select Service</option>
                        <option value="1">Service 1</option>
                        <option value="1">Service 2</option>
                        <option value="1">Service 3</option>
                        <option value="1">Service 4</option>
                        <option value="1">Service 5</option>
                      </select>
                      <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                    </div>
                    <div class="popup-filter-row formbase">
                      <select class="formbase-field formbase-field-select">
                        <option value="0">Select Status</option>
                        <option value="1">Status 1</option>
                        <option value="1">Status 2</option>
                        <option value="1">Status 3</option>
                        <option value="1">Status 4</option>
                        <option value="1">Status 5</option>
                      </select>
                      <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                    </div>
                    <div class="popup-filter-row formbase">
                      <select class="formbase-field formbase-field-select">
                        <option value="0">Select City</option>
                        <option value="1">City 1</option>
                        <option value="1">City 2</option>
                        <option value="1">City 3</option>
                        <option value="1">City 4</option>
                        <option value="1">City 5</option>
                      </select>
                      <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                    </div>
					<button title="Filter" class="btn filter-submit" onclick="location.href='end-customer-data.php';">Filter</button>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  
	  <div class="table-default-box white-box">
	    <div class="tdb-row tdb-head">
          <div class="tdb-column tdb-column-ticketnumber">
            Ticket Number
          </div>
          <div class="tdb-column tdb-column-name">
            Customer Name
          </div>
          <div class="tdb-column tdb-column-name">
            End Customer
          </div>
          <div class="tdb-column tdb-column-tickettype">
            Ticket Type
          </div>
          <div class="tdb-column tdb-column-ticketcate">
            Ticket Category
          </div>
          <div class="tdb-column tdb-column-progress">
            Progress
          </div>
          <div class="tdb-column tdb-column-action"></div>
		</div>
		
	    <?php for ($i=1; $i <= 10; $i++) { ?>
          <div class="tdb-row">
            <div class="tdb-column tdb-column-ticketnumber">
              XXXXX XXXXX
            </div>
            <div class="tdb-column tdb-column-name">
              PT Cyberindo Aditama
            </div>
            <div class="tdb-column tdb-column-name">
              PT Des Teknologi Informasi
            </div>
            <div class="tdb-column tdb-column-tickettype">
              Complaint
            </div>
            <div class="tdb-column tdb-column-ticketcate">
              Down
            </div>
            <div class="tdb-column tdb-column-progress">
              Closed
            </div>
            <div class="tdb-column tdb-column-action">
              <a title="Edit Data" class="tdb-ca-button" href="ticket-status-detail.php">
                <?php require ($_SERVER['FIERSA'].'img/icon/right.svg')?>
              </a>
            </div>
          </div>	
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['FIERSA'].'module/table-default-foot.php')?>
	</section>



</div>



<div class="rancak-popup rancak-popup-right" aria-overlay="XXX003">
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