<?php $web_type='default'; require ('inc/base.php')?>
<?php require ('inc/header.php')?>
<style amp-custom>
  <?php require ('css/rancak.css')?>
</style>
</head>
<body>
<amp-analytics config="https://www.googletagmanager.com/amp.json?id=G-FRRHFE09BY" data-credentials="include"></amp-analytics>
<div id="top-page"></div>
<div class="site-container">
  <?php require ('module/headline.php')?>
  <?php require ('module/profile.php')?>
  <?php require ('module/experience.php')?>
  <?php require ('module/skill.php')?>
</div>
<div class="bottom-container">
  <?php require ('module/contact.php')?>
  <?php require ('module/portfolio.php')?>
</div>
<?php require ('inc/footer.php')?>