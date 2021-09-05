<?php
    require('fpdf182/fpdf.php');
    
    class PDF extends FPDF{
        function Header(){
            $this->SetFont('Arial','B',20);
            $this->Cell(15);
            $this->Image("nemo.png",8,8,40);
            $this->Cell(180,20,"PESCADERIA NEMO",10,10,'C');
            $this->Cell(180,20,"Producto: Pescado",10,10,'C');
            $this->Ln(15);
        }

        function Footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','I',20);
            $this->Cell(0,10,'Riobamba-Ecuador',0,0);

        }
    }

    require 'database.php';
    $query="SELECT * FROM producto WHERE tipo = 'pescado'";
    $resultado = mysqli_query($mysql,$query);
    $pdf = new PDF();

    $pdf->AddPage();
    $pdf->SetFillColor(78,83,160);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(62,6,'Nombre',1,0,'C');
    $pdf->Cell(62,6,'Tipo',1,0,'C');
    $pdf->Cell(62,6,'Precio x KG',1,0,'C');
    $pdf->SetFont('Arial','',10);
    while($mostrar = $resultado->fetch_assoc()){
        $pdf->Ln();
        $pdf->Cell(62,6,$mostrar['nombre'],1,0,'C');
        $pdf->Cell(62,6,$mostrar['tipo'],1,0,'C');
        $pdf->Cell(62,6,$mostrar['precio'],1,0,'C');
    }
    $pdf->Output('I','reporte.pdf',true);
?>