<?php
	include 'plantilla.php';
	require 'class/class.php'; 

	$tra=new Trabajo();
	$datos=$tra->get_detalle();
	$presu=$tra->get_presupuesto();
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();


	$pdf->SetFont('Arial','b',14);
	$pdf->SetY(20);
	$pdf->Setx(70);
	$pdf->write(5, 'Orden de Produccion');
	$pdf->Ln();


	$pdf->SetY(40);
	$pdf->Setx(120);
	$pdf->write(5,'Fecha de ingreso: ' .$presu[0]["fecha"]);
	$pdf->Ln();


	$pdf->Cell(100,12,"Cliente: " .$datos[0]["cliente"]);
	$pdf->Ln(7);


	$pdf->Cell(100,12,"Presupuesto: " .$presu[0]["presupuesto"]);
	$pdf->Ln(7);

	$pdf->Cell(100,12,"Fecha :" .date('d/m/Y'));
	$pdf->Ln(15);





	$pdf->SetTextColor(255,255,255);
	$pdf->SetFillColor(79,78,77);
	$pdf->SetFont('Arial','B',12);
	
	$pdf->Cell(70,6,'Material',1,0,'C',1);
	$pdf->Cell(20,6,'Cantidad',1,0,'C',1);
	$pdf->Cell(90,6,'Terminaciones',1,1,'C',1);
/*	$pdf->Cell(20,6,'Cant',1,0,'C',1);
	$pdf->Cell(20,6,'Total',1,1,'C',1);*/


	$pdf->SetFont('Arial','',10);



	
	$pdf->SetTextColor(78,79,77);
	$pdf->SetFillColor(232,232,232);
	for($i=0;$i<sizeof($datos);$i++)
	{
		
		$pdf->Cell(70,6, utf8_decode($datos[$i]['material']),1,0,'C',1);
		$pdf->Cell(20,6, utf8_decode($datos[$i]['cantidad']),1,0,'C',1);
		$pdf->Cell(90,6, utf8_decode($datos[$i]['terminaciones']),1,1,'C',1);

	}




	$pdf->Output();
?>