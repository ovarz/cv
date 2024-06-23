<?php 
  $page='menteng';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/opt2-meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div class="rancak-container">



  <div class="top-default">
    <div class="top-default-logo">
	  <?php require ($_SERVER['HY'].'img/logo.svg')?>
	</div>
	<div class="top-default-title"><?php echo $page; ?> gallery</div>
  </div>
  
  
  
  <div class="header">
    <div class="header-left">
	  <b>PT. ASTRA INTERNATIONAL Tbk</b>
	  <b class="header-left-dealer">lexus <?php echo $page; ?> gallery</b>
	  <p>Proklamasi No.35, Central Jakarta - 10320</p>
	  <p>Tel: (021) 390-1325, Mon-Fri : 8.30 am - 4.30 pm, Sat : 08.00 am - 02.00 pm</p>
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
		<div class="mainform-data" style="height:2vw">
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
		<div class="mainform-data" style="height:2vw">
		  622100000000
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Fax No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  622100000000
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Mobile No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  6280000000000
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Email</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  me@aufarmahardi.com
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Contact Person Name</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  me@aufarmahardi.com
		</div>
	  </div>
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Contact Person Phone No</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
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
		<div class="mainform-data">
		  <div class="mainform-lexustype-content">UX 250h F Sport</div>
		  <div class="mainform-lexustype-label">Qty</div>
		  <div class="mainform-lexustype-content">800</div>
		  <div class="mainform-lexustype-label">Unit</div>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Exterior Color</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  Black
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Interior Color</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  Leather
		</div>
	  </div>
	
	  <div class="mainform-row mainform-lop">
	    <div class="mainform-label">Lexus Ownership Package</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <div aria-choice="check" class="mainform-lop-row">
		    <div class="mainform-lop-check"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
		    <div class="mainform-lop-label">1. Lexus 5 Years Free Service & Maintenance</div>
		  </div>
		  <div aria-choice="" class="mainform-lop-row">
		    <div class="mainform-lop-check"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
		    <div class="mainform-lop-label">2. Lexus 3 Years Warranty (Exc. Tire & Battery)</div>
		  </div>
		  <div aria-choice="check" class="mainform-lop-row">
		    <div class="mainform-lop-check"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
		    <div class="mainform-lop-label">3. Premium Autodetailing</div>
		  </div>
		  <div aria-choice="check" class="mainform-lop-row">
		    <div class="mainform-lop-check"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
		    <div class="mainform-lop-label">4. Premium Glass Film</div>
		  </div>
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Notes</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:10vw">
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mi eget metus hendrerit ultrices. Fusce blandit, ex eu euismod placerat, quam diam rhoncus tortor, in pellentesque dui lectus ac augue. Sed vel metus urna. Cras quis ultrices erat.
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Frame No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  XXXX-XXXX-XXXX-XXXX
		</div>
	  </div>
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Engine No.</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data" style="height:2vw">
		  XXXX-XXXX-XXXX-XXXX
		</div>
	  </div>
	
	</div>
	<div class="mainform-side mainform-right">
	
	  <div class="mainform-row mainform-default">
	    <div class="mainform-label">Price Calculation</div>
		<div class="mainform-separator">:</div>
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
	
	  <div class="mainform-row mainform-fbl">
	    <div class="mainform-label">*Filled by Lexus</div>
		<div class="mainform-separator">:</div>
		<div class="mainform-data">
		  <div class="mainform-fbl-row">
		    <div aria-choice="" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">NRC</div>
		    </div>
		    <div aria-choice="this" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">RC</div>
		    </div>
			<div class="mainform-fbl-note">
			  <div class="mainform-fbl-note-label">Notes:</div>
			  <div class="mainform-fbl-note-data">Lorem Ipsum</div>
			</div>
		  </div>
		  <div class="mainform-fbl-row">
		    <div aria-choice="this" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">NP</div>
		    </div>
		    <div aria-choice="" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">P</div>
		    </div>
			<div class="mainform-fbl-note">
			  <div class="mainform-fbl-note-label">Notes:</div>
			  <div class="mainform-fbl-note-data">Lorem Ipsum</div>
			</div>
		  </div>
		  <div class="mainform-fbl-row">
		    <div aria-choice="" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">NU</div>
		    </div>
		    <div aria-choice="this" class="mainform-choice-box">
		      <div class="mcb-frame"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
			  <div class="mcb-label">U</div>
		    </div>
			<div class="mainform-fbl-note">
			  <div class="mainform-fbl-note-label">Notes:</div>
			  <div class="mainform-fbl-note-data">Lorem Ipsum</div>
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
		    Formulir Pemesanan Lexus ini dianggap SAH jika:
			<ul class="mainform-info-list mainform-info-letterup">
			  <li>Ditandatangani oleh Pelanggan</li>
			  <li>Disetujui oleh Pejabat Cabang</li>
			  <li>Biaya pemesanan telah dibayar oleh Pelanggan</li>
			</ul>
		  </li>
		  <li>
		    Pembayaran dengan menggunakan cek/transfer harus ditujukan kepada PT. Astra International Tbk. dan dianggap sah apabila diterbitkan kuitansi oleh PT. Atra International Tbk dan apabila pembayaran telah diterima di rekening PT. Astra International Tbk pada:
			<ul class="mainform-info-list mainform-info-square">
			  <li>Bank Permata - Cabang Royal Sunter : 0701859820</li>
			  <li>Bank BCA - Cabang Menara BCA Thamrin : 2050069853</li>
			</ul>
		  </li>
		  <li>Pembatalan akan dikenakan biaya booking sebesar 50%.</li>
		  <li>Nama & Alamat STNK yang tercantum dalam Formulir Pemesanan Lexus ini tidak dapat diubah.</li>
		  <li>Semua biaya tambahan dari permintaan khusus pada Proses STNK akan dibebankan kepada pelanggan.</li>
		  <li>
		    Berdasarkan peraturan pemerintah tentang perlindungan data pribadi, dengan menandatangani Formulir Pemesanan Lexus ini, Pelanggan menyatakan dan mengikatkan diri bahwa:
			<ul class="mainform-info-list mainform-info-letterlow">
			  <li>Pelanggan memahami dan menyetujui bahwa PT. Astra International Tbk. dan PT. Toyota-Astra Motor (selaku Lexus Distributor) akan menerapkan sistem, prosedur, dan alat teknis untuk mengambil tindakan yang wajar dalam melindungi data pribadi yang diberikan oleh Pelanggan pada Formulir Pemesanan Penjualan Lexus.</li>
			  <li>Pelanggan telah memahami dan menyetujui bahwa data yang diberikan akan dikumpulkan, dikelola, dan digunakan oleh PT. Astra International Tbk., PT. Toyota-Astra Motor (Lexus Distributor), atau; pihak lain yang ditunjuk oleh PT. Astra International Tbk. atau PT. Toyota-Astra Motor (Lexus Distributor);</li>
			  <li>Pelanggan telah membaca, memahami, dan menyetujui syarat dan ketentuan terkait data pribadi sebagaimana tercantum dalam https://www.lexus.co.id/en/miscellaneous/legal-privacy.html</li>
			  <li>PT. Astra International Tbk. dan PT. Toyota-Astra Motor (Lexus Distributor) memungkinkan untuk memberikan akses kepada afiliasi perusahaan untuk menggunakan data, berkomunikasi dengan pelanggan melalui berbagai saluran, dan memberikan informasi yang bermanfaat bagi pelanggan, serta melakukan studi untuk meningkatkan pengalaman produk & layanan berdasarkan preferensi pelanggan;</li>
			  <li>Dalam hal tertentu, Pelanggan mewakili pihak lain dan memberikan data terkait dengan pihak yang diwakilinya, Pelanggan dengan ini menyatakan bahwa pihaknya telah memperoleh persetujuan dari pihak yang diwakilinya untuk memberikan data tersebut dan mengikat pihak yang diwakilinya dengan syarat dan ketentuan sebagaimana tercantum dalam Formulir Pemesanan Lexus.</li>
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
		  <li>
		    The payment using a check/transfer is considered valid if a receipt has been issued by PT. Astra International Tbk and if the payment has been received in the account of PT. Astra International Tbk on :
			<ul class="mainform-info-list mainform-info-square">
			  <li>Bank Permata - Cabang Royal Sunter : 0701859820</li>
			  <li>Bank BCA - Cabang Menara BCA Thamrin : 2050069853</li>
			</ul>
		  </li>
		  <li>Cancellation will be charged 50% of the booking fee.</li>
		  <li>The STNK Name & Address listed in this Lexus Order Form can not be changed.</li>
		  <li>All of the additional charges from the special request on the STNK Process will be charged to the customer.</li>
		  <li>
		    Based on government regulations regarding personal data protection, by signing this Lexus Order Form the customer declares and binds himself that:
			<ul class="mainform-info-list mainform-info-letterlow">
			  <li>The customer understood and agreed that PT. Astra International Tbk. and PT. Toyota-Astra Motor (as Lexus Distributor) will implement system, procedure, and technical tools to take reasonable action to protect the personal data which provided by Customer on Lexus Sales Order Form.</li>
			  <li>The customer has understood and agreed that the data provided will be collect, manage, and utilize by PT. Astra International Tbk., PT. Toyota-Astra Motor (Lexus Distributor), or other parties appointed by PT. Astra International Tbk.;</li>
			  <li>The customer has read, understood and agreed to the terms and conditions related to personal data as stated in https://www.lexus.co.id/en/miscellaneous/legal-privacy.html;</li>
			  <li>PT. Astra International Tbk. and PT. Toyota-Astra Motor (Lexus Distributor) allowed to grant access to company affiliation to use the data, to communicate with customer through multiple channel, and to provide information which beneficial for the customer, and also conduct study to improve product & services experience based on customer preferences.</li>
			  <li>At the certain case, that the customer represents other party and provides data related to the party he represents, the customer hereby declares that his party has obtained approval from the party he represents to provide such data and binds the party he represents to the terms and conditions as stated in the Lexus Order Form.</li>
			</ul>
		  </li>
		</ul>
	  </div>
	  
	</div>
	<div class="mainform-side mainform-left">
	
	  <div class="mainform-signature mainform-signature-1">
	    <div class="mainform-signature-box">
		  <div class="msb-label">BA</div>
		  <div class="msb-frame">
		    <img src="img/sample/signature-1.png"/>
		  </div>
		</div>
	    <div class="mainform-signature-box">
		  <div class="msb-label">Customer</div>
		  <div class="msb-frame">
		    <img src="img/sample/signature-2.png"/>
		  </div>
		</div>
	    <div class="mainform-signature-box">
		  <div class="msb-label">Sales Supervisor</div>
		  <div class="msb-frame">
		    <img src="img/sample/signature-3.png"/>
		  </div>
		</div>
	    <div class="mainform-signature-box">
		  <div class="msb-label">Branch Manager</div>
		  <div class="msb-frame">
		    <img src="img/sample/signature-4.png"/>
		  </div>
		</div>
	  </div>
	  
	</div>
	<div class="mainform-side mainform-right">
	
	  <div class="mainform-qr">
	    qr
	  </div>
	  
	</div>
  </div>
  
  
  
</div>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>