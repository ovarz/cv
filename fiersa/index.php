<?php 
  $page='login';
  $nav='Pagelist';
  $opensub='';
  $slideshow='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['FIERSA'].'inc/sample.php')?>
<?php require ($_SERVER['FIERSA'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div class="rancak-container">



  <div class="login-logo rancak-lazy thumb-loading">
    <img class="lazyload" data-original="img/logo-white.png" />
  </div>
  
  
  
  <div class="box-container login-frame">
    <div class="box-frame">
	  <div class="box-head">
	    <h2 class="box-title">Fiersa</h2>
	    <h3 class="box-subtitle">Daftar Halaman</h3>
	  </div>
	  
	  <div class="box-form pagelist">
	    <style>
		  .pagelist ul{padding-left:var(--size-4);}
		  .pagelist > ul{list-style:disc; display:grid; grid-gap:var(--size-1);}
		  .pagelist > ul > li > ul{list-style:circle;}
		  .pagelist a{display:block; padding:var(--size-1) 0;}
		</style>
	    <ul>
		  <li>
		    <a href="login.php">Login</a>
		  </li>
		  <li>
		    <a href="information.php">Information</a>
		  </li>
		  <li>
		    <a href="customer-data.php">Customer Data</a>
			<ul>
			  <li><a href="end-customer-data.php">End Customer Data</a></li>
			  <li><a href="healthy-check.php">Healthy Check</a></li>
			</ul>
		  </li>
		  <li>
		    <a href="ticket-request.php">Ticket Request</a>
		  </li>
		  <li>
		    <a href="ticket-complaint.php">Ticket Complaint</a>
		  </li>
		  <li>
		    <a href="ticket-status.php">Ticket Status</a>
		  </li>
		  <li>
		    <a href="outrage-report.php">Outrage Report</a>
		  </li>
		  <li>
		    <a href="performance-report.php">Performance Report</a>
		  </li>
		  <li></li>
		  <li>
		    <a href="list-user.php">List User</a>
		  </li>
		  <li>
		    <a href="user-group.php">User Group</a>
		  </li>
		  <li>
		    <a href="registration-user.php">Registration User</a>
		  </li>
		</ul>
	  </div>
	</div>
  </div>



</div>
<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>