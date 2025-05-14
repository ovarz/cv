<style><?php require ($_SERVER['OG'].'template/css/headline.css')?></style>
<section title="Headline" class="rancak-section headline">
  <?php $section_title='random'; require ($_SERVER['OG'].'template/module/section-title.php')?>
  <div class="headline-highlight">
    <?php $article_misc='date'; $article_desc='yes'; $article_thumb='yes';
    require ($_SERVER['OG'].'template/module/article-box.php')?>
  </div>
  <div class="headline-list">
    <?php for ($i=1; $i<=3; $i++) { ?>
      <?php $article_misc='date'; $article_desc='no'; $article_thumb='no';
      require ($_SERVER['OG'].'template/module/article-box.php')?>
    <?php } ?>
  </div>
</section>