<?php
/**
 * Classe que representa as informações de log do sistema de patrimonio
 *
 * PHP version 5
 *
 * Birthright: Sistema de Gerenciamento de Atividades de Patrimonio
 * Copyright 2009-2011, Diogo Oliveira Roman e Radig Soluções em TI. (http://www.radig.com.br)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2011, Diogo Oliveira Roman e Radig Soluções em TI. (http://www.radig.com.br)
 * @link          http://www.radig.com.br
 * @package       birthright
 * @subpackage    birthright.models
 * @since         Birthright(tm) v 0.1
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class Log extends AppModel
{
	/**
	 * @var string $name
	 */
	public $name = 'Log';
	
	/**
	 * Seta o tipo de ordenação dos registros de Log
	 * @var string $order
	 */
	public $order = 'created DESC';
	
	//public $actsAs = array('Locale.Locale' => array('ignoreAutomagic' => false));
	
}
?>