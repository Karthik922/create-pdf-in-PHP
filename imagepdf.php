<html>
<head><title>PDF</title>
</head>
<body bgcolor="#00ffff">
<?php
	ob_start();
	require("fpdf182/fpdf.php");
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage(); 
	$pdf->Image('ball.jpg',0,0,50,50,'JPG'); //location X Y W H JPG
	$pdf->Output();
	ob_end_flush();

?>
</body>
</html>