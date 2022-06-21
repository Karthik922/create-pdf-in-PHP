<html>
<head><title>PDF</title>
</head>
<body bgcolor="#00ffff">
<?php
$con=new mysqli("localhost","root","","empdata");
	ob_start();
	require("fpdf182/fpdf.php");
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage(); 
	$pdf->SetFont('Arial','B',11);
	$pdf->cell(30,10,'Accession No',1,0,'C');
	$pdf->cell(30,10,'Title',1,0,'C');
	$pdf->cell(30,10,'Author',1,0,'C');
	$pdf->cell(30,10,'Education',1,0,'C');
	$pdf->cell(30,10,'Publication',1,1,'C');
	$sql="SELECT * FROM books";
	$res=$con->query($sql);
	if($res->num_rows>0)
	{
		
		while($row=$res->fetch_assoc())
		{

			$pdf->cell(30,6,$row["Acno"],1,0);
			$pdf->cell(30,6,$row["Title"],1,0);
			$pdf->cell(30,6,$row["Author"],1,0);
			$pdf->cell(30,6,$row["Edn"],1,0);
			$pdf->cell(30,6,$row["Pub"],1,1);
		}
	}
	else
	{
		$pdf->cell(10,6,'No Records Found',1,0,'C');
		
	}
	$pdf->Output();
	ob_end_flush();

?>
</body>
</html>