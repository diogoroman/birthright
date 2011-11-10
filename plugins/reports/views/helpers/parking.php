<?php

App::import('Reports.ReportsAppHelper');

class ParkingHelper extends ReportsAppHelper
{
	public function report($parkings)
	{
		$out = '';
		
		$total = 0;
		
		$headers = array(
			__('Nome do Funcionário', true),
			__('Tipo de Veículo', true),
			__('Início do Uso do Estacionamento', true),
			__('Fim do Uso do Estacionamento', true),
		);
		
		$content = array();
		
		$counter = array();
		
		foreach($parkings as $parking)
		{
			 $content[] = array(
			 	$parking['User']['name'],
			 	$parking['VehicleType']['title'],
			 	$this->Locale->date($parking['Employee']['parking_begin'], true),
			 	$this->Locale->date($parking['Employee']['parking_end'],true)
			 );
			
			if(!isset($counter[$parking['VehicleType']['title']]) || empty($counter[$parking['VehicleType']['title']]))
				$counter[$parking['VehicleType']['title']] = 0;
	
			$counter[$parking['VehicleType']['title']]++;
		}
		
		$out .= '<table>';
		
		$out .= $this->Html->tableHeaders($headers);
		
		$out .= $this->Html->tableCells($content);
		
		$out .= '</table>';
		
		foreach($counter as $title => $number)
		{
			$out .= '<h3>' .  __('Número de ', true) . $title . 's : ' .  $number . '</h3>'; 
		}
		
		return $out;
	}
}