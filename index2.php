<?php
	include 'plantilla.php';
	require 'class/class.php'; 

	$tra=new Trabajo();
	$datos=$tra->get_detalle();
	$presu=$tra->get_presupuesto();
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFont('Arial','b', 14);
	$pdf->SetY(20);
	$pdf->SetX(70);
	$pdf->write(5, 'Cotizacion Formal');



	$pdf->SetFont('Arial','',10);
	$pdf->SetY(30);
	$pdf->Setx(120);
	$pdf->write(5, 'Detalle del Envio');
	$pdf->Ln();

	$pdf->Setx(120);
	$pdf->write(5,'Fecha: ' .$presu[0]["fecha"]);
	$pdf->Ln();

	$pdf->Cell(100,12,"Cliente: " .$datos[0]["cliente"]);
	$pdf->Ln(7);


	$pdf->Cell(100,12,"Presupuesto: " .$presu[0]["presupuesto"]);
	$pdf->Ln(7);
	$pdf->Ln(7);

	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(79,78,77);
	$pdf->SetFont('Arial','B',12);
	
	$pdf->Cell(60,6,'MATERIAL',1,0,'C',1);
	$pdf->Cell(60,6,'TERMINACIONES',1,0,'C',1);
	$pdf->Cell(20,6,'M2',1,0,'C',1);
	$pdf->Cell(20,6,'Cant',1,0,'C',1);
	$pdf->Cell(20,6,'Total',1,1,'C',1);


	$pdf->SetFont('Arial','',10);

	$total =0;

	
	$pdf->SetTextColor(78,79,77);
	$pdf->SetFillColor(232,232,232);
	for($i=0;$i<sizeof($datos);$i++)
	{
		
		$pdf->Cell(60,6, utf8_decode($datos[$i]['material']),1,0,'C');
		$pdf->Cell(60,6, $datos[$i]['terminaciones'],1,0,'C');
		$pdf->Cell(20,6, $datos[$i]['valorM2'],1,0,'C');
		$pdf->Cell(20,6, $datos[$i]['cantidad'],1,0,'C');
		$pdf->Cell(20,6, $datos[$i]['valorM2']*$datos[$i]['cantidad'],1,1,'C');
		// $pdf->Ln();
		$total += $datos[$i]['cantidad']*$datos[$i]['valorM2'];


	}
	$iva = $total * 0.19;

	$pdf->Cell(140,10,'Observaciones',0,0,'L');
	$pdf->Cell(20,10, 'Subtotal',0,0,'C');
	$pdf->Cell(20, 10, $total,0,0,'C');


	$pdf->Ln();

	$pdf->Cell(140,10,'',0,0,'C')/**/;
	$pdf->Cell(20,10, 'IVA',0,0,'C');
	$pdf->Cell(20, 10, $iva,0,0,'C');

	$pdf->Ln();

	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(79,78,77);
	$pdf->Cell(140,10,'',0,0,'C',1);
	$pdf->Cell(20,10, 'Total',0,0,'C',1);
	$pdf->Cell(20, 10, $iva+$total,0,0,'C',1);



	$pdf->Output();
?>