<?php 
  $page='login';
  $nav='Login';
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
	    <h3 class="box-subtitle">FiberStar Selfcare Application</h3>
	  </div>
	  
	  <div class="box-form">
	    <div class="formbase">
		  <input type="text" class="formbase-field" placeholder="Username">
		</div>
	    <div class="formbase formbase-password">
		  <input type="password" class="formbase-field" placeholder="Password">
		  <button title="Toggle Password" class="formbase-toggle show-pass content_center">
            <?php require ($_SERVER['FIERSA'].'img/icon/pass-hide.svg')?>
            <?php require ($_SERVER['FIERSA'].'img/icon/pass-show.svg')?>
		  </button>
		</div>
	  </div>
	  
	  <div class="box-action">
	    <button title="Login" class="btn action-submit" onclick="location.href='information.php';">Login</button>
		<a title="Forgot ID or Password" class="action-link" href="login.php">Forgot ID or Password</a>
	  </div>
	</div>
  </div>



</div>
<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>