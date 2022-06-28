<?php $web_type='print'; require ('inc/base.php')?>
<?php require ('inc/header.php')?>
<style amp-custom>
  <?php require ('css/rancak.css')?>
  <?php require ('css/print.css')?>
</style>
</head>
<body>
<div id="top-page"></div>
<div class="site-container">
  <?php require ('module/headline.php')?>
  <?php require ('module/profile.php')?>
  <?php require ('module/experience.php')?>
  <?php require ('module/skill.php')?>
</div>
<div class="bottom-container">
  <?php require ('module/portfolio.php')?>
</div>
<?php require ('inc/footer.php')?>