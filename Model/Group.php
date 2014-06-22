<?php
/**
 * Classe que representa os Estado brasileiro
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
class Group extends AppModel
{
	/**
	 * @var string $name
	 */
	public $name = 'Group';
	
	/**
	 * @var string $displayName
	 */
	public $displayField = 'name';

	/**
	 * Behaviors
	 * @var string actsAs
	 */
        /*
	public $actsAs = array(
		'Logable' => array(
			'userModel' => 'User',
			'userKey' => 'user_id',
			'change' => 'full', // options are 'list' or 'full'
			'description_ids' => TRUE // options are TRUE or FALSE
	));
	*/
	/**
	 * Associações do tipo HABTM 
	 * @var array $hasAndBelongsToMany
	 */
	public $hasAndBelongsToMany = array(
		'User' => array(
			'className' => 'User',
			'joinTable' => 'users_groups',
			'foreignKey' => 'group_id',
			'associationForeignKey' => 'user_id',
			'unique' => true
		)
	);
	
	/**
	 * Método estático que retorna todos os grupos
	 * @param 
	 * @return array lista associativa com Group.id => Group.name
	 */
	public static function getAll()
	{
		$group =& ClassRegistry::getObject('Group');
		
		if(!$group)
		{
			$group = new Group();
			ClassRegistry::addObject('Group', $group);
		}
		
		return $group->find('list');
	}
}
?>