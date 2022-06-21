<html>
<head><title>PDF</title>
</head>
<body bgcolor="#00ffff">
<?php
	ob_start();
	require("fpdf182/fpdf.php");
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage(); 
	$pdf->SetFont('Arial','B',11);
	$pdf->cell(10,10,'SNO',1,0,'C');
	$pdf->cell(60,10,'NAME',1,0,'C');
	$pdf->cell(20,10,'TAMIL',1,0,'C');
	$pdf->cell(20,10,'ENGLISH',1,0,'C');
	$pdf->cell(20,10,'MATHS',1,0,'C');
	$pdf->cell(20,10,'SCIENCE',1,0,'C');
	$pdf->cell(20,10,'SOCIAl',1,1,'C');
	for($i=1;$i<=50;$i++)
	{
		$pdf->cell(10,6,$i,1,0,'C');
		$pdf->cell(60,6,'NAME-'.$i,1,0);
		$pdf->cell(20,6,rand(0,100),1,0,'C');
		$pdf->cell(20,6,rand(0,100),1,0,'C');
		$pdf->cell(20,6,rand(0,100),1,0,'C');
		$pdf->cell(20,6,rand(0,100),1,0,'C');
		$pdf->cell(20,6,rand(0,100),1,1,'C');
	}
	$pdf->Output();
	ob_end_flush();

?>
</body>
</html>