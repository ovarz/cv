<?php 
  $page='dashboard';
  $nav='Performance Report';
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
            <button title="Export to Excel" class="btn tdh-button">
              Export to Excel
            </button>
		  </div>
		  <div class="tdh-box">
            <button title="Export to PDF" class="btn tdh-button">
              Export to PDF
            </button>
		  </div>
		  <div class="tdh-box">
            <button title="Filter" aria-popup="filter-end-customer-data" class="btn tdh-button open-sticky">
              Filter
            </button>
			<div class="rancak-popup rancak-popup-small rancak-popup-small-2" aria-overlay="filter-end-customer-data">
			  <div class="rancak-popup-overlay"></div>
			  <div class="rancak-popup-container content_center">
				<div class="rancak-popup-box custom-scrollbar">
				  <div class="rancak-popup-content popup-filter">
				    <div class="popup-filter-uprow">
                      <div class="popup-filter-label">From</div>
					  <div class="popup-filter-split">
                        <div class="popup-filter-row formbase">
                          <select class="formbase-field formbase-field-select">
                            <option value="0">Month</option>
                            <option value="1">January</option>
                          </select>
                          <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                        </div>
						<div class="popup-filter-row formbase">
                          <select class="formbase-field formbase-field-select">
                            <option value="0">Year</option>
                            <option value="1">2024</option>
                          </select>
                          <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                        </div>
					  </div>
                    </div>
				    <div class="popup-filter-uprow">
                      <div class="popup-filter-label">To</div>
					  <div class="popup-filter-split">
                        <div class="popup-filter-row formbase">
                          <select class="formbase-field formbase-field-select">
                            <option value="0">Month</option>
                            <option value="1">January</option>
                          </select>
                          <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                        </div>
						<div class="popup-filter-row formbase">
                          <select class="formbase-field formbase-field-select">
                            <option value="0">Year</option>
                            <option value="1">2024</option>
                          </select>
                          <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
                        </div>
					  </div>
                    </div>
					<button title="Filter" class="btn filter-submit" onclick="location.href='performance-report.php';">Filter</button>
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
          <div class="tdb-column tdb-column-circuitid">
            Circuit ID
          </div>
          <div class="tdb-column tdb-column-name">
            Customer Name
          </div>
          <div class="tdb-column tdb-column-name">
            End Customer Name
          </div>
          <div class="tdb-column tdb-column-serviceimpact">
            Service Impact
          </div>
          <div class="tdb-column tdb-column-sla">
            SLA Availability
          </div>
          <div class="tdb-column tdb-column-action"></div>
		</div>
		
	    <?php for ($i=1; $i <= 10; $i++) { ?>
          <div class="tdb-row">
            <div class="tdb-column tdb-column-ticketnumber">
              T003315-080724-01
            </div>
            <div class="tdb-column tdb-column-circuitid">
              CRT1909002523
            </div>
            <div class="tdb-column tdb-column-name">
              PT Des Teknologi Informasi
            </div>
            <div class="tdb-column tdb-column-name">
              BCA ITC Mangga Dua
            </div>
            <div class="tdb-column tdb-column-serviceimpact">
              Down
            </div>
            <div class="tdb-column tdb-column-sla">
              99.86%
            </div>
            <div class="tdb-column tdb-column-action">
              <button title="Show Detail" aria-popup="XXX005" class="tdb-ca-button tdb-ca-toggle open-sticky">
                <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
              </button>
            </div>
          </div>	
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['FIERSA'].'module/table-default-foot.php')?>
	</section>



</div>



<div class="rancak-popup rancak-popup-right" aria-overlay="XXX005">
  <div class="rancak-popup-overlay"></div>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box custom-scrollbar">
	  <div class="rancak-popup-content">
	    <ul class="rpc-detail-data">
		  <li>
		    <div class="rpc-detail-label">Ticket Number</div>
		    <div class="rpc-detail-info">T003315-080724-01</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Circuit ID</div>
		    <div class="rpc-detail-info">CRT1909002523</div>
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
		    <div class="rpc-detail-label">Service Impact</div>
		    <div class="rpc-detail-info">Down</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Related Product</div>
		    <div class="rpc-detail-info">NET-005M</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Incident Description</div>
		    <div class="rpc-detail-info">FO Cut</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Action Taken</div>
		    <div class="rpc-detail-info">Splicing</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Started Date</div>
		    <div class="rpc-detail-info">08 September 2024</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Start Time</div>
		    <div class="rpc-detail-info">00:00:00</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Resolved Date</div>
		    <div class="rpc-detail-info">08 September 2024</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Resolved Time</div>
		    <div class="rpc-detail-info">00:00:00</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Hold Duration</div>
		    <div class="rpc-detail-info">-</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Hold Reason</div>
		    <div class="rpc-detail-info">-</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Duration</div>
		    <div class="rpc-detail-info">00:00:00</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Availability</div>
		    <div class="rpc-detail-info">99.86%</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Total Availability</div>
		    <div class="rpc-detail-info">99.19%</div>
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