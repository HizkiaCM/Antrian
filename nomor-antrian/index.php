<!doctype html>
<html lang="en" class="h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Antrian Berbasis Web">

  <!-- Title -->
  <title>Aplikasi Antrian Berbasis Web</title>

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

  <!-- Custom Style -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <div class="container pt-5">
      <div class="row justify-content-lg-center">
        <h1 class="h5 pt-2" style="font-size: 50px;">Antrian Sekarang</h1>
        <div class="col-lg-5 mb-4">
          <!-- <div class="ms-5 ms-md-0 pt-md-3 pb-md-0">
              <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../index.php"><button type="button" class="btn btn-dark">Kembali</button></a></li>
                </ol>
              </nav>
            </div> -->
        </div>
        <style>
          /* Additional CSS styles to adjust card sizes */
          .custom-card {
            /* max-width: 200px;*/
            margin: auto;
            grid-template-columns: auto;
            grid-auto-rows: auto;
            grid-gap: auto;
            padding: 20 px;
          }

          .antrian-font {
            font-size: 200 rem;
            /* Adjust the font size as needed */
          }
        </style>
        <div class="card border-0 shadow-sm" style="background-color: white;">
          <div class="d-flex">
            <?php
            $labels1 = ['Poliklinik Anak','Poliklinik Paru', 'Poliklinik Penyakit Dalam', 'Poliklinik Kulit', 'Poliklinik Mata'];
            $labels2 = ['Poliklinik Saraf', 'Poliklinik THT', 'Poliklinik Fisioterapi', 'Poliklinik Otak', 'Poliklinik Jantung'];
            // Loop to create ten similar card sections
            require_once "../config/database.php";
            
            $layanKeys = range(1, 10);
            $layanKeyList = implode(',', $layanKeys);
            
            // $sql = "SELECT Layan_Warna FROM layanan WHERE Layan_Key IN ($layanKeyList)";
            
            // $result = mysqli_query($mysqli, $sql);
            
            // if (mysqli_num_rows($result) > 0) {
            //   while ($row = mysqli_fetch_assoc($result)) {
            //     $backgroundColors[] = $row['Layan_Warna'];
            //   }
            // } else {
            //   $backgroundColors[] = '#FF5733'; // Default color
            // }

            // mysqli_close($mysqli);
            // echo "tes"
            // echo $backgroundColors;
            
            $backgroundColors = ['#FF5733', '#228B22', '#800000', '#FF33A3', '#33A3FF', '#FF0000', '#FFD700', '#D2691E', '#7AFF33', '#663399'];
            
            for ($i = 0; $i < 5; $i++) {
              $antrianId = "antrian" . chr(65 + $i);
              $randomColor = $backgroundColors[$i];
              $label = $labels1[$i - 0];
              // Generates antrianA, antrianB, ...
            ?>
              <div class="card-body text-center d-grid p-3 custom-card" style="flex: 1;">
                <div class="border border-success rounded-2 py-2 mb-3" style="background-color:<?= $randomColor ?>; color: white;">
                  <!-- <h5 class="pt-2 antrian-font" style="color:white">ANTRIAN SEKARANG</h5> -->
                  <!-- menampilkan informasi jumlah antrian -->
                  <h4 id="<?= $antrianId ?>" class="fw-bold text-center lh-1 pb-2 antrian-font" style="background-color:<?= $randomColor ?>; color: white;"></h4>
                  <p><?= $label ?></p>
                  <!-- <a id="<?= $insertId ?>" href="javascript:void(0)" class="btn btn-block rounded-pill fs-6 px-3 py-2" style="background-color: <?= $randomColor ?>; color: white;">
                    <i class="bi-person-plus fs-5 me-1"></i> Ambil Nomor
                  </a> -->
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="card border-0 shadow-sm" style="background-color: white;">
          <div class="d-flex">
            <?php
            // Loop to create ten similar card sections
            $backgroundColors = ['#FF5733', '#228B22', '#800000', '#FF33A3', '#33A3FF', '#FF0000', '#FFD700', '#D2691E', '#7AFF33', '#663399'];
            for ($i = 1; $i <= 5; $i++) {
              $insertId = "insert" . chr(64 + $i); // Generates insertA, insertB, ...
              $randomColor = $backgroundColors[$i - 1];
            ?>
              <div class="card-body text-center d-grid p-3 custom-card" style="flex: 1;">
                <!-- <h5 class="pt-2 antrian-font" style="color:white">ANTRIAN SEKARANG</h5> -->
                <!-- menampilkan informasi jumlah antrian -->
                <!-- <h4 id="<?= $antrianId ?>" class="fw-bold text-center lh-1 pb-2 antrian-font" style="color:<?= $randomColor ?>;"></h4> -->
                <a id="<?= $insertId ?>" href="javascript:void(0)" class="btn btn-block rounded-pill fs-10 px-1 py-2" style="background-color: <?= $randomColor ?>; color: white;">
                  <i></i> Ambil Nomor
                </a>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="card border-0 shadow-sm" style="background-color: white;">
          <!--<h1 class="h5 pt-2">Antrian Sekarang</h1>-->
          <div class="d-flex">
            <?php
            // Loop to create ten similar card sections
            $backgroundColors = ['#FF5733', '#228B22', '#800000', '#FF33A3', '#33A3FF', '#FF0000', '#FFD700', '#D2691E', '#7AFF33', '#663399'];
            for ($i = 6; $i <= 10; $i++) {
              $antrianId = "antrian" . chr(64 + $i);
              $randomColor = $backgroundColors[$i - 1];
              $label1 = $labels2[$i - 6];
              // Generates antrianA, antrianB, ...
            ?>
              <div class="card-body text-center d-grid p-3 custom-card" style="flex: 1;">
                <div class="border border-success rounded-2 py-2 mb-3" style="background-color:<?= $randomColor ?>; color: white;">
                  <!-- <h5 class="pt-2 antrian-font" style="color:white">ANTRIAN SEKARANG</h5> -->
                  <!-- menampilkan informasi jumlah antrian -->
                  <h4 id="<?= $antrianId ?>" class="fw-bold text-center lh-1 pb-2 antrian-font" style="background-color:<?= $randomColor ?>;"></h4>
                  <p><?= $label1 ?></p>
                  <!-- <a id="<?= $insertId ?>" href="javascript:void(0)" class="btn btn-block rounded-pill fs-6 px-3 py-2" style="background-color: <?= $randomColor ?>; color: white;">
                    <i class="bi-person-plus fs-5 me-1"></i> Ambil Nomor
                  </a> -->
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="card border-0 shadow-sm" style="background-color: white;">
          <div class="d-flex">
            <?php
            $backgroundColors = ['#FF5733', '#228B22', '#800000', '#FF33A3', '#33A3FF', '#FF0000', '#FFD700', '#D2691E', '#7AFF33', '#663399'];
            // Loop to create ten similar card sections
            for ($i = 6; $i <= 10; $i++) {
              $insertId = "insert" . chr(64 + $i); // Generates insertA, insertB, ...
              $randomColor = $backgroundColors[$i - 1];
            ?>
              <div class="card-body text-center d-grid p-3 custom-card" style="flex: 1;">
                <!-- <h5 class="pt-2 antrian-font" style="color:white">ANTRIAN SEKARANG</h5> -->
                <!-- menampilkan informasi jumlah antrian -->
                <!-- <h4 id="<?= $antrianId ?>" class="fw-bold text-center lh-1 pb-2 antrian-font" style="color:<?= $randomColor ?>;"></h4> -->
                <a id="<?= $insertId ?>" href="javascript:void(0)" class="btn btn-block rounded-pill fs-10 px-1 py-2" style="background-color: <?= $randomColor ?>; color: white;">
                  <i></i> Ambil Nomor
                </a>
              </div>
            <?php
            }
            ?>
          </div>
        </div>


      </div>
    </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer mt-auto py-4">
    <div class="container">
      <!-- copyright -->
      <div class="copyright text-center mb-2 mb-md-0">
        &copy; 2023 - <a href="https://www.ece.uksw.edu" target="_blank" class="text-danger text-decoration-none">www.ece.uksw.edu</a>. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- jQuery Core -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      // tampilkan jumlah antrian
      $('#antrianA').load('A/get_antrian.php');

      // proses insert data
      $('#insertA').on('click', function() {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'A/insert.php', // url file proses insert data
          success: function(result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianA').load('A/get_antrian.php').fadeIn('slow');

              // Mencetak setelah menerima respons sukses dari server
              // window.print();
            }
          },
        });
      });
 
      $('#antrianB').load('B/get_antrian.php');

      // proses insert data
      $('#insertB').on('click', function() {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'B/insert.php', // url file proses insert data
          success: function(result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianB').load('B/get_antrian.php').fadeIn('slow');
            }
          },
        });
      });
      $('#antrianC').load('C/get_antrian.php');

      // proses insert data
      $('#insertC').on('click', function() {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'C/insert.php', // url file proses insert data
          success: function(result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianC').load('C/get_antrian.php').fadeIn('slow');
            }
          },
        });
      });
      $('#antrianD').load('D/get_antrian.php');

      // proses insert data
      $('#insertD').on('click', function() {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'D/insert.php', // url file proses insert data
          success: function(result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianD').load('D/get_antrian.php').fadeIn('slow');
            }
          },
        });
      });
      $('#antrianE').load('E/get_antrian.php');

      // proses insert data
      $('#insertE').on('click', function() {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'E/insert.php', // url file proses insert data
          success: function(result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianE').load('E/get_antrian.php').fadeIn('slow');
            }
          },
        });
      });
      $('#antrianF').load('F/get_antrian.php');

      // proses insert data
      $('#insertF').on('click', function() {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'F/insert.php', // url file proses insert data
          success: function(result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianF').load('F/get_antrian.php').fadeIn('slow');
            }
          },
        });
      });
      $('#antrianG').load('G/get_antrian.php');

      // proses insert data
      $('#insertG').on('click', function() {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'G/insert.php', // url file proses insert data
          success: function(result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianG').load('G/get_antrian.php').fadeIn('slow');
            }
          },
        });
      });
      $('#antrianH').load('H/get_antrian.php');

      // proses insert data
      $('#insertH').on('click', function() {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'H/insert.php', // url file proses insert data
          success: function(result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianH').load('H/get_antrian.php').fadeIn('slow');
            }
          },
        });
      });
      $('#antrianI').load('I/get_antrian.php');

      // proses insert data
      $('#insertI').on('click', function() {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'I/insert.php', // url file proses insert data
          success: function(result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianI').load('I/get_antrian.php').fadeIn('slow');
            }
          },
        });
      });
      $('#antrianJ').load('J/get_antrian.php');

      // proses insert data
      $('#insertJ').on('click', function() {
        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'J/insert.php', // url file proses insert data
          success: function(result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrianJ').load('J/get_antrian.php').fadeIn('slow');
            }
          },
        });
      });
    });
  </script>
</body>

</html>