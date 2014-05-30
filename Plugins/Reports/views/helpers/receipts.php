<?php 
/**
 * Helper para gerar relatórios de contas a receber
 *
 * PHP version 5
 *
 * RServices(tm) : Radig Services
 * Copyright 2011, Radig Soluções em TI. (http://www.radig.com.br)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2011, Radig Soluções em TI. (http://www.radig.com.br)
 * @link          http://www.radig.com.br
 * @package       rservices
 * @subpackage    rservices.report.views.helpers
 * @since         Rservices(tm) v 1.0
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
App::import('Reports.ReportsAppHelper');
class ReceiptsHelper extends ReportsAppHelper
{
	public function report($receipts)
	{
		$out = '';
		
		$total = 0;
		
		$headers = array(
			__('Número do Recibo', true),
			__('Código do processo', true),
			__('Cliente', true),
			__('Valor', true),
			__('Vencimento', true),
			__('Quitado', true)
		);
		
		$content = array();
		
		foreach($receipts as $receipt)
		{
			$content[] = array(
				$receipt['Receipt']['number'],
				$receipt['Process']['default_number'],
				$receipt['Process']['Customer']['User']['name'],
				$this->Locale->currency($receipt['Receipt']['amount']),
				$this->Locale->date($receipt['Receipt']['date'], true),
				$receipt['Receipt']['paid'] ? __('Pago', true) : __('Não Pago', true)
			);
		}
		
		$out .= '<table>';
		
		$out .= $this->Html->tableHeaders($headers);
		
		$out .= $this->Html->tableCells($content);
		
		$out .= '</table>';
		
		return $out;
	}
}

