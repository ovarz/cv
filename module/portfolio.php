<section class="portfolio">
  <div class="section-title">
    <i class="fas fa-angle-right">&#xf105</i><span>portfolio</span>
  </div>
  
  <div class="portfolio-list">
    <?php 
      $porto_array = array();
      $porto_array[]=array('porto_link'=>'https://bit.ly/figmalms', 'porto_id'=>'lms', 'porto_name'=>'Lexus Leads Management System', 'porto_domain'=>'bit.ly/figmalms');
      $porto_array[]=array('porto_link'=>'https://bit.ly/exiahud', 'porto_id'=>'exia-hud', 'porto_name'=>'Exia Head-Up Display', 'porto_domain'=>'bit.ly/exiahud');
      $porto_array[]=array('porto_link'=>'https://impavidalaw.com/', 'porto_id'=>'impavida', 'porto_name'=>'Impavida | Advocates & Legal Consultants', 'porto_domain'=>'www.impavidalaw.com');
      $porto_array[]=array('porto_link'=>'https://bit.ly/tamtelematic', 'porto_id'=>'tam', 'porto_name'=>'Toyota Astra Motor Telematic', 'porto_domain'=>'bit.ly/tamtelematic');
      $porto_array[]=array('porto_link'=>'https://bit.ly/exiamobile', 'porto_id'=>'exia-mobile', 'porto_name'=>'Exia Mobile Apps', 'porto_domain'=>'bit.ly/exiamobile');
      $porto_array[]=array('porto_link'=>'https://www.otogear.id/', 'porto_id'=>'og', 'porto_name'=>'OtoGear', 'porto_domain'=>'www.otogear.id');
      $porto_array[]=array('porto_link'=>'https://bit.ly/viva-apps', 'porto_id'=>'vivaone', 'porto_name'=>'VIVA Aggregator Apps', 'porto_domain'=>'https://bit.ly/viva-apps');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'hoedhoed', 'porto_name'=>'HoedHoed', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'tripodnews', 'porto_name'=>'TripodNews', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'watchis', 'porto_name'=>'Watchis', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'scoutdb', 'porto_name'=>'ScoutDB', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'https://www.viva.co.id/portalpemilu', 'porto_id'=>'pemilu', 'porto_name'=>'Portal Pemilu VIVA.co.id', 'porto_domain'=>'https://www.viva.co.id/portalpemilu');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'tvone-hut', 'porto_name'=>'HUT tvOne ke-15', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'https://www.viahub.id/', 'porto_id'=>'viahub', 'porto_name'=>'VIAHub', 'porto_domain'=>'www.viahub.id');
      $porto_array[]=array('porto_link'=>'https://www.ureca.id/', 'porto_id'=>'ureca', 'porto_name'=>'Ureca', 'porto_domain'=>'www.ureca.id');
      $porto_array[]=array('porto_link'=>'https://www.iklanmurah.id/', 'porto_id'=>'iklanmurah', 'porto_name'=>'IklanMurah', 'porto_domain'=>'www.iklanmurah.id');
      $porto_array[]=array('porto_link'=>'https://www.tvonenews.com/', 'porto_id'=>'tvone', 'porto_name'=>'tvOne', 'porto_domain'=>'www.tvonenews.com');
      $porto_array[]=array('porto_link'=>'https://www.antvklik.com/', 'porto_id'=>'antvklik', 'porto_name'=>'ANTVKlik', 'porto_domain'=>'www.antvklik.com');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'g20', 'porto_name'=>'Microsite G20 tvOne', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'https://www.viva.co.id/haji', 'porto_id'=>'haji22', 'porto_name'=>'Microsit Hajie VIVA.co.id', 'porto_domain'=>'www.viva.co.id/haji');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'hutantv', 'porto_name'=>'HUT ANTV 2022', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'https://vdvc.id/', 'porto_id'=>'vdvc', 'porto_name'=>'VIVA Digital Venture Company', 'porto_domain'=>'vdvc.id');
      $porto_array[]=array('porto_link'=>'https://bakrie.id/', 'porto_id'=>'bakrie', 'porto_name'=>'Bakrie Group', 'porto_domain'=>'bakrie.id');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'strimid', 'porto_name'=>'strim.id', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'lovebeat', 'porto_name'=>'LoveBeat - Final Fantasy Online Fans Club', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'https://www.intipseleb.com/', 'porto_id'=>'insel22', 'porto_name'=>'IntipSeleb', 'porto_domain'=>'www.intipseleb.com');
      $porto_array[]=array('porto_link'=>'https://www.viva.co.id/', 'porto_id'=>'vivacoid', 'porto_name'=>'VIVA.co.id', 'porto_domain'=>'www.viva.co.id');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'socmed', 'porto_name'=>'Social Media Generator', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'vlix', 'porto_name'=>'VLIX (Concept)', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'https://www.viva.co.id/siapa', 'porto_id'=>'siapa', 'porto_name'=>'Siapa', 'porto_domain'=>'www.viva.co.id/siapa');
      $porto_array[]=array('porto_link'=>'https://sso.thevivanetworks.com/', 'porto_id'=>'sso', 'porto_name'=>'VIVA SSO Dashboard', 'porto_domain'=>'https://sso.thevivanetworks.com/');
      $porto_array[]=array('porto_link'=>'https://www.viva.co.id/corona/', 'porto_id'=>'corona', 'porto_name'=>'Pantau Corona COVID-19', 'porto_domain'=>'www.viva.co.id/corona');
      $porto_array[]=array('porto_link'=>'https://www.viva.co.id/antv/', 'porto_id'=>'antvmicrosite', 'porto_name'=>'Microsite ANTV', 'porto_domain'=>'www.viva.co.id/antv');
      $porto_array[]=array('porto_link'=>'https://abirama.net/', 'porto_id'=>'abirama', 'porto_name'=>'PT. Abirama Bandha Sejahtera', 'porto_domain'=>'www.abirama.net');
      $porto_array[]=array('porto_link'=>'https://www.onepride.net/', 'porto_id'=>'onepride', 'porto_name'=>'One Pride Indonesia MMA', 'porto_domain'=>'www.onepride.net');
      $porto_array[]=array('porto_link'=>'https://www.oneprix.id/', 'porto_id'=>'oneprix', 'porto_name'=>'OnePrix', 'porto_domain'=>'www.oneprix.id');
      $porto_array[]=array('porto_link'=>'https://www.100kpj.com/', 'porto_id'=>'100kpj', 'porto_name'=>'100KPJ', 'porto_domain'=>'www.100kpj.com');
      $porto_array[]=array('porto_link'=>'https://www.jagodangdut.com/', 'porto_id'=>'jagodangdut', 'porto_name'=>'JagoDangdut', 'porto_domain'=>'www.jagodangdut.com');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'vivanews', 'porto_name'=>'VIVANews', 'porto_domain'=>'Not Yet Available');
      $porto_array[]=array('porto_link'=>'', 'porto_id'=>'pesbukers', 'porto_name'=>'ANTV Pesbukers', 'porto_domain'=>'Not Yet Available');
      foreach($porto_array as $porto_list){ 
	?>
    <a rel="noreferrer" href="<?php echo($porto_list['porto_link'])?>" class="portfolio-box" target="_blank">
      <span>
        <div class="portfolio-image">
          <div class="portfolio-image-frame">
            <amp-img src="<?php echo $base?>/img/portfolio-<?php echo($porto_list['porto_id'])?>.png" layout="fill" alt="<?php echo($porto_list['porto_name'])?>"></amp-img>
          </div>
        </div>
        <h5 class="portfolio-name"><?php echo($porto_list['porto_name'])?></h5>
        <div class="portfolio-button">
          <div>
            <?php if($web_type == 'default') { ?>Visit Site<?php } ?> 
            <?php if($web_type == 'print') { ?><?php echo($porto_list['porto_domain'])?><?php } ?> 
            &raquo;
          </div>
        </div>
      </span>
    </a>
	<?php } ?>
  </div>
  <?php if($web_type == 'default') { ?>
    <div class="portfolio-more">
      <a rel="noreferrer" href="https://www.linkedin.com/in/aufar/" class="portfolio-more-button" target="_blank">View More &raquo;</a>
    </div>
  <?php } ?>
</section>