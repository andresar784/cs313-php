<?php

    include 'template.php';
    
    
    $pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,6,'Name',1,0,'C',1);
    $pdf->Cell(20,6,'How many tickets',1,0,'C',1);
    $pdf->Cell(30,6,'From',1,0,'C',1);
    $pdf->Cell(30,6,'To',1,0,'C',1);

    $pdf->Output();

?>

