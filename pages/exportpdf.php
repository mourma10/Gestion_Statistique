<?php
include ('connexion_bdd.php');
require ('fpdf/fpdf.php');

class PDF extends FPDF
{
// Chargement des données
function LoadData($file)
{
    // Lecture des lignes du fichier
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Tableau simple
function BasicTable($header, $data)
{
    // En-tête
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Données
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}
}

$result = $bdd->query('SELECT * from EffectifsDesFemmesPrive');
$csv_output = "\n";
//Boucle sur les resultats
while($col = $result->fetch())
{
$csv_output = "$col[DEPARTEMENT];$col[EFFECTIFS];$col[HOMMES]; $col[FEMMES]";
}
//Encodage iso et enregistrement fichier
$csv_output_iso = utf8_decode($csv_output);
file_put_contents("liste.csv", $csv_output_iso);

$pdf = new PDF();
// Titres des colonnes
$header = array();
// Chargement des données
$data = $pdf->LoadData('liste.csv');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->BasicTable($header,$data);
$pdf->AddPage();
//$pdf->ImprovedTable($header,$data);
$pdf->AddPage();
//$pdf->FancyTable($header,$data);
$pdf->Output();
?>