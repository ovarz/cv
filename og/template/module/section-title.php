<div class="section-title">
  <?php if($section_title != 'random'){ ?>
    <?php require ($_SERVER['OG'].'template/img/icon.svg')?>
  <?php } ?>
  <div class="section-title-label">
    <?php if($section_title != 'random'){ ?>
      <?php echo $section_title;?>
    <?php } ?>
    <?php if($section_title == 'random'){ ?>
      <?php echo $random_topic[array_rand($random_topic)];?>
    <?php } ?>
  </div>
</div>