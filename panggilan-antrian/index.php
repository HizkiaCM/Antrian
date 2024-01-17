<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <title>Login Admin RSUP Persahabatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="Welcome.jpg" alt="Gambar Anda" class="img-fluid mb-3">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert alert-danger'>Password tidak sesuai !</div>";
                    }
                }
                ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Silahkan login</h5>
                        <form action="cek_login.php" method="post">
                            <div class="form-group">
                                <label for="Layanan">Pilih Layanan:</label>
                                <select id="Layanan" name="Layanan" class="form-control">
                                    <option value=''> </option>
                                    <?php
                                    // deklarasi parameter koneksi database
                                $host     = "localhost";              // server database, default “localhost” atau “127.0.0.1”
                                $username = "root";                   // username database, default “root”
                                $password = "";                       // password database, default kosong
                                $database = "db_an";             // memilih database yang akan digunakan
                
                                // buat koneksi database
                                $mysqli = mysqli_connect($host, $username, $password, $database);
                
                                // cek koneksi
                                // jika koneksi gagal 
                                if (!$mysqli) {
                                    // tampilkan pesan gagal koneksi
                                    die('Koneksi Database Gagal : ' . mysqli_connect_error());
                                }
                                // Fetch data from the database
                                $sql = "SELECT Layan_Key, Layan_Name FROM layanan";
                                $result = mysqli_query($mysqli, $sql);
                
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $Layan_name = $row["Layan_Name"];
                                        $Layan_key = $row["Layan_Key"];
                                        echo "<option value='$Layan_key'>$Layan_name</option>";
                                    }
                                } else {
                                    echo "<option value=''>No cars available</option>";
                                }
                
                                mysqli_close($mysqli);
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Loket">Pilih Loket:</label>
                                <select id="Loket" name="Loket" class="form-control">
                                    <option value=''> </option>
                                    <!-- Kode PHP untuk mengisi pilihan Loket sesuai dengan Layanan yang dipilih -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="Password .." required="required">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                            <br />
                            <br />
                            <center>
                                <a class="link" href="http://localhost/coba_antrian.ykun.or.id/">kembali</a>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Listen for changes in the Layanan dropdown
        document.getElementById("Layanan").addEventListener("change", function () {
            // Get the selected Layan_Key
            var selectedLayanKey = this.value;

            // Send an AJAX request to fetch Loket options
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "get_loket_options.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Populate the Loket dropdown with the received options
                    document.getElementById("Loket").innerHTML = xhr.responseText;
                }
            };
            xhr.send("Layan_Key=" + selectedLayanKey);
        });
    </script>
</body>

</html>
