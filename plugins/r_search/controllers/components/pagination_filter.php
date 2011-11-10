<?php
/**
 * Componente para filtragem de resultados de paginação
 *
 * PHP version 5
 * 
 * Copyright 2011, Radig Soluções em TI. (http://www.radig.com.br)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright	Copyright 2011, Radig Soluções em TI. (http://www.radig.com.br)
 * @link		http://www.radig.com.br
 * @license     http://www.opensource.org/licenses/mit-license.php The MIT License
 * 
 * @package		radig
 * @subpackage	radig.pagination.controllers.components
 */

App::import('Sanitize');

class PaginationFilterComponent extends Object
{
	/**
	 * Referência para o controlador que está em execução
	 * 
	 * @var Controller
	 */
	protected $Controller = null;
	
	/**
	 * Valor a ser buscado
	 * 
	 * @var string
	 */
	protected $query = '';
	
	/**
	 * Componentes utilizados
	 * @var array
	 */
	public $components = array('RequestHandler');
	
	/**
	 * Configurações gerais
	 * 
	 * - bool autoFilter true para fazer a filtragem automaticamente
	 * - string inputModel nome do modelo com os dados para busca
	 * - string inputString namo do campo com os dados para busca
	 * - string comparassion tipo de computação entre as comparações (união: 'or'; disjunção: 'and')
	 * - array queryFields contém todos os campos que serão comparados com a entrada associado com o 
	 * tipo de comparação.
	 *   exemplo: array('User.name' => 'like', 'User.age' => '=', 'User.salary' => '<')
	 * 
	 * @var array $settings
	 */
	public $settings = array(
		'autoFilter' => false,
		'method' => 'post', 
		'inputModel' => 'Filter',
		'inputName' => 'q',
		'comparassion' => 'or', 
		'queryFields' => array()
	);
	
	/**
	 * Inicialização do componente
	 * 
	 * @param Controller $controller
	 * @param array $settings
	 */
	public function initialize(&$controller, $settings = array())
	{	
		// saving the controller reference for later use
		$this->Controller =& $controller;
		$this->settings = Set::merge($this->settings, $settings);
	}
	
	/**
	 * Callback invocado imediatamente antes do Controller::beforeFilter()
	 * 
	 * @param Controller $controller
	 */
	public function startup(&$controller)
	{
		$this->Controller =& $controller;
		
		// seta o atributo de classe query
		$this->setQuery();
		
		if($this->settings['autoFilter'] === true)
		{
			$this->setFilter();
		}
	}
	
	/**
	 * Monta as condições adicionais para a paginação
	 * 
	 * @return array pagination options
	 */
	public function setFilter()
	{
		$conditions = array();
		
		if(!empty($this->query))
		{
			// monta condição para cada campo de interesse
			foreach($this->settings['queryFields'] as $field => $type)
			{
				if('like' == strtolower($type))
					$conditions[$this->settings['comparassion']][$field . ' LIKE '] = '%' . $this->query . '%';
				else if('=')
					$conditions[$this->settings['comparassion']][$field] = $this->query;
				else // <, >, >=, <=
					 $conditions[$this->settings['comparassion']][$field . ' ' . $type . ' '] = $this->query;
			}
		}
		
		$this->Controller->paginate = array_merge($this->Controller->paginate, array('conditions' => $conditions));

		// retorna as condições finais
		return $this->Controller->paginate['conditions'];
	}
	
	/**
	 * Identifica o meio de passagem e o valor passado para filtragem
	 * e o seta ao atributo de classe equivalente
	 * 
	 * @return string $query
	 */
	public function setQuery()
	{
		// caso seja uma requisição post e tenha dados do filtro setado
		if($this->RequestHandler->isPost() && strtolower($this->settings['method']) == 'post' && !empty($this->Controller->data[$this->settings['inputModel']]))
		{
			// recupera os dados setados
			$data = $this->Controller->data[$this->settings['inputModel']][$this->settings['inputName']];
		}
		// caso seja uma requisição get com named parameters e tenha dados do filtro na url
		else if($this->RequestHandler->isGet() && !empty($this->Controller->passedArgs[$this->settings['inputName']]))
		{
			$data = Sanitize::escape($this->Controller->passedArgs[$this->settings['inputName']]);
		}
		// caso seja uma requisão get padrão (com o símbolo ?) e tenha os dados do filtro na url
		else if($this->RequestHandler->isGet() && !empty($this->Controller->params['url'][$this->settings['inputName']]))
		{
			$data = Sanitize::escape($this->Controller->params['url'][$this->settings['inputName']]);
		}
		
		// caso não tenha nenhum dado para filtrar, retorna uma string vazia
		if(empty($data))
		{
			$data = '';
		}
		
		// seta o atributo da classe com o valor identificado
		$this->query = $data;
		
		return $data;
	}
	
	/**
	 * Retorna o valor do atributo protegido $query
	 * 
	 * @return string $query
	 */
	public function getQuery()
	{
		return $this->query;
	}
}

?>