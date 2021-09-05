<?php

    require('fpdf182/fpdf.php');
    
    class PDF extends FPDF{
        function Header(){
            $this->SetFont('Arial','B',20);
            $this->Cell(15);
            $this->Image("nemo.png",8,8,40);
            $this->Cell(180,20,"PESCADERIA NEMO",10,10,'C');
            $this->Cell(180,20,"Reporte de Usuarios",10,10,'C');
            $this->Ln(15);
        }

        function Footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','I',20);
            $this->Cell(0,10,'Riobamba-Ecuador',0,0);

        }
    }

    require 'database.php';
    $query="SELECT * FROM usuario";
    $resultado = mysqli_query($mysql,$query);
    $pdf = new PDF();

    $pdf->AddPage();
    $pdf->SetFillColor(78,83,160);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(62,6,utf8_decode('Nombre'),1,0,'C');
    $pdf->Cell(62,6,'Correo',1,0,'C');
    $pdf->Cell(62,6,'clave',1,0,'C');
    $pdf->SetFont('Arial','',10);
    while($mostrar = $resultado->fetch_assoc()){
        $pdf->Ln();
        $pdf->Cell(62,6,utf8_decode($mostrar['nombre']),1,0,'C');
        $pdf->Cell(62,6,utf8_decode($mostrar['correo']),1,0,'C');
        $pdf->Cell(62,6,utf8_decode($mostrar['clave']),1,0,'C');
    }
    $pdf->Output('I','reporte.pdf',true);
?>