<?php
require('fpdf17/fpdf.php');
class PDF extends FPDF
{
    function Titre($libelle)
    {
        $this->SetFont('Arial', '', 20);
        $this->Cell(0, 20, "$libelle", 0, 1, 'L');
        $this->Ln(4);
    }
    
    function BasicTable($header, $data)
    {
        $this->SetFillColor(200, 200, 200);
        $this->SetDrawColor(130, 130, 130);
        foreach ($header as $col)
            $this->Cell(40, 13, $col, 1, 0, 'C', true);
        $this->Ln();
        foreach ($data as $row) {
            foreach ($row as $col)
                $this->Cell(40, 15, $col, 1, 0, 'C');
            $this->Ln();
        }
        $this->Ln(8);
    }

    function nomRegime($data)
    {
        $this->Titre("Nom du regime: '".$data."'");
    }
    function activites($data)
    {
        $this->Titre("Listes des activites sportifs:");
        $header = array('Activites','Quantites', 'Unite');
        $this->BasicTable($header, $data);
    }
    function plats($d)
    {
        $this->Titre("Liste des plats:");
        $header = array('Plats','Types', 'Categories');
        $this->BasicTable($header, $d);
    }
    function prixRegime($data)
    {
        $this->Titre("Prix du regime: ".$data." Ariary");
    }
}