<?php 
/**
 * Helper para gerar relatórios de folha de pagamento
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
class PayrollHelper extends ReportsAppHelper
{	
	public function report($payroll)
	{
		$out = '';
		
		$total = 0;
		
		$headers = array(
			__('Funcionário', true),
			__('Salário', true),
			__('Descontos', true),
			__('Valor Líquido', true)
		);
		
		if(isset($this->settings['type']) && $this->settings['type'] == 'paid')
		{
			$headers[] = __('Data de Pagamento', true);
		}
		
		$content = array();
		
		foreach($payroll as $pay)
		{
			$content[$total] = array(
				$pay['Employee']['User']['name'],
				$this->Locale->currency($pay['Employee']['salary']),
				$this->Locale->currency($pay['EmployeePayment']['discounts']),
				$this->Locale->currency($pay['EmployeePayment']['liquid_value'])
			);
			
			if(isset($this->settings['type']) && $this->settings['type'] == 'paid')
			{
				$content[$total][] = $this->Locale->date($pay['EmployeePayment']['payment_date'], true);
			} 
			
			$total++;
		}
		
		$out .= '<table>';
		
		$out .= $this->Html->tableHeaders($headers);
		
		$out .= $this->Html->tableCells($content);
		
		$out .= '</table>';
		
		return $out;
	}
}