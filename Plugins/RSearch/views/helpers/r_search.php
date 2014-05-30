<?php
/** 
 * Helper para criação de input de pesquisa personalizado
 * 
 * Possui método para imprimir um form com um campo de pesquisa que envia os valores via get e inclui outras variáveis
 * definidas da url
 * 
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * @copyright 2011, Radig - Soluções em TI, www.radig.com.br
 * @link http://www.radig.com.br
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 *
 * @package radig
 * @subpackage radig.pagination.views.helpers
 */
class RSearchHelper extends AppHelper
{
	/**
	 * Helpers 
	 * @var array $helpers
	 */
	public $helpers = array('Form');
	
	/**
	 * Indices de $this->params['url'] que não podem ser alterados
	 * @var array $reservedIndexes
	 */
	public $reservedIndexes = array( 'url', 'ext', 'page');
	
	/**
	 * Retorna um formulário de pesquisa personalidado 
	 * @param string $query_var query string name
	 * @param array $options Form input options
	 * @param array $getVars variables to be passed via get
	 */
	public function searchForm($query_var = 'q', $options = array(), $getVars = null)
	{
		if(!isset($getVars))
		{
			trigger_error(__('RSearch Helper: missing third parameter \'getVars\''));
			return;
		}
		 
		//evita a repetição do input de nome $query_var (linha 69)
		array_push($this->reservedIndexes,$query_var);
		
		$controller = $this->params['controller'];

		//cria um formulário com o nome do model atual
		$out  = $this->Form->create(Inflector::camelize(Inflector::singularize($controller)), array('action' => 'index', 'type' => 'get', 'length' => 100));

		//cria um input com nome $query_var e opções $options
		$out .= $this->Form->input($query_var, $options);
		
		//inclui as variaveis presentes em $this->params['pass'], caso contrário utiliza $this->params['url']
		if(!empty($this->params['pass']))
		{ 
			foreach ($this->params['pass'] as $i => $value)
				$out .= $this->Form->input($getVars[$controller][$i], array('type' => 'hidden', 'div' => false, 'value' => $value));
		}
		else if(!empty($this->params['url']))
		{
			foreach ($this->params['url'] as $key => $value)
			{
				//indices reservados são ignorados
				if(in_array($key, $this->reservedIndexes))
					continue;
				$out .= $this->Form->input($key, array('type' => 'hidden', 'div' => false, 'value' => $value));
			}
		}
		
		$out .= $this->Form->end();
		
		return $out;
	}
}