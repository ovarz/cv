$(document).ready(function () {
    // Array daftar nama yang bisa terpilih
    let NameList = ["MAYA SOFYANTHI", "RUHMAH AGUS TRISSANTI", "SEPTIA RIZKY UTAMI", "ADRIAN GANTIRA", "DWI WIDAYANTHI", "DONNY ADHIYASA", "SYAHDAN NURDIN", "DIAN LESTARI NINGSIH", "SUMIYATI", "AGUS RAHMAT", "AIZ BUDHI", "BAYU JANUAR NUGRAHA", "FOE PEACE MAYEL DAY SIMBOLON", "ISRA BERLIAN", "MOH.ARIEF HIDAYAT", "RETTA PUTRI SAPTA MARGA", "RIFKI ARSILAN", "YUNISA HERAWATI", "BAYU ADI WICAKSONO", "RADEN LAZUARDHI UTAMA RIFKY", "R RADHITYA ANDRIANSYAH", "AUFAR MAHARDI", "ERICK CHRIST WIBOWO", "ROSIKIN", "DWI AGUS SURYA ISKANDAR", "BINTERI PUTRI AFSARI", "DINI HARTINI", "REGITA LORENA BR. SINUHAJI", "DERA FITRI ADHYTIA HARTANTI", "NURAENI", "WASISTO WIYOSO", "TRISYA FRIDA YULIANITA", "ANISA AULIA", "NATANIA LONDONG", "IMAN TAUFIK SETIADI", "SURYA ADITIYA", "ARIANTI WIDYA KUSUMASTUTI", "WAKHID NUSA BAKTI", "VIVI WIDIYASTUTI", "SITI ADISYA KIRANA", "MUHAMMAD RIDHO HIDAYATULLOH", "SISKA PERMATA SARI", "AINUNI RAHMITA", "REYGEN ALFRED GANGGALI", "MUHAMMAD THOIFUR", "JAYADI", "SYAMSUDIN"];

    // Array daftar nama yang tidak akan terpilih
    let NameListMain = ["MUHAMMAD ZAKKY AZHARI", "LALU MARA SATRIAWANGSA", "SANTANA MUHARAM", "MARCUS ERWIN ADITYA LAKSMANA YUDHA, S.SOS", "NATHAN PUTRA WIJAYA", "SIGIT WASESO", "MUHAMMAD IQBAL", "REZKY PARMA", "AYU MAGFIRAH HIPPY", "GERALDI MUHAMMAD YUSHAR", "MUHAMAD RIZAL AZHARI", "RABBANI AL FARIDZI", "AHMAD ARIF RAMADANSYAH", "RETNA SUHADA"];

    // Gabungkan array untuk animasi (tapi tetap dipisah secara logis)
    let daftarAnimasi = [...NameList, ...NameListMain];

    // Load click sound
    let clickSound = new Audio('asset/click-sound.mp3'); // Make sure you have this file

    // Event tombol undian
    $('#draw-button').click(function () {
        $('#result').removeClass('pemenang');
        if (NameList.length > 0) {
            let interval;
            let duration = 4000; // Durasi animasi 5 detik
            let startTime = Date.now();

            // Animasi nama berubah-ubah
            interval = setInterval(function () {
                let randomIndex = Math.floor(Math.random() * daftarAnimasi.length);
                $('#result').text(daftarAnimasi[randomIndex]);

                // Play the clicking sound
                clickSound.play();

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
