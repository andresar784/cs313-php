<?php
require_once('fpdf.php');

?>


<?php
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output('print.pdf', "I");
?>


<?php
echo "Hello World";
?>