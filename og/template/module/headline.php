<style><?php require ($_SERVER['OG'].'template/css/headline.css')?></style>
<section title="Headline" class="rancak-section headline">
  <?php $section_title='Terpopuler'; require ($_SERVER['OG'].'template/module/section-title.php')?>
  <div class="headline-highlight">
    <?php $content_type='default'; $article_misc='date'; $article_cate='show'; $article_desc='show'; $article_thumb='show';
    require ($_SERVER['OG'].'template/module/article-box.php')?>
  </div>
  <div class="headline-list">
    <?php for ($i=1; $i<=3; $i++){ ?>
      <?php $content_type='default'; $article_misc='date'; $article_cate='show'; $article_desc='hide'; $article_thumb='hide';
      require ($_SERVER['OG'].'template/module/article-box.php')?>
    <?php } ?>
  </div>
</section>