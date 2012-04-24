<?php
	App::import('Vendor','tcpdf/tcpdf');
	$tcpdf = new TCPDF();
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
	$tcpdf->Output('filename.pdf', 'D');
?>