<?php
require('../fpdf/fpdf.php');
include("../conex.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../images/l.gif' , 10 ,8, 10 , 13,'GIF');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(40, 10, '', 0);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(10, 8, 'DIRECCION DE VINCULACION SOCIAL', 0);
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Hoy: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE ESTUDIANTES MATRICULADOS', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
//$pdf->Cell(100, 8, 'Desde: '.$verDesde.' hasta: '.$verHasta, 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'Nº', 0);
$pdf->Cell(70, 8, 'Cedula', 0);
$pdf->Cell(40, 8, 'Nombre', 0);
$pdf->Cell(25, 8, 'Apellido', 0);
$pdf->Cell(25, 8, 'Nombre de Proyecto', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysql_query("select cedulaUsu,nombreUsu,apellidoUsu,nombrePeri,nombreUnid,
    		nombreCarr,nombreNivel,nombreHor,horas,nombreTutor,nombrePro,estadoMat,fechaMat from usuario U,
    		 carrera C, unidadacademica UN,nivel N,proyecto P, matricula M, periodoacademico PA,horario HR,horas H
    		 where estadoMat='Matriculado' and U.idUsu=M.idUsu and UN.idUnid=M.idUnid and c.idCarr=M.idCarr and
    		 N.idNivel=M.idNivel and p.idPro=M.idpro and PA.idPeri=M.idPeri and HR.idHor=M.idHor and H.idH=M.idH ");$item = 0;
while($productos2 = mysql_fetch_array($productos)){
	$item = $item+1;
	$pdf->Cell(15, 8, $item, 0);
	$pdf->Cell(70, 8,$productos2['cedulaUsu'], 0);
	$pdf->Cell(40, 8, $productos2['nombreUsu'], 0);
	$pdf->Cell(25, 8, 'S/. '.$productos2['apellidoUsu'], 0);
	$pdf->Cell(25, 8, 'S/. '.$productos2['nombrePro'], 0);
	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);


$pdf->Output('reporte.pdf','D');
?>