<?php 
  $page='dashboard';
  $nav='Registration User';
  $opensub='';
  $slideshow='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['FIERSA'].'inc/sample.php')?>
<?php require ($_SERVER['FIERSA'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<?php require ($_SERVER['FIERSA'].'inc/header.php')?>
<?php require ($_SERVER['FIERSA'].'inc/nav-admin.php')?>
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
            <a title="Add New User" class="btn tdh-button" href="registration-user-edit.php">
              Add New User
            </a>
		  </div>
		</div>
	  </div>
	  
	  <div class="table-default-box white-box">
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
          <div class="tdb-column tdb-column-action"></div>
		</div>
		
	    <?php for ($i=1; $i <= 10; $i++) { ?>
          <div class="tdb-row">
            <div class="tdb-column tdb-column-name">
              <?php echo $random_username[array_rand($random_username)]; ?>
            </div>
            <div class="tdb-column tdb-column-email">
              me@aufarmahardi.com
            </div>
            <div class="tdb-column tdb-column-phone">
              080000000000
            </div>
            <div class="tdb-column tdb-column-address">
              Jl. Tebet Timur Dalam VIII H No.8, Tebet Timur
            </div>
            <div class="tdb-column tdb-column-city">
              South Jakarta
            </div>
            <div class="tdb-column tdb-column-action">
              <a title="Edit Data" class="tdb-ca-button" href="list-user-edit.php">
                <?php require ($_SERVER['FIERSA'].'img/icon/edit.svg')?>
              </a>
            </div>
            <div class="tdb-column tdb-column-action">
              <button title="Show Detail" aria-popup="XXX007" class="tdb-ca-button tdb-ca-toggle open-sticky">
                <?php require ($_SERVER['FIERSA'].'img/icon/down.svg')?>
              </button>
            </div>
          </div>	
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['FIERSA'].'module/table-default-foot.php')?>
	</section>



</div>



<div class="rancak-popup rancak-popup-right" aria-overlay="XXX007">
  <div class="rancak-popup-overlay"></div>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box">
	  <div class="rancak-popup-content">
	    <ul class="rpc-detail-data">
		  <li>
		    <div class="rpc-detail-label">Username</div>
		    <div class="rpc-detail-info">ovarz</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Name</div>
		    <div class="rpc-detail-info">ICI PT Awinet Global Mandiri - Pasuruan</div>
		  </li>
		  <li>
		    <div class="rpc-detail-label">Group</div>
		    <div class="rpc-detail-info">User</div>
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
		    <div class="rpc-detail-label">City</div>
		    <div class="rpc-detail-info">Pasuruan</div>
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