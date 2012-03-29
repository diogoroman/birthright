<?php

	App::import('Vendor','xtcpdf');
	$tcpdf = new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$textfont = 'helvetica';
	 
	$tcpdf->SetAuthor("Julia Holland");
	$tcpdf->SetAutoPageBreak(true);
	 
	$tcpdf->setPrintHeader(false);
	$tcpdf->setPrintFooter(false);
	 
	$tcpdf->SetTextColor(0, 0, 0);
	$tcpdf->SetFont($textfont,'',9);
	 
	$tcpdf->AddPage();
 
// create some HTML content
$htmlcontent = <<<EOF
Add HTML content here to print
EOF;
 
	// output the HTML content
	$tcpdf->writeHTML($htmlcontent, true, 0, true, 0);
	$tcpdf->Output('cautela.pdf', 'D');
	
?> 