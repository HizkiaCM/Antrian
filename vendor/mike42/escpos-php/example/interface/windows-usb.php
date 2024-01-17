<?php
/* Change to the correct path if you copy this example! */
require __DIR__ . '/../../autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

/**
 * Install the printer using USB printing support, and the "Generic / Text Only" driver,
 * then share it (you can use a firewall so that it can only be seen locally).
 *
 * Use a WindowsPrintConnector with the share name to print.
 *
 * Troubleshooting: Fire up a command prompt, and ensure that (if your printer is shared as
 * "Receipt Printer), the following commands work:
 *
 *  echo "Hello World" > testfile
 *  copy testfile "\\%COMPUTERNAME%\Receipt Printer"
 *  del testfile
 */
// try {
//     // Enter the share name for your USB printer here
//     //$connector = null;
//     $connector = new WindowsPrintConnector("EPSON TM-T82");

//     /* Print a "Hello world" receipt" */
//     $printer = new Printer($connector);
//     $printer -> text("Hello World!\n");
//     $printer -> cut();
    
//     /* Close printer */
//     $printer -> close();
// } catch (Exception $e) {
//     echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
// }
try {
    // Ganti dengan nama printer USB Anda
    $printerName = "EPSON TM-T82";

    // Buat koneksi ke printer
    $connector = new WindowsPrintConnector($printerName);

    // Buat objek Printer
    $printer = new Printer($connector);

    // Teks yang akan dicetak
    $textToPrint = "Hello World!\n\n";

    // Ganti font (contoh: font B)
    $printer->setJustification(Printer::JUSTIFY_CENTER); // Pusatkan teks
    $printer->setTextSize(8, 8); // Atur ukuran teks
    $printer->selectPrintMode(Printer::MODE_DOUBLE_WIDTH); // Ganti ke mode lebar ganda (FONT B)
    $printer->text($textToPrint);

    // Pemotongan kertas
    $printer->cut();

    // Tutup printer
    $printer->close();
} catch (Exception $e) {
    echo "Gagal mencetak ke printer: " . $e->getMessage() . "\n";
}
