<?php
 require_once 'fpdf/fpdf.php';

 class PDF extends FPDF{
    function Header()
    {
        $this->Image('pictures/Sbl.png', 8, 0, 35);
        $this->SetFont('Arial', 'B', '20');
        $this->Cell(30);
        $this->Cell(120,10,'Your tickets', 0,0,'C');

        $this->Ln(20);
    }

    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial', I , 8);
        $this->Cell(0,10, 'Print and present this document to the driver',0,0,'C');
    }
 }


?>