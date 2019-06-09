<?php
include 'template.php';

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(30,6,'Name',1,0,'C',1);
$pdf->Cell(30,6,'Last Name',1,0,'C',1);
$pdf->Cell(30,6,'From',1,0,'C',1);
$pdf->Cell(30,6,'To',1,0,'C',1);
$pdf->Cell(30,6,'Tickets',1,0,'C',1);

$pdf->SetFont('Arial','',10);


$pdf->Output();
?>



