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
		    <?php $section_title='Terms of Service'; require ($_SERVER['OG'].'template/module/section-title.php')?>
            <div class="information-page">
			  <h2 class="information-opening">Dengan mengakses situs ini, Anda dianggap telah membaca, memahami, dan menyetujui untuk terikat oleh syarat dan ketentuan penggunaan berikut:</h2>
			  
			  <ol class="information-list">
			    <li>
				  <b>Definisi</b>
				  <p>"Situs" merujuk pada www.otogears.com dan seluruh subdomainnya.</p>
				  <p>"Pengguna" merujuk pada setiap individu yang mengakses atau menggunakan layanan di situs ini.</p>
				  <p>"Konten" mencakup artikel, video, gambar, ulasan, dan data lainnya yang tersedia di situs.</p>
				</li>
			    <li>
				  <b>Akses dan Penggunaan Situs</b>
				  <p>Anda setuju untuk menggunakan situs ini hanya untuk keperluan yang sah dan tidak melanggar hukum, norma sosial, atau hak pihak ketiga.</p>
				</li>
			    <li>
				  <b>Kepemilikan Konten</b>
				  <p>Seluruh konten yang tersedia di OTOgears.com dilindungi oleh undang-undang hak cipta. Dilarang menyalin, mereproduksi, memodifikasi, atau menyebarkan konten tanpa izin tertulis dari kami.</p>
				</li>
			    <li>
				  <b>Komentar dan Interaksi</b>
				  <p>Pengguna bertanggung jawab penuh atas konten komentar yang dikirimkan. OTOgears.com berhak menghapus komentar yang mengandung SARA, ujaran kebencian, spam, atau yang melanggar hukum.</p>
				</li>
			    <li>
				  <b>Iklan dan Afiliasi</b>
				  <p>OTOgears.com dapat menampilkan iklan dari pihak ketiga, termasuk merek otomotif dan teknologi. Kami tidak bertanggung jawab atas isi atau kebijakan privasi dari pihak pengiklan.</p>
				</li>
			    <li>
				  <b>Penafian</b>
				  <p>Informasi di situs ini disediakan sebagaimana adanya dan untuk tujuan informasi umum. Kami tidak menjamin akurasi, kelengkapan, atau keandalan informasi.</p>
				</li>
			    <li>
				  <b>Perubahan Layanan</b>
				  <p>Kami berhak mengubah, menangguhkan, atau menghentikan sebagian atau seluruh layanan tanpa pemberitahuan sebelumnya.</p>
				</li>
			    <li>
				  <b>Hukum yang Berlaku</b>
				  <p>Syarat dan ketentuan ini diatur oleh hukum Republik Indonesia.</p>
				</li>
			    <li>
				  <b>Hubungi Kami</b>
				  <p>Jika Anda memiliki pertanyaan terkait halaman ini, silakan hubungi: <a href="mailto:kontak@otogears.com">kontak@otogears.com</a></p>
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