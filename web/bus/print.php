<?php
include 'template.php';

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,6,'Name',1,0,'C',1);
$pdf->Cell(20,6,'Last Name',1,0,'C',1);
$pdf->Cell(30,6,'From',1,1,'C',1);
$pdf->Cell(30,6,'to',1,1,'C',1);
$pdf->Cell(20,6,'Tickets',1,1,'C',1);

$pdf->SetFont('Arial','',10);


$pdf->Output();
?>



