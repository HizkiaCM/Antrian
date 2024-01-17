<?php

use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\CapabilityProfile;
use Mike42\Escpos\Printer;

// Pengecekan AJAX request untuk mencegah direct access file
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
    require_once "../config/database.php";
    require_once __DIR__ . '/../../vendor/autoload.php'; // Sesuaikan dengan path yang benar

    $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

    $query = mysqli_query($mysqli, "SELECT max(no_antrian) as nomor FROM tbl_antrian WHERE tanggal='$tanggal' AND Layan_Key='9'")
        or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));

    $rows = mysqli_num_rows($query);

    if ($rows <> 0) {
        $data = mysqli_fetch_assoc($query);
        $no_antrian = $data['nomor'] + 1;
    } else {
        $no_antrian = 1;
    }

    $insert = mysqli_query($mysqli, "INSERT INTO tbl_antrian(tanggal, no_antrian, Layan_Key) 
                                   VALUES('$tanggal', '$no_antrian', '9')")
        or die('Ada kesalahan pada query insert : ' . mysqli_error($mysqli));

    if ($insert) {
        echo "Sukses";

        // Mencetak nomor antrian
        try {
          $connector = new WindowsPrintConnector("EPSON TM-T82"); // Ganti dengan nama printer Anda
          $printer = new Printer($connector);
          // Format tiket antrian
          $printer->setJustification(Printer::JUSTIFY_CENTER);
          $printer->text("   TIKET ANTRIAN\n");
          $printer->text("=========================\n\n");
              // Nomor Antrian dengan ukuran besar dan rata tengah
          $printer->setEmphasis(true);
          $printer->setTextSize(5, 5);
          $printer->text("I" . $no_antrian . "\n");
          $printer->setEmphasis(false);
          $printer->setTextSize(1, 1);
          $printer->text("=========================\n");
          // Spasi dan tanggal dengan rata tengah
          $printer->text("\n\n\n");
          $printer->text("Poliklinik Otak\n");
          date_default_timezone_set('Asia/Jakarta'); 
          $printer->text(date('d-m-Y H:i:s') . "\n");

          $printer->cut();
          $printer->close();
      } catch (Exception $e) {
            echo "Gagal mencetak: " . $e->getMessage();
        }
    }
}
?>
