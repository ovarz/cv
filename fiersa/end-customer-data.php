<?php 
  $page='dashboard';
  $nav='End Customer Data';
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
		  <div class="tdh-box">
            <button title="Export to Excel" class="btn tdh-button">
              Export to Excel
            </button>
		  </div>
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
              <button title="Show Detail" aria-popup="XXX002" class="tdb-ca-button tdb-ca-toggle open-sticky">
                <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
              </button>
            </div>
          </div>	
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['FIERSA'].'module/table-default-foot.php')?>
	</section>



</div>



<div class="rancak-popup rancak-popup-right" aria-overlay="XXX002">
  <div class="rancak-popup-overlay"></div>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box custom-scrollbar">
	  <div class="rancak-popup-content">
	    <ul class="rpc-detail-data">
		  <li>
		    <div class="rpc-detail-label">Name</div>
		    <div class="rpc-detail-info">PT. Awinet Global Mandiri</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">City</div>
		    <div class="rpc-detail-info">Pasuruan</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Email Label</div>
		    <div class="rpc-detail-info">Email Billing</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Email Address</div>
		    <div class="rpc-detail-info">me@aufarmahardi.com</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Phone Label</div>
		    <div class="rpc-detail-info">Telepon Billing</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Phone Number</div>
		    <div class="rpc-detail-info">080000000000</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Address</div>
		    <div class="rpc-detail-info">Jl. Tebet Timur Dalam VIII H No.8, Tebet Timur</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Postal Code</div>
		    <div class="rpc-detail-info">00000</div>
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