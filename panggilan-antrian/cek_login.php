<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'database.php';

// menangkap data yang dikirim dari form login
$Layanan = $_POST['Layanan'];
$Loket = $_POST['Loket'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($mysqli, "select * from user where Layan_Key='$Layanan' and Loket='$Loket' and password='$password'");
if (!$login) {
	die("Query failed: " . mysqli_error($mysqli)); // Check for query execution error
}
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['Layan_Key'] == "1") {

		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "1";
		// alihkan ke halaman dashboard admin
		header("location:loket1_1/index.php");

		// cek jika user login sebagai pegawai
	} else if ($data['Layan_Key'] == "1") {

		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "1";
		// alihkan ke halaman dashboard admin
		header("location:A\loket2_1/index.php");
	} else if ($data['Layan_Key'] == "2") {
		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "2";
		// alihkan ke halaman dashboard pegawai
		header("location:loket2/index.php");
	} else if ($data['Layan_Key'] == "3") {
		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "3";
		// alihkan ke halaman dashboard pegawai
		header("location:loket3/index.php");
	} else if ($data['Layan_Key'] == "4") {
		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "4";
		// alihkan ke halaman dashboard pegawai
		header("location:loket4/index.php");
	} else if ($data['Layan_Key'] == "5") {
		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "5";
		// alihkan ke halaman dashboard pegawai
		header("location:loket5/index.php");
	} else if ($data['Layan_Key'] == "6") {
		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "6";
		// alihkan ke halaman dashboard pegawai
		header("location:loket6/index.php");
	} else if ($data['Layan_Key'] == "7") {
		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "7";
		// alihkan ke halaman dashboard pegawai
		header("location:loket7/index.php");
	} else if ($data['Layan_Key'] == "8") {
		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "8";
		// alihkan ke halaman dashboard pegawai
		header("location:loket8/index.php");
	} else if ($data['Layan_Key'] == "9") {
		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "9";
		// alihkan ke halaman dashboard pegawai
		header("location:loket9/index.php");
	} else if ($data['Layan_Key'] == "10") {
		// buat session login dan username
		$_SESSION['Loket'] = $Loket;
		$_SESSION['Layan_Key'] = "10";
		// alihkan ke halaman dashboard pegawai
		header("location:loket10/index.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
} else {
	header("location:index.php?pesan=gagal");
}
