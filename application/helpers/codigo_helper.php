<?php

require __DIR__ . '/../third_party/pdf/fpdf.php';




function geraean(){

    
    $pdf= new FPDF("P","pt","A4");
$pdf->AddPage();
 
$pdf->SetFont('arial','B',18);
$pdf->Cell(0,5,"Relatorio status $status",0,1,'C');
$pdf->Cell(0,5,"","B",1,'C');
$pdf->Ln(50);

 
//cabe�alho da tabela 
$pdf->SetFont('arial','B',14);
$pdf->Cell(90,20,'N.Chamado',1,0,"L");
$pdf->Cell(120,20,'Nome cliente',1,0,"L");
$pdf->Cell(120,20,'Titulo',1,0,"L");
$pdf->Cell(90,20,'Data',1,0,"L");
$pdf->Cell(115,20,'DESC',1,1,"L");
 
//linhas da tabela
$pdf->SetFont('arial','',11);

ob_start ();
$pdf->Output("arquivo.pdf","I");

}
