<?php 
  $menu='Tos';
  $submenu='';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['OG'].'template/inc/sample.php')?>
<?php require ($_SERVER['OG'].'template/inc/meta.php')?>
<?php require ($_SERVER['OG'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  <?php $skinads='left';  require ($_SERVER['OG'].'template/iklan/iklan-skin.php')?>
  <div class="rancak-container">
	<?php require ($_SERVER['OG'].'template/iklan/iklan-leaderboard.php')?>
	<?php require ($_SERVER['OG'].'template/iklan/iklan-mobile-top.php')?>
	<div class="rancak-column">
	  <div class="rancak-column-box rancak-column-big">
	    <div class="rcb-container">



		  <section title="section_name" class="rancak-section rancak-section-box">
		    <?php $section_title='Privacy Policy'; require ($_SERVER['OG'].'template/module/section-title.php')?>
            <div class="information-page">
			  <h2 class="information-opening">OTOgears.com berkomitmen untuk menjaga privasi dan keamanan data Anda. Kebijakan ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda.</h2>
			  
			  <ol class="information-list">
			    <li>
				  <b>Informasi yang Kami Kumpulkan</b>
				  <p>Kami dapat mengumpulkan informasi berikut saat Anda menggunakan situs kami:</p>
				  <ul class="information-sublist">
				    <li>Nama dan alamat email</li>
				    <li>Alamat IP dan data perangkat</li>
				    <li>Preferensi konten otomotif</li>
				  </ul>
				</li>
			    <li>
				  <b>Penggunaan Informasi</b>
				  <p>Informasi Anda kami gunakan untuk:</p>
				  <ul class="information-sublist">
				    <li>Menyediakan dan meningkatkan layanan OTOgears.com</li>
				    <li>Mengirimkan konten personal</li>
				    <li>Menampilkan iklan yang relevan sesuai minat Anda</li>
				  </ul>
				</li>
			    <li>
				  <b>Cookie dan Teknologi Pelacakan</b>
				  <p>Kami menggunakan cookie dan alat analitik pihak ketiga (seperti Google Analytics) untuk memahami perilaku pengguna dan meningkatkan pengalaman Anda di situs ini.</p>
				</li>
			    <li>
				  <b>Berbagi Informasi</b>
				  <p>Kami tidak akan menjual, menyewakan, atau membagikan data pribadi Anda kepada pihak ketiga tanpa izin, kecuali untuk keperluan operasional seperti:</p>
				  <ul class="information-sublist">
				    <li>Mitra iklan dan teknologi</li>
				    <li>Penyedia layanan email newsletter</li>
				  </ul>
				</li>
			    <li>
				  <b>Keamanan Data</b>
				  <p>Kami menerapkan langkah-langkah teknis dan organisasi untuk melindungi data Anda dari akses tidak sah, perubahan, atau penghapusan.</p>
				</li>
			    <li>
				  <b>Hak Pengguna</b>
				  <p>Sebagai pengguna, Anda memiliki hak untuk:</p>
				  <ul class="information-sublist">
				    <li>Meminta salinan data pribadi Anda</li>
				    <li>Memperbarui atau menghapus data Anda</li>
					<li>Menolak menerima komunikasi pemasaran (opt-out)</li>
				  </ul>
				</li>
			    <li>
				  <b>Tautan Eksternal</b>
				  <p>OTOgears.com dapat menautkan ke situs lain. Kami tidak bertanggung jawab atas konten atau kebijakan privasi dari situs pihak ketiga.</p>
				</li>
			    <li>
				  <b>Perubahan Kebijakan Privasi</b>
				  <p>ami dapat memperbarui kebijakan ini sewaktu-waktu. Versi terbaru akan selalu tersedia di halaman ini.</p>
				</li>
			    <li>
				  <b>Kontak</b>
				  <p>Untuk pertanyaan terkait privasi, hubungi kami di: <a href="mailto:kontak@otogears.com">kontak@otogears.com</a></p>
				</li>
			  </ol>
			</div>
		    <?php require ($_SERVER['OG'].'template/iklan/iklan-retangle.php')?>
          </section>
	  
	  
	  
	    </div>
	  </div>
	  <?php require ($_SERVER['OG'].'template/inc/sidebar.php')?>
	</div>
  </div>
  <?php $skinads='right';  require ($_SERVER['OG'].'template/iklan/iklan-skin.php')?>
</div>
<?php require ($_SERVER['OG'].'template/inc/footer.php')?>
<?php require ($_SERVER['OG'].'template/inc/base-bottom.php')?>