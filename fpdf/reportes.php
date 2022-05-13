<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../assets/img/omenlogo.png',10,8,20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reportes de Usuarios',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(40,6,'Nombre',1,0,'C',0);
    $this->Cell(70,6,'Correo',1,0,'C',0);
    $this->Cell(40,6,'NombreUsuario',1,0,'C',0);
    $this->Cell(40,6,'Tipo Usuario',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

include '../conexion.php';
//creamos variable consulta para traer datos DB
$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->query($consulta);


// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

while ($mostrar = $resultado->fetch_assoc()){
    $pdf->Cell(40,6,$mostrar['Nombre'],1,0,'C',0);
    $pdf->Cell(70,6,$mostrar['Correo'],1,0,'C',0);
    $pdf->Cell(40,6,$mostrar['NombreUsuario'],1,0,'C',0);
    $pdf->Cell(40,6,$mostrar['TipoUsuario'],1,1,'C',0);

}
$pdf->Output();
?>