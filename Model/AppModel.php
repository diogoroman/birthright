<?php
/**
 * Model principal da aplicação
 *
 * PHP version 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Advocacia (tm) : Sistema de Gerenciamento de Atividades de Advocacia
 * Copyright 2009-2011, Radig Soluções em TI. (http://www.radig.com.br)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2011, Radig Soluções em TI. (http://www.radig.com.br)
 * @link          http://www.radig.com.br
 * @package       advocacia
 * @subpackage
 * @since         Advocacia(tm) v 0.1
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
App::uses('Model', 'Model');
class AppModel extends Model
{
	public $actsAs = array('Containable');
	
	public function beforeFind($queryData)
	{
		$this->query('SET NAMES utf8');
		
		return parent::beforeFind($queryData);
	}
}
