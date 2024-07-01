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
	
	
	
	<div class="mainform-box mainform-type2">
      <div class="mainform-subtitle">
	    <b>Dokumen-dokumen yang dibutuhkan untuk pembuatan STNK & BPKB :</b>
	  </div>
	  <ol class="mainform-document">
	    <li>
		  <b>Perorangan</b>
		  <ol>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">KTP</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"><img src="img/sample/signature-<?php echo rand(1,4); ?>.png"/></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"><img src="img/sample/signature-<?php echo rand(1,4); ?>.png"/></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"><img src="img/sample/signature-<?php echo rand(1,4); ?>.png"/></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"><img src="img/sample/signature-<?php echo rand(1,4); ?>.png"/></div>
                  </div>
                </div>
			  </div>
			</li>
		  </ol>
		</li>
	    <li>
		  <b>Perusahaan</b>
		  <ol>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">Fotocopy NPWP, TDP dan SIUP (Min. 6 bulan)</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">Fotocopy Surat Keterangan Domisili Perusahaan (Min. 6 bulan)</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">Surat Kuasa Mobil Baru (format surat akan disediakan oleh Lexus Indonesia)</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">Surat Kuasa Pengambilan BPKB (format surat akan disediakan oleh Lexus Indonesia)</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		  </ol>
		</li>
	    <li class="mainform-subtitle mainform-skipnumber">
		  <b>Dokumen-dokumen yang dibutuhkan untuk Silang Nomor:</b>
		</li>
	    <li value="3">
		  <b>Perorangan</b>
		  <ol>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">Esek-esek Nomor Mesin dan Nomor Rangka</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">KTP Asli (yang tercantum pada STNK)</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">STNK Asli</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">BPKB Asli</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		  </ol>
		</li>
	    <li>
		  <b>Perusahaan</b>
		  <ol>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">Esek-esek Nomor Mesin dan Nomor Rangka</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">STNK Asli</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">BPKB Asli</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">Fotocopy NPWP, TDP dan SIUP (Min. 6 bulan)</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">Fotocopy Surat Keterangan Domisili Perusahaan (Min. 6 bulan)</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		    <li class="mainform-document-sign">
              <div class="mds-row">
                <div class="mds-label">Surat Kuasa Mobil Baru (format surat akan disediakan oleh Lexus Indonesia)</div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
                <div class="mds-container">
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                  <div class="mds-box">
                    <div class="mds-box-frame"></div>
                  </div>
                </div>
			  </div>
			</li>
		  </ol>
		</li>
	    <li class="mainform-subtitle mainform-skipnumber">
		  <b>Pengajuan Nomor Polisi Khusus :</b>
		</li>
	    <li class="mainform-document-left" value="5">
		  <b>Pilihan Nomor Polisi</b>
		  <ol class="custom-plate-list">
		    <li>D 1616 IT</li>
		    <li>D 1616 IT</li>
		    <li>D 1616 IT</li>
		    <li>D 1616 IT</li>
		    <li>D 1616 IT</li>
		  </ol>
		</li>
	    <li class="mainform-document-right">
		  <b>Pengurusan (diisi salah satu)</b>
		  <ol class="custom-plate-by">
		    <li aria-choice="" class="cpb-column">
			  <div class="cpb-label">Via Lexus</div>
			  <div class="cpb-box">
			    <?php require ($_SERVER['HY'].'img/check.svg')?>
			  </div>
			</li>
		    <li aria-choice="this" class="cpb-column">
			  <div class="cpb-label">Lain-lain</div>
			  <div class="cpb-box">
			    <?php require ($_SERVER['HY'].'img/check.svg')?>
			  </div>
			</li>
		  </ol>
		</li>
	  </ol>
	</div>
	
	
	
  </div>
  
  
  
</div>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>