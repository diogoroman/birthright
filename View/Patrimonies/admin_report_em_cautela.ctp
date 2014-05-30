<?php
//pr($patrimonies);

// set cell margins
$xpdf->setCellMargins(1, 1, 1, 1);
$xpdf->SetAutoPageBreak( true, 20);
$xpdf->SetMargins(20,20,20,20);
$xpdf->SetFont('Aller-Std-Rg','',10);
$xpdf->SetTextColor(0,0,0);
$xpdf->SetFillColor(224, 235, 255);
$xpdf->SetHeaderData('', '', 'Grupamento de Infraestrutura e Apoio de São José dos Campos \n Assessoria de Tecnologia da Informação', '');
$xpdf->AddPage();


$fill = 0;
foreach($patrimonies as $patrimony)
{
	if(!empty($patrimony['Patrimony']['user_id']) and ($patrimony['Patrimony']['section_id'] != 63055))
	{
		$xpdf->MultiCell(260,0, $patrimony['Equipment']['description'], 'T','L', 0, 1);
		$xpdf->MultiCell(20, 0, 'CI', '', 'C', 0, 0);
		$xpdf->MultiCell(40, 0, 'PAT', '', 'C', 0, 0);
		$xpdf->MultiCell(40, 0, 'BMP', '', 'C', 0, 1);
		//$xpdf->Ln();
		$xpdf->MultiCell(20, 0, $patrimony['Patrimony']['id'], '', 'C', 0, 0);
		$xpdf->MultiCell(40, 0, $patrimony['Patrimony']['orderNum'], '', 'C', 0, 0);
		$xpdf->MultiCell(40, 0, $patrimony['Patrimony']['bmpNumber'], '', 'C', 0, 1);
		//$xpdf->Ln(20);
	}
}


//$xpdf->Image($xpdf->xheaderimage, 0,0,0,0,null,null,null,true,'300', 'C', null, null, null, null, null, true);
//$xpdf->MultiCell(130,10, $patrimony['Patrimony']['id'], null, 'C', null, null, 85,125);
//$xpdf->SetFont('Aller-Std-Rg','',16);
//$xpdf->MultiCell(130,10, 'Participou do PHPMS Conf 2012 realizado no Senac/MS nos dias 17 e 18 de Agosto de 2012, organizado pelo PHPMS e com carga horária total de 9,5 horas', null, 'C', null, null, 85,135);
$xpdf->Output('ATI_EMCAUTELA.pdf', 'I');
?>