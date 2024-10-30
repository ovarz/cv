<?php 
  $page='dashboard';
  $nav='Ticket Request';
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
            <a title="Filter" class="btn tdh-button" href="ticket-request-new.php">
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
          <div class="tdb-column tdb-column-ticketnumber">
            Request Ticket Number
          </div>
          <div class="tdb-column tdb-column-submitdate">
            Submit Date
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
		</div>
		
	    <?php for ($i=1; $i <= 10; $i++) { ?>
          <div class="tdb-row">
            <div class="tdb-column tdb-column-ticketnumber">
              XXXXX XXXXX
            </div>
            <div class="tdb-column tdb-column-ticketnumber">
              XXXXX XXXXX
            </div>
            <div class="tdb-column tdb-column-submitdate">
              30 Sep 2024
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
          </div>	
		<?php } ?>
	  </div>
	  
	  <?php require ($_SERVER['FIERSA'].'module/table-default-foot.php')?>
	</section>



</div>




<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>