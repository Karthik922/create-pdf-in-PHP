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
	$pdf->cell(40,10,'Hai Karthik');
	$pdf->cell(60,10,'MCA ');
	$pdf->Output();
	ob_end_flush();

?>
</body>
</html>