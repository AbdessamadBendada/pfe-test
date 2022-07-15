<?php
use Dompdf\Dompdf;
require_once '../public/assets/assets/dompdf/autoload.inc.php';
$dompdf = new Dompdf();

ob_start();

require_once '../app/views/template/attestation_content.php';
$html = ob_get_contents();
ob_end_clean();

$dompdf->load_html($html);
$dompdf->setPaper('A4');
$dompdf->render();
$dompdf->stream('Attestation_travail_salaire.pdf');







