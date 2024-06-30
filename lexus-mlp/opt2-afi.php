<?php 
  $template='afi';
  $page='default';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/opt2-meta.php')?>
<style>
  :root, :before, :after{
    --color-default:#C00;
    --color-border:#c00;
    --bg-grey:#ccc;
    --bg-black:#c00;
    --bg-white:#FFFFFF;
  }

  html{background-image:url(img/stnk-bpkb.jpg); background-position:top center; background-repeat:no-repeat; background-size:100% auto;}
  body{background:0;}
  
  .mainform{min-height:200vh; grid-auto-rows:min-content;}
</style>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div class="rancak-container">



  <div class="logo-box">
    <?php require ($_SERVER['HY'].'img/logo.svg')?>
  </div>
  
  
  
  <div class="mainform">
    <div class="mainform-head"><b>Lexus Order Form</b></div>
	
	
	
	<div class="mainform-box mainform-type1" style="padding-top:1.4vw;">
      <div class="mainform-row">
        <div class="mainform-label">Nama Customer</div>
        <div class="mainform-separator">:</div>
        <div class="mainform-data">
          OtoGear
        </div>
      </div>
	  
      <div class="mainform-row">
        <div class="mainform-label">Nama pada SPK (Lexus Order Form)</div>
        <div class="mainform-separator">:</div>
        <div class="mainform-data">
          Aufar Mahardi
        </div>
      </div>
	  
      <div class="mainform-row">
        <div class="mainform-label">Nomor Rangka Kendaraan</div>
        <div class="mainform-separator">:</div>
        <div class="mainform-data">
          XXXXX-XXXXX-XXXXX-XXXXX
        </div>
      </div>
	  
      <div class="mainform-row">
        <div class="mainform-label">Nomor Mesin Kendaraan</div>
        <div class="mainform-separator">:</div>
        <div class="mainform-data">
          XXXXX-XXXXX-XXXXX-XXXXX
        </div>
      </div>
	</div>
	
	
	
	<div class="mainform-box mainform-type1">
      <div class="mainform-subtitle">
	    Data untuk STNK & BPKB
	  </div>
	  
      <div class="mainform-row">
        <div class="mainform-label">Nama pada STNK</div>
        <div class="mainform-separator">:</div>
        <div class="mainform-data">
          OtoGear
        </div>
      </div>
	  
      <div class="mainform-row mainform-multipleline">
        <div class="mainform-label">Alamat<br/>(Sesuai KTP/Surat Keterangan Domisili)</div>
        <div class="mainform-separator">:</div>
        <div class="mainform-data">
          Jl. Tebet Timur Dalam VIII H No.3, RT.11/RW.6, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820
        </div>
      </div>
	  
      <div class="mainform-row">
        <div class="mainform-label">Nama PIC & Nomor Telepon</div>
        <div class="mainform-separator">:</div>
        <div class="mainform-data">
          Aufar - 62800 0000 0000
        </div>
      </div>
	  
      <div class="mainform-row mainform-multipleline">
        <div class="mainform-label">Alamat pengiriman STNK & BPKB</div>
        <div class="mainform-separator">:</div>
        <div class="mainform-data">
          Jl. Tebet Timur Dalam VIII H No.3, RT.11/RW.6, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820
        </div>
      </div>
	</div>
	
	
	
	<div class="mainform-box mainform-type1">
      <div class="mainform-subtitle">
	    <b>Dokumen-dokumen yang dibutuhkan untuk pembuatan STNK & BPKB :</b>
	  </div>
	</div>
	
	
	
  </div>
  
  
  
</div>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>