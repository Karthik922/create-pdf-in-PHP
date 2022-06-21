<html>
<head><title>PDF</title>
</head>
<body bgcolor="#00ffff">
<?php
	ob_start();
	require("fpdf182/fpdf.php");
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage(); 
	$pdf->Image('logo.jpg',0,0,50,50,'JPG'); //location X Y W H JPG
	$pdf->SetFont('Arial','B',18);
	$pdf->SetTextColor(0,0,0);
	$pdf->cell(40,10,'                              A.V.C COLLEGE OF ENGINEERING',0,1,'L');
	$pdf->SetFont('Arial','I',15);
	$pdf->cell(60,10,'                                Approved  by AICTE, Affiliated to Anna University',0,1,'L');
	$pdf->cell(70,10,'                                Re-Accredited by  NAAC with  B++  Grade(2nd Cycle)',0,1,'L');
	$pdf->cell(80,10,'                                An ISO 9001:2015 Certified Institution',0,1,'L');
	$pdf->Output();
	ob_end_flush();

?>
</body>
</html>