<div class="discover-model-option-container">
  <div class="dmoc-car">
    <button title="360" class="dmoc-car-360 content_center">
	  <img alt="360" class="dmoc-car-360-icon" src="img/car-360.png" />
	</button>
    <div class="dmoc-car-frame flex_ori thumb-loading">
	  <img alt="Stargazer Magnetic Silver Metallic" class="lazyload" data-original="img/model-stargazer-msm.png" />
	  <img alt="Stargazer Creamy White Pearl" class="lazyload hide" data-original="img/model-stargazer-cwp.png" />
	  <img alt="Stargazer Midnight Black Pearl" class="lazyload hide" data-original="img/model-stargazer-mbp.png" />
	  <img alt="Stargazer Titan Gray Metallic" class="lazyload hide" data-original="img/model-stargazer-tgm.png" />
	  <img alt="Stargazer Dragon Red Pearl" class="lazyload hide" data-original="img/model-stargazer-drp.png" />
	</div>
  </div>
  <div class="dmoc-box dmoc-box-exterior content_center">
    <span class="dmoc-box-container">
      <div class="dmoc-label">Exterior</div>
      <div class="dmoc-name">Magnetic Silver Metallic</div>
      <div class="dmoc-choice">
        <?php $radio_class='dmoc-radiobutton dmoc-radiobutton-msm'; $radio_name='exterior-choice'; $radio_label='Magnetic Silver Metallic'; $radio_checked='checked';
        require ($_SERVER['HY'].'module/default-radiobutton.php')?>
        <?php $radio_class='dmoc-radiobutton dmoc-radiobutton-cwp'; $radio_name='exterior-choice'; $radio_label='Creamy White Pearl'; $radio_checked='';
        require ($_SERVER['HY'].'module/default-radiobutton.php')?>
        <?php $radio_class='dmoc-radiobutton dmoc-radiobutton-mbp'; $radio_name='exterior-choice'; $radio_label='Midnight Black Pearl'; $radio_checked='';
        require ($_SERVER['HY'].'module/default-radiobutton.php')?>
        <?php $radio_class='dmoc-radiobutton dmoc-radiobutton-tgm'; $radio_name='exterior-choice'; $radio_label='Titan Gray Metallic'; $radio_checked='';
        require ($_SERVER['HY'].'module/default-radiobutton.php')?>
        <?php $radio_class='dmoc-radiobutton dmoc-radiobutton-drp'; $radio_name='exterior-choice'; $radio_label='Dragon Red Pearl'; $radio_checked='';
        require ($_SERVER['HY'].'module/default-radiobutton.php')?>
      </div>
	</span>
  </div>
  <div class="dmoc-box dmoc-box-interior content_center">
    <span class="dmoc-box-container">
      <div class="dmoc-label">Interior</div>
      <div class="dmoc-name">Black Leather</div>
      <div class="dmoc-choice">
        <?php $radio_class='dmoc-radiobutton dmoc-radiobutton-bl'; $radio_name='interior-choice'; $radio_label='Black Leather'; $radio_checked='checked';
        require ($_SERVER['HY'].'module/default-radiobutton.php')?>
        <?php $radio_class='dmoc-radiobutton dmoc-radiobutton-cl'; $radio_name='interior-choice'; $radio_label='Creamy Leather'; $radio_checked='';
        require ($_SERVER['HY'].'module/default-radiobutton.php')?>
      </div>
	</span>
  </div>
</div>



<script defer>
  $('.dmoc-radiobutton').click(function(){
    var get_exterior = $(this).find('.drd-label').html();
    $('.dmoc-car-frame').find('img[alt="Stargazer' + get_exterior +'"]').fadeIn('fast');
    $('.dmoc-car-frame img').not('img[alt="Stargazer' + get_exterior +'"]').fadeOut('fast');
  });
</script>