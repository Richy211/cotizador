<?php
	include 'plantilla.php';
	require 'class/class.php';

	$tra=new Trabajo();
	$datos=$tra->get_clientes();
	$detalle=$tra->get_detalle();

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFont('Arial','',14);
	$pdf->SetY(20);
	$pdf->Setx(70);
	$pdf->write(5,"Guia de Despacho");
	$pdf->Ln(10);

	$pdf->Cell(100,12,'Cliente :       '    .utf8_decode($datos[0]["cliente"]));
	$pdf->Ln(7);

	$pdf->Cell(100,12,'Contacto:   '     .utf8_decode($datos[0]["contacto"]));
	$pdf->Ln(7);

	$pdf->Cell(100,12,'RUT:          '   .utf8_decode($datos[0]["rut"]));
	$pdf->Ln(7);

	$pdf->Cell(100,12, 'Direccion:  '   .utf8_decode($datos[0]["direccion"]));
	$pdf->Ln(7);

	$pdf->Cell(100,12, 'Giro:           '   .utf8_decode($datos[0]["giro"]));
	$pdf->Ln(15);


	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(79,78,77);
	$pdf->SetFont('Arial','B',12);
	
	$pdf->Cell(70,6,'Material',1,0,'C',1);
	$pdf->Cell(20,6,'Cantidad',1,0,'C',1);
	$pdf->Cell(90,6,'Terminaciones',1,1,'C',1);

$pdf->SetFont('Arial','',10);



	
	$pdf->SetTextColor(78,79,77);
	$pdf->SetFillColor(232,232,232);
	for($i=0;$i<sizeof($detalle);$i++)
	{
		
		$pdf->Cell(70,6, utf8_decode($detalle[$i]['material']),1,0,'C',1);
		$pdf->Cell(20,6, utf8_decode($detalle[$i]['cantidad']),1,0,'C',1);
		$pdf->Cell(90,6, utf8_decode($detalle[$i]['terminaciones']),1,1,'C',1);

	}

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(100,12, 'No Contituye valor solamnete traslado.');
	$pdf->Ln(100);

	$pdf->SetFont('Arial','B',14);
	$pdf->Cell(100,12,'Persona que recibe :');
	$pdf->Ln(7);

	$pdf->Cell(20,10,'Fecha: ');
	$pdf->Cell(40,10,date('d/m/Y'),0,1,'L'); 
	$pdf->Ln(7);


	$pdf->output();
?>