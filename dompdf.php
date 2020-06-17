<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadhtml('menggunakan library dompdf untuk membuar report pdf dengan dompdf');

$dompdf->setPaper('A4','landscape');

$dompdf->render();

$dompdf->stream('hasil_report.pdf');
?>