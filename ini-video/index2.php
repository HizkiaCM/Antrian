<!doctype html>
<html lang="en" class="h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">


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

  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Custom Style -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
    .custom-card {
      background-color: white; 
      margin-bottom: 10px;
      /* Atur spasi bawah sesuai kebutuhan  */
    }

    #tanggal {
      font-size: 15px;
      /* Ubah ukuran font tanggal sesuai keinginan */
    }

    #waktu {
      font-size: 25px;
      /* Ubah ukuran font waktu sesuai keinginan */
    }

    #antrianSekarang {
      font-size: 5px;
      /* Ganti nilai ini sesuai kebutuhan */
    }

    #myVideo1 {
      width: 100%;
      height: 50vh;
      /* Gunakan viewport height untuk membuat video memanjang ke bawah */
    }
  </style>


</head>

<body>
  <main>

    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="card border-0 shadow-sm mb-4 custom-card" style="margin-bottom: 20px;">
            <div class="d-flex justify-content-center align-items-center">
              <h4>Antrian Sekarang</h4>
            </div>
          </div>
          <div class="card border-0 shadow-sm mb-4 custom-card" style="margin-bottom: 20px;">
            <div class="card-body p-4" style="height: 300px; /* Ganti nilai sesuai kebutuhan */">
              <div class="card-body p-4 d-flex justify-content-center align-items-center" style="height: 100%;">
                <div>
                  <p id="antrianSekarang" class="text-success text-center lh-2 pb-4" style="font-size: 200px;">
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card border-0 shadow-sm mb-4 custom-card d-flex justify-content-center align-items-center">
              <h4 id="Poliklinik" class="text-success text-center lh-2 pb-4" style="font-size: 20px;"></h4>
              <h1 id="Loket"  style="font-size: 0px; visibility: hidden;"></h1>
          </div>
        </div>

        <div class="col-md-7">
          <div class="col-md-12 mb-8">
            <div class="video1">
              <video id="myVideo1" width="100%" height="auto" loop controls autoplay>
                <source src="trailer 5.mp4" type="video/mp4">
              </video>
              <!--<iframe id="myVideo1"src="https://www.youtube.com/embed/tyNvwGdMLNI?autoplay=1&mute=1&loop=1&playlist=tyNvwGdMLNI" frameborder="0" allowfullscreen></iframe>-->
              <!-- <input type="range" id="volumeSlider" min="0" max="1" step="0.1" value="1"> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="row justify-content-center" style="background-color: white;">
          <style>
            /* Additional CSS styles to adjust card sizes */
            .custom-card1 {
              /* max-width: 200px;*/
              margin: auto;
              /* grid-template-columns: auto;
              grid-auto-rows: auto;
              grid-gap: auto; */
              padding: 10 px;
              /* background-color: '#FF5733', '#33FF57', '#5733FF', '#FF33A3', '#33A3FF', '#A3FF33', '#FF337A', '#337AFF', '#7AFF33', '#FF3333'; */
            }

            .antrian-font {
              font-size: 200 rem;
              /* Adjust the font size as needed */
            }
          </style>
          <h4>Antrian Yang Sedang Dilayani</h4>
          <?php
          // Loop to create ten similar card sections
          $backgroundColors = ['#FF5733', '#228B22', '#800000', '#FF33A3', '#33A3FF', '#FF0000', '#FFD700', '#D2691E', '#7AFF33', '#663399'];
          for ($i = 1; $i <= 10; $i++) {
            $antrianId = "antrian" . chr(64 + $i);
            $Poli = "Poli" . chr(64 + $i);
            $randomColor = $backgroundColors[$i - 1];
          ?>
            <div class="card-body text-center custom-card1" style="flex: 1;">
              <div class="border border-success rounded-2 py-2 mb-3" style="background-color: <?= $randomColor ?>;">
                <a id="<?= $Poli ?>" class="badge badge-light fs-10 px-1 py-2" style="color: white;">
                <i></i></a>
                <h4 id="<?= $antrianId ?>" class="fw-bold text-center lh-1 pb-2 antrian-font" style="color: white;"></h4>
              </div>
            </div>
          <?php
          }
          ?>

        </div>
      </div>
      <!-- <div class="row">
        <div class="row justify-content-center" style="background-color: white;">
          <style>
            /* Additional CSS styles to adjust card sizes */
            .custom-card1 {
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
          <h4>Antrian Yang Sedang Dilayani</h4>
          <?php
          // Loop to create ten similar card sections
          for ($i = 6; $i <= 10; $i++) {
            $antrianId = "antrian" . chr(64 + $i);
            $Poli = "get_Poli" . chr(64 + $i);
            $randomColor = "#" . substr(md5(rand()), 0, 6);
          ?>
            <div class="card-body text-center d-grid p-3 custom-card1" style="flex: 1;">
              <div class="border border-success rounded-2 py-2 mb-3">
                <a id="<?= $Poli ?>" class="btn btn-block rounded-pill fs-10 px-1 py-2" style="background-color: <?= $randomColor ?>; color: white;">
                  <i></i></a>
                <h4 id="<?= $antrianId ?>" class="fw-bold text-center lh-1 pb-2 antrian-font" style="color:<?= $randomColor ?>;"></h4>
              </div>
            </div>
          <?php
          }
          ?>

        </div>
      </div> -->


  </main>
  <footer class="footer mt-auto py-4">
    <div class="container">
      <!-- copyright -->
      <div class="copyright text-center mb-2 mb-md-0">
        &copy; 2023 - <a href="https://www.ece.uksw.edu" target="_blank" class="text-danger text-decoration-none">www.ece.uksw.edu</a>. All rights reserved.
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // function updateClock() {
    //   const now = new Date();
    //   const options = {
    //     day: 'numeric',
    //     month: 'long',
    //     year: 'numeric',
    //     timeZone: 'Asia/Jakarta'
    //   };
    //   const formattedDate = now.toLocaleDateString('id-ID', options);
    //   const formattedTime = now.toLocaleTimeString('id-ID', {
    //     hour: 'numeric',
    //     minute: 'numeric',
    //     second: 'numeric',
    //     timeZone: 'Asia/Jakarta'
    //   });

    //   const tanggalElement = document.getElementById('tanggal');
    //   const waktuElement = document.getElementById('waktu');

    //   tanggalElement.innerHTML = formattedDate;
    //   waktuElement.innerHTML = formattedTime;
    // }

    // Update the clock every second
    // setInterval(updateClock, 1000);
  </script>

  <!-- load file audio bell antrian -->
  <audio id="tingtung" src="../assets/audio/tingtung.mp3"></audio>

  <!-- jQuery Core -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <!-- DataTables -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
  <!-- Responsivevoice -->
  <!-- Get API Key -> https://responsivevoice.org/ -->
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=jQZ2zcdq"></script>

  <script type="text/javascript">
    var audioContext = new(window.AudioContext || window.webkitAudioContext)();
    var video1 = document.getElementById("myVideo1");
    var antrianLalu = [0000, "A"];
    var originalVolume = video1.volume;

    var volumeSlider = document.getElementById("volumeSlider");

    $(document).ready(function() {
      function tampilkan() {
        var antrianElements = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];

        // Load 'antrian' data for each element
        antrianElements.forEach(function(element) {
          $('#antrian' + element).load(element + '/get_antrian.php');
        });

        antrianElements.forEach(function(element) {
          $('#Poli' + element).load(element + '/get_poli.php');
        });
        $('#Poliklinik').load('get_poli_sekarang.php')
      }
      // Fungsi untuk mengambil data dan memainkan suara
      function loadAndSpeak() {
        $('#Poliklinik').load('get_poli_sekarang.php');
        $('#Loket').load('loket.php');
        $('#antrianSekarang').load('get_antrian_sekarang.php', function(responseTxt, statusTxt, xhr) {
          if (statusTxt === "success") {
            var poliklinik = $('#Poliklinik').text();
            var loket = $('#Loket').text();
            var newAntrian = $('#antrianSekarang').text();
            if (antrianLalu !== newAntrian) {
              var bell = document.getElementById('tingtung');
              bell.addEventListener('play', function() {
                video1.pause();
              });

              bell.pause();
              bell.currentTime = 0;
              bell.play();
              var durasi_bell = bell.duration * 500;
              var _nomor = "";
              for (i = 0; i < newAntrian.length; i++) {
                _nomor = _nomor + "........." + newAntrian[i];
              }

              // audioContext.resume().then(() => {
              //   video1.volume = 0.2;
              //   video1.play();
              // });
              var teksSuara = "   " + "Nomor antrian, " + _nomor + "........." + " Silahkan pergi ke ruang periksa!" + poliklinik + " ";

              responsiveVoice.OnEnd = function() {
                // This function will be called when speech is done
                video1.play();
              };

              responsiveVoice.speak(teksSuara, "Indonesian Male");

              // Set a timeout to reset the OnEnd handler just in case
              setTimeout(function() {
                responsiveVoice.OnEnd = null;
              }, durasi_bell);
            }
            antrianLalu = newAntrian;
            video1.play();
            video1.volume= 0.4;
          }
        });
      }

      // Panggil fungsi loadAndSpeak() saat halaman dimuat ulang
      loadAndSpeak();

      // Interval untuk memuat ulang dan memainkan suara secara otomatis
      setInterval(loadAndSpeak, 500); // Every 1 second (1000 ms)
      setInterval(tampilkan, 500);
    });
  </script>

</body>

</html>