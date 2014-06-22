<?php
/**
 * Controller de Log que gerencia os registros de log do sistemas
 *
 * PHP version 5
 *
 * Birthright: Sistema de Gerenciamento de Atividades de Patrimonio
 * Copyright 2011-2020, Diogo Oliveira Roman e Radig Soluções em TI. (http://www.radig.com.br)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2011, Diogo Oliveira Roman e Radig Soluções em TI. (http://www.radig.com.br)
 * @link          http://www.radig.com.br
 * @package       birthright
 * @subpackage    birthright.controllers
 * @since         Birthright(tm) v 0.1
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

class LogsController extends AppController {

	public $name = 'Logs';
        /*
	public $components = array(
		'RSearch.PaginationFilter' => array(
			'autoFilter' => true,
			'comparassion' => 'or',
			'queryFields' => array ( 'Log.title' => 'like', 'Log.description' => 'like', 'Log.created' => '=')
	));
	*/
        public function index()
	{
		$this->Log->recursive = 0;
		$this->set('logs', $this->paginate());
	}
        
	public function admin_index()
	{
		$this->Log->recursive = 0;
		$this->set('logs', $this->paginate());
	}

        public function view($id = null)
	{
		if (!$id)
		{
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Log'));
			$this->redirect(array('action' => 'index'));
		}
		
		$this->set('log', $this->Log->read(null, $id));
	}
        
	public function admin_view($id = null)
	{
		if (!$id)
		{
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Log'));
			$this->redirect(array('action' => 'index'));
		}
		
		$this->set('log', $this->Log->read(null, $id));
	}

}
?>