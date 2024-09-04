<article id="article-id-slug" class="rancak-article">
  <a title="<?php echo($article_box['article_title'])?>" class="articlelist-title" href="<?php echo($article_box['article_link'])?>">
    <h2><?php echo($article_box['article_title'])?></h2>
  </a>
  <a title="<?php echo($article_box['article_title'])?>" class="articlelist-thumb flex_ori thumb-loading" href="<?php echo($article_box['article_link'])?>">
    <?php if($article_box['article_type'] == 'article') { ?>
      <img alt="img_title" class="lazyload" data-original="img/sample/<?php echo($article_box['article_thumb'])?>.jpg" />
    <?php } ?>
    <?php if($article_box['article_type'] == 'video') { ?>
      <iframe width="560" height="315" class="lazyload video-player" data-original="https://www.youtube.com/embed/<?php echo($article_box['article_thumb'])?>?&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <?php } ?>
  </a>
  <div class="articlelist-info">
    <div class="articlelist-split">
      <div class="articlelist-summary">
        <?php foreach($article_box['article_summary'] as $article_summary){ ?>
          <div class="articlelist-summary-list">
            <div class="asl-icon"><?php require ($_SERVER['BP'].'img/bp-icon.svg')?></div>
            <h3 class="asl-title"><?php echo($article_summary['article_summary_list'])?></h3>
          </div>
        <?php } ?>
      </div>
      <div class="articlelist-action">
        <div class="alo-container">
          <button title="Share Artikel Ini" class="alo-button alo-share content_center">
            <?php require ($_SERVER['BP'].'img/icon/circle-share.svg')?>
          </button>
          <a title="Menuju artikel <?php echo($article_box['article_title'])?>" class="alo-button alo-more content_center" href="<?php echo($article_box['article_link'])?>">
            <?php require ($_SERVER['BP'].'img/icon/circle-article.svg')?>
          </a>
        </div>
      </div>
      <div class="articlelist-tag">
        <?php foreach($article_box['article_topic'] as $article_topic){ ?>
          <a title="<?php echo($article_topic['article_topic_list'])?>" class="btn articlelist-tag-list" href="topic.php">
            <h4><?php echo($article_topic['article_topic_list'])?></h4>
          </a>
        <?php } ?>
      </div>
    </div>
  </div>
</article>