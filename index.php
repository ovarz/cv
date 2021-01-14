<?php $level='one'; $page='home'; $kanal='home'; require ('inc/base.php')?>
<?php require ('inc/header.php')?>
<?php require ('css/css.php')?>
</head>
<body>
<div id="top-page"></div>
<div class="site-container">
  <span>
	<div class="column-two">
	  <div class="column-left">
	    <span>
		  <?php require ('module/intro.php')?>
		  <?php require ('module/info.php')?>
		  <?php require ('module/skill.php')?>
		</span>
	  </div>
	  <div class="column-right">
	    <div class="colum-split-2">
		  <?php require ('module/experience.php')?>
		  <?php require ('module/project.php')?>
		</div>
		<?php require ('module/contact.php')?>
	  </div>
	</div>
  </span>
</div>
<?php require ('module/portfolio.php')?>
<?php require ('inc/footer.php')?>