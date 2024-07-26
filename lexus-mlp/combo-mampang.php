<?php 
  $page='mampang';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/combo-meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div class="rancak-container rancak-spk">



  <div class="top-default">
    <div class="top-default-logo">
	  <?php require ($_SERVER['HY'].'img/logo.svg')?>
	</div>
	<div class="top-default-title"><?php echo $page; ?> gallery</div>
  </div>
  
  
  
  <div class="header">
    <div class="header-left">
	  <b>PT. ANANTA AUTO ANDALAN</b>
	  <b class="header-left-dealer">lexus <?php echo $page; ?> gallery</b>
	  <p>JL. Mampang Prapatan 72, Jakarta 12790</p>
	  <p>Telp. : 62-217918 3000 (Hunting), Fax: 62-217918 3399</p>
	</div>
	<div class="header-right">
	  <div class="header-right-form">
	    <div class="hrf-label">Date</div>
	    <div class="hrf-separator">:</div>
	    <div class="input-result hrf-box hrf-box-outline">30 September 2024</div>
	  </div>
	  <div class="header-right-form">
	    <div class="hrf-label">SPK No.</div>
	    <div class="hrf-separator">:</div>
	    <div class="input-result hrf-box hrf-box-solid">XXXX-XXXX-XXXX-XXXX</div>
	  </div>
	  <div class="header-right-form">
	    <div class="hrf-label">Cust.Single ID</div>
	    <div class="hrf-separator">:</div>
	    <div class="input-result hrf-box hrf-box-solid">LXID-00000</div>
	  </div>
	</div>
  </div>
  
  
  
  <div class="mainform">
    <div class="mainform-head"><b>Lexus Order Form</b></div>
	<div class="mainform-side mainform-left">
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Customer Name</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:4vw">
		  Aufar Mahardi
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Company Name</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  OtoGear
		</div>
	  </div>
	
	  <div class="mainform-row mainform-choice">
	    <div class="mainform-label">Request Tax Invoice</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <div aria-choice="" class="mainform-choice-box">
		    <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			<div class="mcb-label">Yes</div>
		  </div>
		  <div aria-choice="this" class="mainform-choice-box">
		    <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			<div class="mcb-label">No</div>
		  </div>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-npwp">
	    <div class="mainform-label">NPWP</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <?php for ($i=1; $i <= 15 ; $i++) { ?>
            <div class="mainform-choice-box">
              <div class="mcb-frame">0</div>
            </div>
		  <?php } ?>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Correspondent Address</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:6vw">
		  Jl. Tebet Timur Dalam VIII H No.3, RT.11/RW.6, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Phone No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  622100000000
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Fax No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  622100000000
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Mobile No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  6280000000000
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Email</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  me@aufarmahardi.com
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Contact Person Name</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  me@aufarmahardi.com
		</div>
	  </div>
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Contact Person Phone No</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  6280000000000
		</div>
	  </div>
	</div>
	<div class="mainform-side mainform-right">
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">STNK Name</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:4vw">
		  Aufar Mahardi
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">STNK Address</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:6vw">
		  Jl. Tebet Timur Dalam VIII H No.3, RT.11/RW.6, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820
		</div>
	  </div>
	
	  <div class="mainform-row mainform-choice">
	    <div class="mainform-label">Plate No. Request</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <div aria-choice="this" class="mainform-choice-box">
		    <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			<div class="mcb-label">Yes</div>
		  </div>
		  <div aria-choice="" class="mainform-choice-box">
		    <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			<div class="mcb-label">No</div>
		  </div>
		  <div class="mainform-pno">
		    <div class="mainform-pno-label">*Plate Number Option:</div>
			<div class="mainform-pno-list">
			  <div class="mainform-pno-row">
			    <div class="mainform-pno-number">1.</div>
			    <div class="mainform-pno-data">B 14 RIN</div>
			  </div>
			  <div class="mainform-pno-row">
			    <div class="mainform-pno-number">2.</div>
			    <div class="mainform-pno-data">D 1616 IT</div>
			  </div>
			  <div class="mainform-pno-row">
			    <div class="mainform-pno-number">3.</div>
			    <div class="mainform-pno-data">P 461 KK</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">*Subject to Confirmation</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Notes</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:6vw">
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mi eget metus hendrerit ultrices. Fusce blandit, ex eu euismod placerat, quam diam rhoncus tortor, in pellentesque dui lectus ac augue. Sed vel metus urna. Cras quis ultrices erat.
		</div>
	  </div>
	  
	</div>
	<div class="mainform-side mainform-left">
	
	  <div class="mainform-row mainform-lexustype">
	    <div class="mainform-label">Lexus Type</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  <div class="mainform-lexustype-content">UX 250h F Sport</div>
		  <div class="mainform-lexustype-label">Qty</div>
		  <div class="mainform-lexustype-content">800</div>
		  <div class="mainform-lexustype-label">Unit</div>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Exterior Color</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  Black
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Interior Color</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  Leather
		</div>
	  </div>
	
	  <div class="mainform-row mainform-lop">
	    <div class="mainform-label">Lexus Ownership Package</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <div aria-choice="" class="mainform-lop-row">
		    <div class="mainform-lop-label">1. Lexus 5 Years Free Service & Maintenance</div>
		  </div>
		  <div aria-choice="" class="mainform-lop-row">
		    <div class="mainform-lop-label">2. Lexus 3 Years Warranty (Exc. Tire & Battery)</div>
		  </div>
		  <div aria-choice="" class="mainform-lop-row">
		    <div class="mainform-lop-label">3. Premium Autodetailing</div>
		  </div>
		  <div aria-choice="" class="mainform-lop-row">
		    <div class="mainform-lop-label">4. Premium Glass Film</div>
		  </div>
		  <div aria-choice="" class="mainform-lop-row">
		    <div class="mainform-lop-label">5. Lexus-GO 1 year free insurance all risk</div>
		  </div>
		  <div aria-choice="" class="mainform-lop-row">
		    <div class="mainform-lop-label">6. Free delivery</div>
		  </div>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Notes</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:6vw">
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mi eget metus hendrerit ultrices. Fusce blandit, ex eu euismod placerat, quam diam rhoncus tortor, in pellentesque dui lectus ac augue. Sed vel metus urna. Cras quis ultrices erat.
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Frame No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  XXXX-XXXX-XXXX-XXXX
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Engine No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  XXXX-XXXX-XXXX-XXXX
		</div>
	  </div>
	
	</div>
	<div class="mainform-side mainform-right">
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Price Calculation</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2.1vw">
		  IDR 999.000.000.000
		</div>
	  </div>
	
	  <div class="mainform-tableprice">
	    <div class="mainform-tableprice-row">
		  <div class="mainform-tableprice-column">
		    <div class="mainform-tableprice-content mainform-tableprice-center mainform-tableprice-head">
			  Item
			</div>
		  </div>
		  <div class="mainform-tableprice-column">
		    <div class="mainform-tableprice-content mainform-tableprice-center mainform-tableprice-head">
			  Amount
			</div>
		  </div>
		</div>
	    <div class="mainform-tableprice-row mainform-tableprice-otr">
		  <div class="mainform-tableprice-column">
		    <div class="mainform-tableprice-content mainform-tableprice-center">
			  On The Road Price
			</div>
		  </div>
		  <div class="mainform-tableprice-column">
		    <div class="mainform-tableprice-content">
			  IDR 800.000.000.000
			</div>
		  </div>
		</div>
	    <div class="mainform-tableprice-row">
		  <div class="mainform-tableprice-column">
		    <div class="mainform-tableprice-content mainform-tableprice-center">
			  Special Appreciation
			</div>
		  </div>
		  <div class="mainform-tableprice-column">
		    <div class="mainform-tableprice-content">
			  IDR 8.000.000.000
			</div>
		  </div>
		</div>
	    <div class="mainform-tableprice-row">
		  <div class="mainform-tableprice-column">
		    <div class="mainform-tableprice-content mainform-tableprice-center mainform-tableprice-total">
			  Total
			</div>
		  </div>
		  <div class="mainform-tableprice-column">
		    <div class="mainform-tableprice-content">
			  IDR 888.000.000.000
			</div>
		    <div class="mainform-tableprice-other">
			  <div aria-choice="" class="mainform-choice-box">
				<div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
				<div class="mcb-label">Cash</div>
			  </div>
			  <div aria-choice="this" class="mainform-choice-box">
				<div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
				<div class="mcb-lease">
				  <div class="mcb-lease-label">Lease by:</div>
				  <div class="mcb-lease-data">Lorem Ipsum</div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	
	</div>
	<div class="mainform-side mainform-left">
	
	  <div class="mainform-info">
	    <div class="mainform-info-title">Syarat dan Ketentuan:</div>
		<ul class="mainform-info-list mainform-info-number">
		  <li>Harga yang tercantum dalam Formulir Pemesanan Lexus ini tidak mengikat.</li>
		  <li>Formulir Pemesanan Lexus ini bukan Bukti Tanda Terima Pembayaran.</li>
		  <li>
		    Formulir Pemesanan Lexus ini dianggap SAH jika :
			<ul class="mainform-info-list mainform-info-letterup">
			  <li>Ditandatangani oleh Pelanggan</li>
			  <li>Disetujui oleh Pejabat Cabang</li>
			  <li>Biaya pemesanan telah dibayar oleh Pelanggan</li>
			</ul>
		  </li>
		  <li>Pembayaran dengan menggunakan cek/transfer harus ditujukan kepada PT. Ananta Auto Andalan dan dianggap sah apabila diterbitkan kuitansi oleh PT. Ananta Auto Andalan dan apabila pembayaran telah diterima di rekening PT. Ananta Auto Andalan.</li>
		  <li>Pembatalan akan dikenakan biaya booking sebesar 50%.</li>
		  <li>Nama & Alamat STNK yang tercantum dalam Formulir Pemesanan Lexus ini tidak dapat diubah.</li>
		  <li>Semua biaya tambahan dari permintaan khusus pada Proses STNK akan dibebankan kepada pelanggan.</li>
		  <li>
		    Berdasarkan peraturan pemerintah tentang perlindungan data pribadi, dengan menandatangani Formulir Pemesanan Lexus ini, Pelanggan menyatakan dan mengikatkan diri bahwa:
			<ul class="mainform-info-list mainform-info-letterlow">
			  <li>Pelanggan memahami dan menyetujui bahwa PT. Ananta Auto Andalan dan PT. Toyota-Astra Motor (selaku Lexus Distributor) akan menerapkan sistem, prosedur, dan alat teknis untuk mengambil tindakan yang wajar dalam melindungi data pribadi yang diberikan oleh Pelanggan pada Formulir Pemesanan Penjualan Lexus.</li>
			  <li>Pelanggan telah memahami dan menyetujui bahwa data yang diberikan akan dikumpulkan, dikelola, dan digunakan oleh PT. Ananta Auto Andalan, PT. Toyota-Astra Motor (Lexus Distributor), atau pihak lain yang ditunjuk oleh PT. Ananta Auto Andalan atau PT. Toyota-Astra Motor (Lexus Distributor) di wilayah pemasaran kami;</li>
			  <li>Pelanggan telah membaca, memahami, dan menyetujui syarat dan ketentuan terkait data pribadi sebagaimana tercantum dalam https://www.lexus.co.id/en/miscellaneous/legal-privacy.html</li>
			  <li>PT. Toyota-Astra Motor(Lexus Distributor) memungkinkan untuk memberikan akses kepada pihak yang bekerja sama dengan PT. Toyota-Astra Motor(Lexus Distributor) untuk menggunakan data, berkomunikasi dengan pelanggan melalui berbagai saluran, dan memberikan informasi yang bermanfaat bagi pelanggan, serta melakukan studi untuk meningkatkan pengalaman produk & layanan berdasarkan preferensi pelanggan;</li>
			  <li>Dalam hal tertentu, Pelanggan mewakili pihak lain dan memberikan data terkait dengan pihak yang diwakilinya, Pelanggan dengan ini menyatakan bahwa pihaknya telah memperoleh persetujuan dari pihak yang diwakilinya untuk memberikan data tersebut dan mengikat pihak yang diwakilinya dengan syarat dan ketentuan sebagaimana tercantum dalam Formulir Pemesanan Lexus. Pelanggan bertanggung jawab penuh atas pencantuman, penggunaan, termasuk kebenaran data pribadi tersebut, serta membebaskan PT. Ananta Auto Andalan dan/atau PT. Toyota-Astra Motor (Lexus Distributor) dari dan atas semua tanggung jawab, kerugian, klaim yang akan atau mungkin timbul akibat pemcantuman dan/atau penggunaan data pribadi di luar data Pelanggan dalam formulir Pemesan ini berdasarkan peraturan perundang-undangan yang berlaku.</li>
			  <li>Dalam hal Pelanggan ingin memperbaiki data, mengakhiri pemrosesan, menarik persetujuan, mengajukan keberatan, membatasi pemrosesan data dirinya secara proporsional, menghapus, serta hak lain sesuai dengan Peraturan Perundang-Undangan, Pemesan dapat mengajukan permohonan secara tertulis kepada PT. Ananta Auto Andalan dan/atau PT. Toyota-Astra Motor (Lexus Distributor).</li>
			</ul>
		  </li>
		</ul>
	  </div>
	  
	</div>
	<div class="mainform-side mainform-right">
	
	  <div class="mainform-info">
	    <div class="mainform-info-title">Term and Condition:</div>
		<ul class="mainform-info-list mainform-info-number">
		  <li>The price listed in this Lexus Order Form is not binding.</li>
		  <li>This Lexus Order Form is not a Payment Receipt.</li>
		  <li>
		    This Lexus Order Form is considered as LEGAL if :
			<ul class="mainform-info-list mainform-info-letterup">
			  <li>Signed by the customer</li>
			  <li>Approved by Lexus Dealer Management</li>
			  <li>Booking fee has been paid by the customer</li>
			</ul>
		  </li>
		  <li>The payment using a check/transfer is considered valid if a receipt has been issued by PT. Ananta Auto Andalan and if the payment has been received in the account of PT. Ananta Auto Andalan.</li>
		  <li>Cancellation will be charged 50% of the booking fee.</li>
		  <li>The STNK Name & Address listed in this Lexus Order Form can not be changed.</li>
		  <li>All of the additional charges from the special request on the STNK Process will be charged to the customer.</li>
		  <li>
		    Based on government regulations regarding personal data protection, by signing this Lexus Order Form the customer declares and binds himself that:
			<ul class="mainform-info-list mainform-info-letterlow">
			  <li>The customer understood and agreed that PT. Ananta Auto Andalan and PT. Toyota-Astra Motor (as Lexus Distributor) will implement system, procedure, and technical tools to take reasonable action to protect the personal data which provided by Customer on Lexus Sales Order Form.</li>
			  <li>The customer has understood and agreed that the data provided will be collect, manage, and utilize by PT. Ananta Auto Andalan and PT. Toyota-Astra Motor (Lexus Distributor), or other parties appointed by PT. Toyota-Astra Motor (Lexus Distributor) in our marketing territory;</li>
			  <li>The customer has read, understood and agreed to the terms and conditions related to personal data as stated in https://www.lexus.co.id/en/miscellaneous/legal-privacy.html;</li>
			  <li>PT. Ananta Auto Andalan and PT. Toyota-Astra Motor (Lexus Distributor) allowed to grant access to party who cooperates with PT. Toyota-Astra Motor (Lexus Distributor) to use the data, to communicate with customer through multiple channel, and to provide information which beneficial for the customer, and also conduct study to improve product & services experience based on customer preferences.</li>
			  <li>At the certain case, that the customer represents other party and provides data related to the party he represents, the customer hereby declares that his party has obtained approval from the party he represents to provide such data and binds the party he represents to the terms and conditions as stated in the Lexus Order Form. Customers are fully responsible for the inclusion, usage, and accuracy of such personal data, as well as discharging PT. Ananta Auto Andalan and/or PT. Toyota-AstraMotor (Lexus Distributor) from and for all responsibilities, losses and claims that will or may occur as a result of the inclusion and/or usage of personal data other than Customer Data in this Order Form based on applicable laws and regulations.</li>
			  <li>In the event that the Customer wishes to correct the data, end processing, withdraw consent, submit and objection, limit the processing of his or her data proportionally, delete, as well as other rights in accordance with the Laws and Regulations, the Customer can submit a written request to PT. Ananta Auto Andalan and/or and PT. Toyota-Astra Motor (Lexus Distributor).</li>
			</ul>
		  </li>
		</ul>
	  </div>
	  
	</div>
	<div class="mainform-side mainform-left">
	
	  <div class="mainform-signature mainform-signature-1">
	    <div class="mainform-signature-box">
		  <div class="msb-label">Brand Associate</div>
		  <div class="msb-frame">
		    <img src="img/sample/signature-1.png"/>
		  </div>
		</div>
	    <div class="mainform-signature-box">
		  <div class="msb-label">Sales Manager</div>
		  <div class="msb-frame">
		    <img src="img/sample/signature-2.png"/>
		  </div>
		</div>
	    <div class="mainform-signature-box">
		  <div class="msb-label">Customer</div>
		  <div class="msb-frame">
		    <img src="img/sample/signature-3.png"/>
		  </div>
		</div>
	  </div>
	  
	</div>
	<div class="mainform-side mainform-right">
	
	  <div class="mainform-qr">
	    <div class="mainform-qr-box">
		  <div class="mainform-qr-label">
		    Visit<br/>
			<b>Lexus</b> Website
		  </div>
		  <div class="mainform-qr-code">
		    <img src="img/qr-website.svg"/>
		  </div>
		</div>
	    <div class="mainform-qr-box">
		  <div class="mainform-qr-label">
		    Download<br/>
			<b>Lexus</b> Reach<br/>
			App
		  </div>
		  <div class="mainform-qr-code">
		    <img src="img/qr-apps.svg"/>
		  </div>
		</div>
	  </div>
	  
	</div>
  </div>
  
  
  
  <div class="footer">
    Distribution : 1. Accounting; 2. Lexus Administration; 3.Customer
  </div>
  
  
  
</div>




<div class="rancak-container rancak-afi">



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
		    <li>B 14 RIN</li>
		    <li>P 4G1 KK</li>
		    <li>AD 418 U</li>
		    <li>N 456 OR</li>
		  </ol>
		</li>
	    <li class="mainform-document-right">
		  <b>Pengurusan (diisi salah satu)</b>
		  <ol class="custom-plate-by">
		    <li aria-choice="">
			  <div class="cpb-column">
                <div class="cpb-label">Via Lexus</div>
                <div class="cpb-box">
                  <?php require ($_SERVER['HY'].'img/check.svg')?>
                </div>
			  </div>
			</li>
		    <li aria-choice="this">
			  <div class="cpb-column">
                <div class="cpb-label">Lain-lain</div>
                <div class="cpb-box">
                  <?php require ($_SERVER['HY'].'img/check.svg')?>
                </div>
				<ul class="cpb-data">
				  <li>
				    <div class="cpb-data-list">
					  <div class="cpb-data-label">Nama BJ/PIC</div>
					  <div class="cpb-data-field">John Price</div>
					</div>
				  </li>
				  <li>
				    <div class="cpb-data-list">
					  <div class="cpb-data-label">No Telp</div>
					  <div class="cpb-data-field">62800 0000 0000</div>
					</div>
				  </li>
				</ul>
			  </div>
			</li>
		  </ol>
		</li>
	  </ol>
	</div>
	
	
	
	<div class="mainform-box mainform-footer">
      <div class="mainform-info">
	    <div class="mainform-info-title">KETERANGAN:</div>
		<ul class="mainform-info-list mainform-info-number">
		  <li>
		    Pengiriman STNK & BPKB <br/>
			STNK & BPKB akan dikirim ke alamat pengiriman STNK & BPKB sesuai dengan yang tercantum diatas.
		  </li>
		  <li>
		    Pajak Progresif <br/>
			Untuk pengajuan STNK & BPKB, apabila dikenakan pajak progresif, maka selisih atas penambahan Pajak Progresif menjadi tanggung jawab customer. STNK & BPKB akan diserahkan setelah Customer menyelesaikan kewajiban atas pajak tersebut.
			<ul class="mainform-info-list mainform-info-square">
			  <li>Tarif Progresif untuk kendaraan ke-2 (2% dari NJKB) **)</li>
			  <li>Tarif Progresif untuk kendaraan ke-3 (2,5% dari NJKB) **)</li>
			  <li>Tarif Progresif untuk kendaraan ke-4 dst. (4% dari NJKB) **)</li>
			</ul>
		  </li>
		  <li>
		    Biaya Pilnop*)<br/>
			Lexus Indonesia akan membantu dalam pencarian Nomor Polisi sesual dengen opsi pilihan nomor polisi yang diajukan oleh Customer (Max. 5 pilihan)
		  </li>
		  <li>
		    Penyediaan Plat Sementara*)<br/>
			Lexus Indonesia akan menyediakan Plat Nomor Sementara selama customer menunggu proses STNK (satu bulan/satu kali pembuatan). Apabila STNK Udak selesai dalam waktu 1 bulan dikarenakan ketidaklengkapan data oleh customer pada awal pemesanan maka setiap perpanjangan Plat Nomor Sementara berikutnya akan menjadi langgung jawab customer.
		  </li>
		  <li>
		    Masa Berlaku Dokumen Perusahaan<br/>
			Untuk masa berlaku dokumen perusahaan, Min. 6 bulan masih berlaku pada saat pemesanan kendaraan.<br/>
			*) Ketersediaan Plat Nomor Sementara dan Nomor Polisi merupakan kewenangan Pihak Kepolisian wilayah setempat dan tidak menjadi tanggung jawab Pihak Lexus Indonesia.<br/>
			**) Untuk tarif pajak progresif diluar Jakarta, maka akan disesuaikan dengan tarif daerah masing-masing.
		  </li>
		</ul>
	  </div>
	  
	  <div class="mainform-signature">
        <?php 
          $signature_array = array();
          $signature_array[]=array(
            'signature_label'=>'Customer',
            'signature_img'=>'1',
            'signature_name'=>'John Price',
            'signature_date'=>'30 September 2024'
		  );
          $signature_array[]=array(
            'signature_label'=>'STNK & BPKB Name',
            'signature_img'=>'2',
            'signature_name'=>'John MacTavish',
            'signature_date'=>'30 September 2024'
		  );
          $signature_array[]=array(
            'signature_label'=>'Brand Associate',
            'signature_img'=>'3',
            'signature_name'=>'Kyle Garrick',
            'signature_date'=>'30 September 2024'
		  );
          $signature_array[]=array(
            'signature_label'=>'FAH',
            'signature_img'=>'4',
            'signature_name'=>'Simon Riley',
            'signature_date'=>'30 September 2024'
		  );
          foreach($signature_array as $signature_list){
        ?>
          <div class="mainform-signature-box">
            <div class="msb-title"><?php echo($signature_list['signature_label'])?></div>
            <div class="msb-frame"><img src="img/sample/signature-<?php echo($signature_list['signature_img'])?>.png"/></div>
            <div class="msb-info">
			  <div class="msb-info-label">Name:</div>
			  <div class="msb-info-data"><?php echo($signature_list['signature_name'])?></div>
			</div>
            <div class="msb-info">
			  <div class="msb-info-label">Date:</div>
			  <div class="msb-info-data"><?php echo($signature_list['signature_date'])?></div>
			</div>
          </div>
        <?php } ?>
	  </div>
	</div>
	
	
	
  </div>
  
  
  
  <div class="footer">
    Distribution : 1. Accounting; 2. Lexus Administration; 3.Customer
  </div>
  
  
  
</div>





<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>