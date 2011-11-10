<?php
/**
 * Helper para gerar relatórios 
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
class BillsHelper extends ReportsAppHelper
{
	/**
	 * 
	 * @param array $data
	 */
	public function report($bills)
	{
		$out = '';
		
		$totalReg = 0;
		$totalVal = 0;
		
		$headers = array(
			__('Identificação', true),
			__('Origem', true),
			__('Descrição', true),
			__('Valor', true),
			__('Vencimento', true),
			__('Data do pagamento', true)
		);
		
		$content = array();
		
		foreach($bills as $bill)
		{
			$content[] = array(
				$bill['Bill']['identification'],
				$bill['Bill']['origin'],
				$this->Text->truncate($bill['Bill']['description'], 50, array('ending' => '...')),
				$this->Locale->currency($bill['Bill']['value']),
				$this->Locale->date($bill['Bill']['term'], true),
				empty($bill['Bill']['payment']) ? __('Não registrado', true) : $this->Locale->date($bill['Bill']['payment'])
			);
			$totalReg ++;
			$totalVal += $bill['Bill']['value'];
		}
		
		$out .= '<table>';
		
		$out .= $this->Html->tableHeaders($headers);
		
		$out .= $this->Html->tableCells($content);
		
		$out .= '</table>';
		
		$out .= '<h3>Total de registros: '.$totalReg.'</h3>';
		
		$out .= '<h3>Valor Total: '.$this->Locale->currency($totalVal).'</h3>';
		return $out;
	}
}