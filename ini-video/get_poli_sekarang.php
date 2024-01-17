<?php
// pengecekan ajax request untuk mencegah direct access file, agar file tidak bisa diakses secara langsung dari browser
// jika ada ajax request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
  // panggil file "database.php" untuk koneksi ke database
  require_once "../config/database.php";

  // ambil tanggal sekarang
  $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

  // sql statement untuk menampilkan data "Poli" dari tabel "antrian_panggil" berdasarkan "tanggal" dan "status = 1"
  $query = mysqli_query($mysqli, "SELECT Layan_Key FROM tbl_antrian 
                                  WHERE tanggal='$tanggal' AND status != '0'
                                  ORDER BY updated_date DESC")
    or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
  // ambil jumlah baris data hasil query
  $rows = mysqli_num_rows($query);

  // cek hasil query
  // jika data "Poli" ada
  if ($rows <> 0) {
    // ambil data hasil query
    $data = mysqli_fetch_assoc($query);
    $Key = $data['Layan_Key'];
    $get_Kode = mysqli_query($mysqli, "SELECT Layan_Name FROM layanan
    WHERE Layan_Key='$Key'")
      or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
    $data1 = mysqli_fetch_assoc($get_Kode);
    // tampilkan data "Poli"
    echo $data1['Layan_Name'];
  }
  // jika data "Poli" tidak ada
  else {
    // tampilkan "-" atau pesan lain sesuai kebutuhan
    echo "-";
  }
}
