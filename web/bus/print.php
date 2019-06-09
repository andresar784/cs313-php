<?php

session_start();
$from = $_SESSION["from"];
$to = $_SESSION["to"];
$quantity = $_SESSION["quantity"];
$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];

include 'template.php';

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(102,178,255);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(30,6,'Name',1,0,'C',1);
$pdf->Cell(30,6,'Last Name',1,0,'C',1);
$pdf->Cell(30,6,'From',1,0,'C',1);
$pdf->Cell(30,6,'To',1,0,'C',1);
$pdf->Cell(30,6,'Tickets',1,1,'C',1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(30,6,''.$firstname,1,0,'C',1);
$pdf->Cell(30,6,''.$lastname,1,0,'C',1);
$pdf->Cell(30,6,''.$from,1,0,'C',1);
$pdf->Cell(30,6,'To',1,0,'C',1);
$pdf->Cell(30,6,'Tickets',1,0,'C',1);


$pdf->Output();
?>



