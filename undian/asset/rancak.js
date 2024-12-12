$(document).ready(function () {
    // Array daftar nama yang bisa terpilih
    let NameList = ["MAYA SOFYANTHI","AGNES SEVIYANI","RUHMAH AGUS TRISSANTI","SEPTIA RIZKY UTAMI","ADRIAN GANTIRA","SUPRAYUDI","ADILA NURLIANA SARI","DWI WIDAYANTHI","ACHMAD FADLIH","EPIPHANIAS SAMUEL SIAHAAN","DONNY ADHIYASA","MUHAMMAD INDRA NUGRAHA","RIKI ILHAM RAFLES","ROBBI YANTO","SYAHDAN NURDIN","DIAN LESTARI NINGSIH","LUZMAN RIFQI KARAMI","SUMIYATI","AGUS RAHMAT","AIZ BUDHI","ANWAR SADAT","BAYU JANUAR NUGRAHA","FOE PEACE MAYEL DAY SIMBOLON","ICHSAN SUHENDRA","ISRA BERLIAN","JEFFRY YANTO SUDIBYO","M EDWIN FIRDAUS","MOH.ARIEF HIDAYAT","RETTA PUTRI SAPTA MARGA","RIFKI ARSILAN","YUNISA HERAWATI","AHMAD FARHAN FARIS","KRISNA WICAKSONO","LUTFI DWI PUJIASTUTI","M. FIKRI HALIM","BAYU ADI WICAKSONO","DEDY PRIATMOJO","LIS YULIAWATI","RADEN JIHAD AKBAR","RADEN LAZUARDHI UTAMA RIFKY","R RADHITYA ANDRIANSYAH","ZAKI ALYAMANI","MOCH. ALI WAFA","MOHAMMAD YUDHA PRASETYA","HARDANI TRIYOGA","AUFAR MAHARDI","DAVID ROGER RORIMPANDEY","ERICK CHRIST WIBOWO","DADE RAHMAT PRAYOGI","ROSIKIN","DWI AGUS SURYA ISKANDAR","KURNEN PERMANA PUTRA","KHOLIDAH","BINTERI PUTRI AFSARI","DINI HARTINI","REGITA LORENA BR. SINUHAJI","DERA FITRI ADHYTIA HARTANTI","NURAENI","WASISTO WIYOSO","AISHA KAMIELA INDRIYANI","PUTRI SEKARARUM","TRISYA FRIDA YULIANITA","ANISA AULIA","NATANIA LONDONG","RESKI KURNIA AYUNINGSIH","IMAN TAUFIK SETIADI","SURYA ADITIYA","ARIANTI WIDYA KUSUMASTUTI","WAKHID NUSA BAKTI","RAHMAT FATAHILLAH ILHAM","RIZKYA FAJARANI BAHAR","MUHAMMAD MAHBUB IRSYADUL AMAL","YENI LESTARI","ZENDY PRADANA","VIVI WIDIYASTUTI","SITI ADISYA KIRANA","HELSA ALVINA","RIZKY PRIMA ANANDA","MUHAMMAD RIDHO HIDAYATULLOH","YOSI RIZKY YUNIAR","ABDUL AZIZ MASINDO","YANDHIKA ASA FORTUNA","AYESHA PURI","SISKA PERMATA SARI","AINUNI RAHMITA","REYGEN ALFRED GANGGALI","MUHAMMAD THOIFUR","AWALUDIN","CHOIRUL UMAM","JAYADI","TIRTA KUSUMA","SYAMSUDIN","SYARIPUDDIN","TEGUH PRIYANTO"];

    // Array daftar nama yang tidak akan terpilih
    let NameListMain = ["MUHAMMAD ZAKKY AZHARI","LALU MARA SATRIAWANGSA","SANTANA MUHARAM","MARCUS ERWIN ADITYA LAKSMANA YUDHA, S.SOS","SIGIT WASESO","DODI ISWARMAN HASAN","MUHAMMAD IQBAL","MUHAMMAD HASBI ZAKIRI","NATHAN PUTRA WIJAYA","BAGUS STYA RAHMAT","REZKY PARMA","AYU MAGFIRAH HIPPY","GERALDI MUHAMMAD YUSHAR","MUHAMAD RIZAL AZHARI","FHIZYEL NAZARETA","RABBANI AL FARIDZI","MUHAMAD ASKI BAIHAKI","M. IMAM IBRAHIM","AHMAD ARIF RAMADANSYAH","RETNA SUHADA","KAISAR HENDY PRABOWO","RUSSELL SEGIANTO"];

    // Gabungkan array untuk animasi (tapi tetap dipisah secara logis)
    let daftarAnimasi = [...NameList, ...NameListMain];

    // Event tombol undian
    $('#draw-button').click(function () {
	    $('#result').removeClass('pemenang');
        if (NameList.length > 0) {
            let interval;
            let duration = 5000; // Durasi animasi 5 detik
            let startTime = Date.now();

            // Animasi nama berubah-ubah
            interval = setInterval(function () {
                let randomIndex = Math.floor(Math.random() * daftarAnimasi.length);
                $('#result').text(daftarAnimasi[randomIndex]);

                // Periksa jika waktu animasi selesai
                if (Date.now() - startTime >= duration) {
                    clearInterval(interval);

                    // Pilih nama final hanya dari NameList
                    let finalIndex = Math.floor(Math.random() * NameList.length);
                    let namaTerpilih = NameList[finalIndex];

                    // Tampilkan nama terpilih
                    $('#result').text(namaTerpilih).addClass('pemenang');

                    // Hapus nama yang sudah dipilih dari NameList
                    NameList.splice(finalIndex, 1);

                    // Nonaktifkan tombol jika NameList habis
                    if (NameList.length === 0) {
                        $('#draw-button').prop('disabled', true).addClass('selesai');
                    }
                }
            }, 100); // Animasi berubah setiap 100ms
        } else {
            $('#result').text("Semua nama sudah terpilih!");
            $(this).prop('disabled', true); // Nonaktifkan tombol
        }
    });
});