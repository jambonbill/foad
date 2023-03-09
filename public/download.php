<?php

require __DIR__."/../vendor/autoload.php";


//require('fpdf.php');

class PDF extends \FPDF
{
    // Page header
    function Header()
    {
        // Background image
        $this->Image('img/FOAD.jpg',0,0,210);
        
    }

    // Page footer
    /*
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    */
}

// Instanciation of inherited class
$pdf = new PDF();
//$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

//Nom prenom du stagiaire
$pdf->Text(95,46.5,'BOQUET Pierre');

//Semaine
$pdf->Text(42,62.5,'du xx/xx/xxxx au xx/xx/xxxx');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Ln(8);



// Lundi
$pdf->SetXY(64, 87);
$pdf->MultiCell(91, 6, "Conception d'une bdd et css et javascript and its a test - Lundi - bla blablab labl alb alb lbalblb lalalblb a albalb ");
$pdf->SetXY(157, 87);
$pdf->MultiCell(28, 6, "Visio / Drive");

// Mardi
$y=110;
$pdf->SetXY(64, $y);
$pdf->MultiCell(91, 6, "Mardi - bla blablab labl alb alb lbalblb lalalblb a albalb ");
$pdf->SetXY(157, $y);
$pdf->MultiCell(28, 6, "Visio / Drive");

// Mercredi
$y=136;
$pdf->SetXY(64, $y);
$pdf->MultiCell(91, 6, "Mercredi c'est ravioli");
$pdf->SetXY(157, $y);
$pdf->MultiCell(28, 6, "Visio / Drive");

// Jeudi
$y=160;
$pdf->SetXY(64, $y);
$pdf->MultiCell(91, 6, "Jeudi Conception d'une bdd et css et javascript and its a test - Lundi - bla blablab labl alb alb lbalblb lalalblb a albalb ");
$pdf->SetXY(157, $y);
$pdf->MultiCell(28, 6, "Visio / Drive");

// Vendredi
$y=183;
$pdf->SetXY(64, $y);
$pdf->MultiCell(91, 6, "Vendredi lalblb a albalb ");
$pdf->SetXY(157, $y);
$pdf->MultiCell(28, 6, "Visio / Drive");

//Footer
$pdf->Text(38,241.5,'Mornac');

//Signatures
$pdf->Image('img/sign1.jpg',20,255,50);
$pdf->Image('img/sing2.jpg',130,260,50);


$pdf->Output();

