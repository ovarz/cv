<?php $web_type='print'; require ('cv/inc/base.php')?>
<?php require ('cv/inc/header.php')?>
<style amp-custom>
  <?php require ('cv/css/rancak.css')?>
  <?php require ('cv/css/print.css')?>
</style>
</head>
<body>
<amp-analytics config="https://www.googletagmanager.com/amp.json?id=G-FRRHFE09BY" data-credentials="include"></amp-analytics>
<div id="top-page"></div>
<div class="site-container">
  <?php require ('cv/module/headline.php')?>
  <?php require ('cv/module/profile.php')?>
  <?php require ('cv/module/experience.php')?>
  <?php require ('cv/module/skill.php')?>
</div>
<div class="bottom-container">
  <?php require ('cv/module/portfolio.php')?>
</div>
<?php require ('cv/inc/footer.php')?>