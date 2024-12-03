$(document).ready(function () {
    // Array daftar nama yang bisa terpilih
    let daftarNama = ["Aufar", "Mahardi"];

    // Array daftar nama yang tidak akan terpilih
    let daftarTidakTerpilih = ["Hani", "Irfan", "Joko", "Citra", "Dewi", "Eko", "Farah", "Gilang"];

    // Gabungkan array untuk animasi (tapi tetap dipisah secara logis)
    let daftarAnimasi = [...daftarNama, ...daftarTidakTerpilih];

    // Event tombol undian
    $('#draw-button').click(function () {
	    $('#result').removeClass('pemenang');
        if (daftarNama.length > 0) {
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

                    // Pilih nama final hanya dari daftarNama
                    let finalIndex = Math.floor(Math.random() * daftarNama.length);
                    let namaTerpilih = daftarNama[finalIndex];

                    // Tampilkan nama terpilih
                    $('#result').text(namaTerpilih).addClass('pemenang');

                    // Hapus nama yang sudah dipilih dari daftarNama
                    daftarNama.splice(finalIndex, 1);

                    // Nonaktifkan tombol jika daftarNama habis
                    if (daftarNama.length === 0) {
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