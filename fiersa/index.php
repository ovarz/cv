<?php 
  $page='login';
  $nav='Pagelist';
  $opensub='no';
  $slideshow='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['FIERSA'].'inc/sample.php')?>
<?php require ($_SERVER['FIERSA'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div class="rancak-container">



  <div class="login-logo rancak-lazy thumb-loading">
    <img class="lazyload" src="img/logo-white.png" />
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
		    <a href="register.php">Register</a>
		  </li>
		  <li>
		    <a href="information.php">Information</a>
		  </li>
		  <li>
		    <a href="register.php">Register</a>
			<ul>
			  <li><a href="login.php">Login</a></li>
			  <li><a href="login.php">Login</a></li>
			</ul>
		  </li>
		</ul>
	  </div>
	</div>
  </div>



</div>
<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>