<?php 
  $page='menteng';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div class="rancak-container">
  <div class="rancak-form">
    <img class="rancak-form-bg" src="img/<?php echo $page; ?>.jpg?1"/>
  </div>
  <div class="rancak-form-box">
    <div aria-label="Date" class="rancak-form-input" style="top:14.1vw; left:59.2vw;">10 September 2024</div>
	
    <div aria-label="SPK No." class="rancak-form-input" style="top:16.4vw; left:58.9vw;">xxxx-xxxx-xxxx-xxxx</div>
	
    <div aria-label="Cust. Single ID" class="rancak-form-input" style="top:18.9vw; left:58.9vw;">LEX-00000</div>
	
    <div aria-label="Customer Name" class="rancak-form-input" style="width:28vw; height:4vw; top:27.7vw; left:19.2vw;">
	  Aufar Mahardi
	</div>
	
    <div aria-label="Company Name" class="rancak-form-input" style="width:28vw; height:2vw; top:31.8vw; left:19.2vw;">
	  Neo Fusion Indonesia
	</div>
	
    <div aria-label="Request tax invoice" aria-choice="No" class="rancak-form-input rancak-form-yesno" style="top:34.3vw; left:19.2vw;">
	  <div aria-label="Yes" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="No" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	</div>
	
    <div aria-label="NPWP" class="rancak-form-input rancak-form-npwp" style="top:36.9vw; left:19.2vw;">
	  <?php for ($i=1; $i <= 15 ; $i++) { ?>
	    <div class="rancak-form-npwp-box">0</div>
	  <?php } ?>
	</div>
	
    <div aria-label="Correspondent Address" class="rancak-form-input" style="width:28vw; height:6vw; top:39.4vw; left:19.2vw;">
	  Jl. Tebet Timur Dalam VIII H No.3, RT.11/RW.6, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820
	</div>
	
    <div aria-label="Phone Number" class="rancak-form-input" style="width:28vw; height:2vw; top:45.5vw; left:19.2vw;">
	  0000 00000000
	</div>
	
    <div aria-label="Fax Number" class="rancak-form-input" style="width:28vw; height:2vw; top:47.5vw; left:19.2vw;">
	  0000 00000000
	</div>
	
    <div aria-label="Mobile Number" class="rancak-form-input" style="width:28vw; height:2vw; top:49.6vw; left:19.2vw;">
	  62000000000000
	</div>
	
    <div aria-label="Email Address" class="rancak-form-input" style="width:28vw; height:2vw; top:51.7vw; left:19.2vw;">
	  me@aufarmahardi.com
	</div>
	
    <div aria-label="Contact Person Name" class="rancak-form-input" style="width:28vw; height:2vw; top:53.8vw; left:19.2vw;">
	  Auzan Alkhawarizmi
	</div>
	
    <div aria-label="Contact Person phone" class="rancak-form-input" style="width:28vw; height:2vw; top:55.8vw; left:19.2vw;">
	  62000000000000
	</div>
	
    <div aria-label="STNK Name" class="rancak-form-input" style="width:28vw; height:4vw; top:28.8vw; left:64.7vw;">
	  Aufar Mahardi
	</div>
	
    <div aria-label="STNK Address" class="rancak-form-input" style="width:28vw; height:4vw; top:32.9vw; left:64.7vw;">
	  Jl. Tebet Timur Dalam VIII H No.3, RT.11/RW.6, Tebet Tim., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12820
	</div>
	
    <div aria-label="Plate No Request" aria-choice="Yes" class="rancak-form-input rancak-form-yesno" style="top:39.5vw; left:64.7vw;">
	  <div aria-label="Yes" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="No" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	</div>
      <div aria-label="Plate No 1" class="rancak-form-input" style="width:28vw; height:2vw; top:43.3vw; left:65.8vw;">
        B 14 RIN
      </div>
      <div aria-label="Plate No 2" class="rancak-form-input" style="width:28vw; height:2vw; top:45.3vw; left:65.8vw;">
        D 1616 IT
      </div>
      <div aria-label="Plate No 3" class="rancak-form-input" style="width:28vw; height:2vw; top:47.5vw; left:65.8vw;">
        P 461 KK
      </div>
	
    <div aria-label="Note" class="rancak-form-input" style="width:28vw; height:5.5vw; top:51.6vw; left:64.7vw; line-height:1.8vw;">
	  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mi eget metus hendrerit ultrices. Fusce blandit, ex eu euismod placerat, quam diam rhoncus tortor, in pellentesque dui lectus ac augue. Sed vel metus urna. Cras quis ultrices erat.
	</div>
	
    <div aria-label="Car Type" class="rancak-form-input rancak-form-cartype" style="width:26vw; height:2vw; top:58.8vw; left:19.2vw;">
	  <div class="rancak-form-cartype-name">UX 250h F SPORT</div>
	  <div class="rancak-form-cartype-total">000</div>
	</div>
	
    <div aria-label="Exterior Color" class="rancak-form-input" style="width:28vw; height:2vw; top:60.85vw; left:19.2vw;">
	  Silver Metallic
	</div>
	
    <div aria-label="Interior Color" class="rancak-form-input" style="width:28vw; height:2vw; top:62.9vw; left:19.2vw;">
	  Black Carbon
	</div>
	
    <div aria-label="Lexus Ownership Package" class="rancak-form-input rancak-form-lop" style="top:65.9vw; left:18.8vw;">
	  <div aria-label="1" aria-check="yes" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="2" aria-check="yes" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="3" aria-check="no" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="4" aria-check="yes" class="rancak-form-checklist">
	    <?php require ($_SERVER['HY'].'img/check.svg')?>
	    <div class="rancak-form-lop-pgf">28%</div>
	  </div>
	</div>
	
    <div aria-label="Note" class="rancak-form-input" style="width:28vw; height:9.5vw; top:73.8vw; left:19.2vw; line-height:1.95vw;">
	  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed mi eget metus hendrerit ultrices. Fusce blandit, ex eu euismod placerat, quam diam rhoncus tortor, in pellentesque dui lectus ac augue. Sed vel metus urna. Cras quis ultrices erat.
	</div>
	
    <div aria-label="Frame No." class="rancak-form-input" style="width:36vw; top:84.7vw; left:11.8vw;">xxxx-xxxx-xxxx-xxxx</div>
	
    <div aria-label="Engine No." class="rancak-form-input" style="width:36vw; top:87.4vw; left:11.8vw;">xxxx-xxxx-xxxx-xxxx</div>
	
    <div aria-label="Price Calculation" class="rancak-form-input" style="width:24.5vw; height:1.7vw; top:59.8vw; left:64.7vw; line-height:1.8vw;">IDR 000.000.000.000</div>
	
    <div aria-label="OTR Info" class="rancak-form-input rancak-form-otr" style="width:15vw; height:7.5vw; top:64.5vw; left:52vw; line-height:1.8vw;">Off The Road Price</div>
	
    <div aria-label="OTR Price" class="rancak-form-input" style="width:24.5vw; height:7.5vw; top:64.5vw; left:68vw; line-height:1.8vw;">IDR 000.000.000.000</div>
	
    <div aria-label="Special Appreciation" class="rancak-form-input" style="width:24.5vw; height:1.9vw; top:73.0vw; left:68vw; line-height:1.8vw;">IDR 000.000.000</div>
	
    <div aria-label="Total Price" class="rancak-form-input" style="width:24.5vw; height:1.9vw; top:75.9vw; left:68vw; line-height:1.8vw;">IDR 000.000.000.000</div>
	
    <div aria-label="Choose Payment" aria-choice="Lease" class="rancak-form-input rancak-form-choosepayment" style="top:78.8vw; left:68.9vw;">
	  <div aria-label="Cash" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="Lease" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?><span>Adira Finance</span></div>
	</div>
	
    <div aria-label="NRC/RC" aria-choice="opt1" class="rancak-form-input rancak-form-yesno" style="top:82.6vw; left:65.1vw;">
	  <div aria-label="opt1" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="opt2" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div class="rancak-form-checklist-note">Lorem Ipsum</div>
	</div>
	
    <div aria-label="NP/P" aria-choice="opt2" class="rancak-form-input rancak-form-yesno" style="top:84.9vw; left:65.1vw;">
	  <div aria-label="opt1" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="opt2" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div class="rancak-form-checklist-note">Lorem Ipsum</div>
	</div>
	
    <div aria-label="NU/U" aria-choice="opt1" class="rancak-form-input rancak-form-yesno" style="top:87.3vw; left:65.1vw;">
	  <div aria-label="opt1" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div aria-label="opt2" class="rancak-form-checklist"><?php require ($_SERVER['HY'].'img/check.svg')?></div>
	  <div class="rancak-form-checklist-note">Lorem Ipsum</div>
	</div>
	
    <div aria-label="Syarat & Ketentuan" class="rancak-form-input rancak-form-term" style="top:89.8vw; left:4.7vw; width:45.2vw; height:34.2vw;">
      <div class="rft-title">Syarat dan Ketentuan:</div>
      <ul class="rft-list rft-number">
        <li>Harga yang tercantum dalam Formulir Pemesanan Lexus ini tidak mengikat.</li>
        <li>Formulir Pemesanan Lexus ini bukan Bukti Tanda Terima Pembayaran.</li>
        <li>
          Formulir Pemesanan Lexus ini dianggap SAH jika:
          <ul class="rft-list rft-letterup">
            <li>Ditandatangani oleh Pelanggan</li>
            <li>Disetujui oleh Pejabat Cabang</li>
            <li>Biaya pemesanan telah dibayar oleh Pelanggan</li>
          </ul>
        </li>
        <li>
          Pembayaran dengan menggunakan cek/transfer harus ditujukan kepada PT. Astra International Tbk. dan dianggap sah apabila diterbitkan kuitansi oleh PT. Atra International Tbk dan apabila pembayaran telah diterima di rekening PT. Astra International Tbk pada:
          <ul class="rft-list rft-square">
            <li>Bank Permata - Cabang Royal Sunter : 0701859820</li>
            <li>Bank BCA - Cabang Menara BCA Thamrin : 2050069853</li>
          </ul>
        </li>
        <li>Pembatalan akan dikenakan biaya booking sebesar 50%.</li>
        <li>Nama & Alamat STNK yang tercantum dalam Formulir Pemesanan Lexus ini tidak dapat diubah.</li>
        <li>Semua biaya tambahan dari permintaan khusus pada Proses STNK akan dibebankan kepada pelanggan.</li>
        <li>
          Berdasarkan peraturan pemerintah tentang perlindungan data pribadi, dengan menandatangani Formulir Pemesanan Lexus ini, Pelanggan menyatakan dan mengikatkan diri bahwa:
          <ul class="rft-list rft-letterlow">
            <li>Pelanggan memahami dan menyetujui bahwa PT. Astra International Tbk. dan PT. Toyota-Astra Motor (selaku Lexus Distributor) akan menerapkan sistem, prosedur, dan alat teknis untuk mengambil tindakan yang wajar dalam melindungi data pribadi yang diberikan oleh Pelanggan pada Formulir Pemesanan Penjualan Lexus.</li>
            <li>Pelanggan telah memahami dan menyetujui bahwa data yang diberikan akan dikumpulkan, dikelola, dan digunakan oleh PT. Astra International Tbk., PT. Toyota-Astra Motor (Lexus Distributor), atau; pihak lain yang ditunjuk oleh PT. Astra International Tbk. atau PT. Toyota-Astra Motor (Lexus Distributor);</li>
            <li>Pelanggan telah membaca, memahami, dan menyetujui syarat dan ketentuan terkait data pribadi sebagaimana tercantum dalam https://www.lexus.co.id/en/miscellaneous/legal-privacy.html</li>
            <li>PT. Astra International Tbk. dan PT. Toyota-Astra Motor (Lexus Distributor) memungkinkan untuk memberikan akses kepada afiliasi perusahaan untuk menggunakan data, berkomunikasi dengan pelanggan melalui berbagai saluran, dan memberikan informasi yang bermanfaat bagi pelanggan, serta melakukan studi untuk meningkatkan pengalaman produk & layanan berdasarkan preferensi pelanggan;</li>
            <li>Dalam hal tertentu, Pelanggan mewakili pihak lain dan memberikan data terkait dengan pihak yang diwakilinya, Pelanggan dengan ini menyatakan bahwa pihaknya telah memperoleh persetujuan dari pihak yang diwakilinya untuk memberikan data tersebut dan mengikat pihak yang diwakilinya dengan syarat dan ketentuan sebagaimana tercantum dalam Formulir Pemesanan Lexus.</li>
          </ul>
        </li>
      </ul>
	</div>
	
    <div aria-label="Term & Condition" class="rancak-form-input rancak-form-term" style="top:89.8vw; left:50.1vw; width:45.2vw; height:34.2vw;">
      <div class="rft-title">Term and Condition:</div>
      <ul class="rft-list rft-number">
        <li>The price listed in this Lexus Order Form is not binding.</li>
        <li>This Lexus Order Form is not a Payment Receipt.</li>
        <li>
          This Lexus Order Form is considered as LEGAL if :
          <ul class="rft-list rft-letterup">
            <li>Signed by the customer</li>
            <li>Approved by Lexus Dealer Management</li>
            <li>Booking fee has been paid by the customer</li>
          </ul>
        </li>
        <li>
          The payment using a check/transfer is considered valid if a receipt has been issued by PT. Astra International Tbk and if the payment has been received in the account of PT. Astra International Tbk on :
          <ul class="rft-list rft-square">
            <li>Bank Permata - Cabang Royal Sunter : 0701859820</li>
            <li>Bank BCA - Cabang Menara BCA Thamrin : 2050069853</li>
          </ul>
        </li>
        <li>Cancellation will be charged 50% of the booking fee.</li>
        <li>The STNK Name & Address listed in this Lexus Order Form can not be changed.</li>
        <li>All of the additional charges from the special request on the STNK Process will be charged to the customer.</li>
        <li>
          Based on government regulations regarding personal data protection, by signing this Lexus Order Form the customer declares and binds himself that:
          <ul class="rft-list rft-letterlow">
            <li>The customer understood and agreed that PT. Astra International Tbk. and PT. Toyota-Astra Motor (as Lexus Distributor) will implement system, procedure, and technical tools to take reasonable action to protect the personal data which provided by Customer on Lexus Sales Order Form.</li>
            <li>The customer has understood and agreed that the data provided will be collect, manage, and utilize by PT. Astra International Tbk., PT. Toyota-Astra Motor (Lexus Distributor), or other parties appointed by PT. Astra International Tbk.;</li>
            <li>The customer has read, understood and agreed to the terms and conditions related to personal data as stated in https://www.lexus.co.id/en/miscellaneous/legal-privacy.html;</li>
            <li>PT. Astra International Tbk. and PT. Toyota-Astra Motor (Lexus Distributor) allowed to grant access to company affiliation to use the data, to communicate with customer through multiple channel, and to provide information which beneficial for the customer, and also conduct study to improve product & services experience based on customer preferences.</li>
            <li>At the certain case, that the customer represents other party and provides data related to the party he represents, the customer hereby declares that his party has obtained approval from the party he represents to provide such data and binds the party he represents to the terms and conditions as stated in the Lexus Order Form.</li>
          </ul>
        </li>
      </ul>
	</div>
	
    <div aria-label="Signature" class="rancak-form-signature rancak-form-signature-<?php echo $page; ?>" style="top:126.1vw; left:7.3vw;">
	  <div class="rancak-form-signature-box">
	    <img src="img/sample/signature-1.png"/>
	  </div>
	  <div class="rancak-form-signature-box">
	    <img src="img/sample/signature-2.png"/>
	  </div>
	  <div class="rancak-form-signature-box">
	    <img src="img/sample/signature-3.png"/>
	  </div>
	  <div class="rancak-form-signature-box">
	    <img src="img/sample/signature-4.png"/>
	  </div>
	</div>
  </div>
</div>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>