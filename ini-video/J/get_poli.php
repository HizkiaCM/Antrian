<?php
// pengecekan ajax request untuk mencegah direct access file, agar file tidak bisa diakses secara langsung dari browser
// jika ada ajax request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
    // panggil file "database.php" untuk koneksi ke database
    require_once "../config/database.php";

    // sql statement untuk menampilkan data "Poli" dari tabel "antrian_panggil" berdasarkan "tanggal" dan "status = 1"
    $get = mysqli_query($mysqli, "SELECT Layan_Name FROM layanan 
    WHERE Layan_Key='10'")
        or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
    // ambil jumlah baris data hasil query
    $rows = mysqli_num_rows($get);


    // cek hasil query
    // jika data "Poli" ada
    if ($rows <> 0) {
        // ambil data hasil query
        $data = mysqli_fetch_assoc($get);
        // tampilkan data "Poli"
        echo $data['Layan_Name'];
    }
    // jika data "Poli" tidak ada
    else {
        // tampilkan "-" atau pesan lain sesuai kebutuhan
        echo "-";
    }
}
