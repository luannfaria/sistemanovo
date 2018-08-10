<?php
/* Call this file 'hello-world.php' */
require __DIR__ . '/../../autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;


function teste(){


$connector = new WindowsPrintConnector("itautec"); // Add connector for your printer here.
  $printer = new Printer($connector);

  $printer -> setEmphasis(true);
$printer -> text("Left margin\n");
$printer -> setEmphasis(false);
$printer -> text("Default left\n");
foreach(array(1, 2, 4, 8, 16, 32, 64, 128, 256, 512) as $margin) {
    $printer -> setPrintLeftMargin($margin);
    $printer -> text("left margin $margin\n");
}
/* Reset left */
$printer -> setPrintLeftMargin(0);
/* Stuff around with page width */
$printer -> setEmphasis(true);
$printer -> text("Page width\n");
$printer -> setEmphasis(false);
$printer -> setJustification(Printer::JUSTIFY_RIGHT);
$printer -> text("Default width\n");
foreach(array(512, 256, 128, 64) as $width) {
    $printer -> setPrintWidth($width);
    $printer -> text("page width $width\n");
}
/* Printer shutdown */
$printer -> cut();
$printer -> close();
}
