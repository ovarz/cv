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
			<div class="rancak-popup rancak-popup-small rancak-popup-small-2" aria-overlay="filter-end-customer-data">
			  <div class="rancak-popup-overlay"></div>
			  <div class="rancak-popup-container content_center">
				<div class="rancak-popup-box custom-scrollbar">
				  <div class="rancak-popup-content popup-filter">
                    <div class="popup-filter-row formbase">
                      <select class="formbase-field formbase-field-select">
                        <option value="0">Select End Customer Name</option>
                        <option value="1">Customer Name 1</option>
                        <option value="1">Customer Name 2</option>
                        <option value="1">Customer Name 3</option>
                        <option value="1">Customer Name 4</option>
                        <option value="1">Customer Name 5</option>
                      </select>
                      <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                    </div>
                    <div class="popup-filter-row formbase">
                      <select class="formbase-field formbase-field-select">
                        <option value="0">Select Current Status Ticket</option>
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
                        <option value="0">Sort By</option>
                        <option value="1">Ascending</option>
                        <option value="2">Descending</option>
                      </select>
                      <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                    </div>
					<button title="Filter" class="btn filter-submit" onclick="location.href='ticket-status.php';">Filter</button>
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
          <div class="tdb-column tdb-column-submitdate">
            Submit Date
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
            <div class="tdb-column tdb-column-submitdate">
              30 Sep 2024
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




<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>