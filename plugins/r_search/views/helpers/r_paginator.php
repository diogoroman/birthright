<?php
/** 
 * Helper para encapsular lógica de paginação
 * 
 * Possui método para imprimir/retornar todos os campos de paginação de uma única vez,
 * adiciona a url dos links de paginação as variáveis passadas via url a ação atual.
 * 
 * PHP version 5
 * 
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * @filesource
 * @copyright	Copyright 2011, Radig Soluções em TI. (http://www.radig.com.br)
 * @link        http://www.radig.com.br
 * @license     http://www.opensource.org/licenses/mit-license.php The MIT License
 *
 * @package     radig
 * @subpackage  radig.pagination.views.helpers
 */

class RPaginatorHelper extends AppHelper
{
	/**
	 * Referência para instância do PaginatorHelper
	 * 
	 * @var PaginatorHelper
	 */
	protected $_paginator = null;
	
	/**
	 * Prepara e retorna/imprime os controles de navegação
	 * 
	 * O primeiro parâmetro corresponde a uma referência a classe PaginatorHelper
	 * instanciada pelo controlador, enquanto o segundo parâmetro é um array com as opções
	 * de saída.
	 * 
	 * 
	 * @param PaginatorHelper $paginator
	 * @param array $options Possui dois índices reconhecidos:
	 *  - 'return' do tipo bool, se true faz o método retornar o resultado ao invés de imprimir.
	 *  Valor padrão é false
	 *  - 'filters' do tipo array que contém as condições para a paginação, acrescido de todos
	 *  os parâmetros passados via url
	 */
	public function controls(&$paginator, $options = array())
	{
		$this->_paginator =& $paginator;
		
		if(!empty($options['filters']) && is_array($options['filters']))
		{
			$this->_paginator->options(array('url' => array_merge($options['filters'], $this->params['pass'])));
		}
		else
		{
			$this->_paginator->options(array('url' => $this->params['pass']));
		}
		
		$out =	$this->_paginator->first('<< '.__('primeiro', true), array(), null, array('class'=>'disabled')) .
				$this->_paginator->prev(__('anterior', true), array(), null, array('class'=>'disabled')) .
				$this->_paginator->numbers(array('separator' => '')) .
				$this->_paginator->next(__('próximo', true), array(), null, array('class' => 'disabled')) .
				$this->_paginator->last(__('ultimo', true).' >>', array(), null, array('class' => 'disabled'));
		
		if(isset($options['return']) && $options['return'] === true)
		{
			return $out;
		}
		else
		{
			echo $out;
		}
	}
}