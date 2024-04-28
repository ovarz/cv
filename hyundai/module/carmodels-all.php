<div id="carmodels-All" class="carmodels-list">
  <div class="carmodels-list-detail">
    <?php 
      $carmodels_array = array();
      $carmodels_array[]=array(
        'carmodels_name'=>'Stargazer',
        'carmodels_img'=>'stargazer',
        'carmodels_price'=>'262.600.000',
        'carmodels_link'=>'',
        'carmodels_link_price'=>'',
      );
      $carmodels_array[]=array(
        'carmodels_name'=>'Stargazer X',
        'carmodels_img'=>'stargazer-x',
        'carmodels_price'=>'335.800.000',
        'carmodels_link'=>'',
        'carmodels_link_price'=>'',
      );
      $carmodels_array[]=array(
        'carmodels_name'=>'Staria',
        'carmodels_img'=>'staria',
        'carmodels_price'=>'924.000.000',
        'carmodels_link'=>'',
        'carmodels_link_price'=>'',
      );
      $carmodels_array[]=array(
        'carmodels_name'=>'Creta',
        'carmodels_img'=>'creta',
        'carmodels_price'=>'421.800.000',
        'carmodels_link'=>'',
        'carmodels_link_price'=>'',
      );
      $carmodels_array[]=array(
        'carmodels_name'=>'Ioniq 5',
        'carmodels_img'=>'ioniq5',
        'carmodels_price'=>'990.000.000',
        'carmodels_link'=>'',
        'carmodels_link_price'=>'',
      );
      $carmodels_array[]=array(
        'carmodels_name'=>'Ioniq 6',
        'carmodels_img'=>'ioniq6',
        'carmodels_price'=>'1.220.000.000',
        'carmodels_link'=>'',
        'carmodels_link_price'=>'',
      );
      $carmodels_array[]=array(
        'carmodels_name'=>'Palisade',
        'carmodels_img'=>'palisade',
        'carmodels_price'=>'1.181.000.000',
        'carmodels_link'=>'',
        'carmodels_link_price'=>'',
      );
      $carmodels_array[]=array(
        'carmodels_name'=>'Santa Fe',
        'carmodels_img'=>'santafe',
        'carmodels_price'=>'625.000.000',
        'carmodels_link'=>'',
        'carmodels_link_price'=>'',
      );
	  
      foreach($carmodels_array as $carmodels_list){
    ?>
      <?php require ($_SERVER['HY'].'module/carmodels-structure.php')?>
    <?php } ?>
  </div>
</div>