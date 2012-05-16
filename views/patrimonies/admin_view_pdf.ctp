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
?>