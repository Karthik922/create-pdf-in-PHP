<html>
<head><title>PDF</title>
</head>
<body bgcolor="#00ffff">
<?php
	ob_start();
	require("fpdf182/fpdf.php");
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage(); //pt mm cm in_array
	//A4 A3 A5 Letter Legal
	$pdf->SetFont('Arial','B',18);
	$pdf->SetFillColor(231,98,90);
	$pdf->SetTextColor(236,40,41);
	$pdf->cell(100,70,'Hai Karthik',1,1,'C',true);
	// C center R right L left
	//$pdf->cell(80,70,'Hai Karthik','T');//L-leftborder R-right T-top B-buttom
	//$pdf->cell(60,10,'MCA ');
	$pdf->Output();
	ob_end_flush();

?>
</body>
</html>