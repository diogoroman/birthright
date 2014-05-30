<?php
/**
 * AppHelper para o plugin Report
 * 
 * Helper base para todos os helpers do plugin
 * relacionados aos relatórios.
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
 * @subpackage    rservices.report
 * @since         Rservices(tm) v 1.0
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
App::import('Core', 'Helper');
class ReportsAppHelper extends Helper
{
	public $name = '';

	public $helpers = array('Text', 'Html', 'Form', 'Locale.Locale');

	/**
	 * Configurações gerais
	 *
	 * @var array
	 */
	protected $settings = array();

	/**
	 * Sobrecarga do método construtor
	 * 
	 * Permite a passagem de parâmetros ao helper via construtor
	 */
	public function __construct()
	{
		parent::__construct();

		// atribui um nome 'apelido' para o objeto, que é o mesmo salvo na tabela 'covenants' coluna 'alias'
		$this->name = str_replace('Helper', '', get_class($this));

		// espera somento um parâmetro, com configurações do Helper
		if(func_num_args() == 1)
		{
			$settings = func_get_arg(0);
		}
		// caso contrário dispara um erro
		else
		{
			trigger_error(sprintf(__('O helper %s deve receber um único array como parâmetro', 1), $this->name), E_USER_ERROR);
		}

		// recupera lista de configuração definida como argumento do helper
		$this->settings = array_merge($this->settings, (array)$settings);
	}
}
?>