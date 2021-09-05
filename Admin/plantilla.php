<?php
    require('fpdf182/fpdf.php');
    
    class PDF extends FPDF{
        function Header(){
            $this->SetFont('Arial','B',20);
            $this->Cell(15);
            $this->Image("https://i.ibb.co/Byb7GTR/logo-2.png%22,8,8,20");
            $this->Cell(180,20,"Reporte de Usuarios",10,10,'C');
            $this->Ln(15);
        }

        function Footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','I',20);
            $this->Cell(0,10,'Riobamba-Ecuador',0,0);

        }
    }

?>