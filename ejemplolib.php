<?php
require('fpdf.php');
//$pdf = new FPDF();
//$pdf -> AddPage();
//$pdf -> SetFont('Arial', 'B', 16);
//$pdf -> Cell(40, 10,'HOLA MUNDO');
//$pdf -> Output();

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('fondos.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'ALUMNOS',1,0,'C');
    
    // Salto de línea
    $this->Ln(20);
    $this->Cell(100,10,'Nombre del alumno', 1,0,'C', 0);
    $this->Cell(90,10,'No control',1,1,'C', 0);
  
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


$conexion = new mysqli("localhost","root","","bdd");


$consulta = "SELECT * FROM alumnos";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf -> Addpage();
$pdf -> SetFont('Arial', 'B', 10);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(100, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(90, 10, $row['control'], 1, 1, 'C', 0);
}

$pdf->Output();
?>
