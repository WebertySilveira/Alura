<?php

require_once __DIR__ . "/vendor/autoload.php";

// reference the Dompdf namespace
use Dompdf\Dompdf;

$dompdf = new Dompdf();

ob_start();
require_once "conteudo-pdf.php";
$html = ob_get_clean();

$dompdf->loadHtml($html);
$dompdf->setPaper('A4');
$dompdf->render();
$dompdf->stream();