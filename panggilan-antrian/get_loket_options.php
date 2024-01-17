<?php
// deklarasi parameter koneksi database
$host = "localhost"; // server database, default “localhost” atau “127.0.0.1”
$username = "root"; // username database, default “root”
$password = ""; // password database, default kosong
$database = "db_an"; // memilih database yang akan digunakan

// buat koneksi database
$mysqli = mysqli_connect($host, $username, $password, $database);

// cek koneksi
if (!$mysqli) {
    // tampilkan pesan gagal koneksi
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}

// Get the selected Layan_Key from the AJAX request
$selectedLayanKey = $_POST['Layan_Key'];

// Build a dynamic SQL query to fetch Loket options based on Layan_Key
$sql = "SELECT Loket FROM user WHERE Layan_Key = $selectedLayanKey";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $Loket = $row["Loket"];
        echo "<option value='$Loket'>$Loket</option>";
    }
} else {
    echo "<option value=''>No Loket available</option>";
}

mysqli_close($mysqli);
