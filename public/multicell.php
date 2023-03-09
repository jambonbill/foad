<?php

require __DIR__."/../vendor/autoload.php";


class PDF extends \FPDF
{
    //
}

// Instanciation of inherited class
$pdf = new PDF();
//$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

//Nom prenom du stagiaire
$pdf->Text(95,46.5,'BOQUET Pierre');




$pdf->Output();

