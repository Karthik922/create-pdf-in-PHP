<html>
<head><title>PDF</title>
</head>
<body bgcolor="#00ffaa">
<?php
	ob_start();
	require("fpdf182/fpdf.php");
	class PDF extends FPDF
	{
		function Header()
		{
			$this->setFont("Arial","B",20);
			$this->Cell(0,20,"Karthik",0,1,"C");
		}
		function body()
		{
			$this->setFont("Arial","B",12);
			for($i=0;$i<100;$i++)
			{
				$this->Cell(0,10,"Line".$i,0,1);
			}
		}
		function Footer(){
			$this->setY(-20);
			$this->setFont("Arial","B",12);
			$this->Cell(0,20,"Page-".$this->PageNo(),0,0,"C");
		}
		
	}
	$pdf= new PDF();
	$pdf->AddPage();
	$pdf->body();
	$pdf->Output();
	ob_end_flush();
?>
</body>
</html>