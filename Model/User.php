<?php
class User extends AppModel {
	var $name = 'User';
	var $displayField = 'name';
	var $order = "User.name";
	
	public $actsAs = array(
		'Locale.Locale',
		'SuperFind.SuperFind',
		'Logable' => array(
			'userModel' => 'User',
			'userKey' => 'user_id',
			'change' => 'full', // options are 'list' or 'full'
			'description_ids' => TRUE // options are TRUE or FALSE
	));
	
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informe o nome'
			),
		),
		'username' => array(
			'unique' => array(
				'rule' => array('between', 4 , 15),
				'message' => 'Escolha um nome contendo entre 4 e 15 caracteres',
				'allowEmpty' => true
		))
	);

	public $hasAndBelongsToMany = array(
		'Group' => array(
			'className' => 'Group',
			'joinTable' => 'users_groups',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'group_id',
			'unique' => true
		)
	);
	var $belongsTo = array(
		'Section' => array(
			'className' => 'Section',
			'foreignKey' => 'section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	/**
	 * Recupera os grupos do usuário com $id
	 * @param int $id
	 */
	public function getGroups($id)
	{
		$data = $this->find('first', array('conditions' => array('User.id' => $id), 'contain' => array('Group')));
		
		$groups = array();
		
		foreach($data['Group'] as $group)
		{
			$groups[$group['id']] = $group['alias'];
		}
		
		return $groups;
	}
	
	/**
	 * Sobrecarregando o método paginate para retornar os usuários por grupo. Busca utilizando o behavior SuperFind
	 * @param $conditions
	 * @param $fields
	 * @param $order
	 * @param $limit
	 * @param $page
	 * @param $recursive
	 * @param $extra
	 * @return array resultado
	 */
	public function paginate($conditions = null,$fields, $order, $limit, $page = 1, $recursive = null, $extra = array())
	{
		$options = array(
			'conditions' => $conditions['conditions'],
			'order' => $order, 
			'limit' => $limit,
			'page' => $page, 
			'recursive' => $recursive
		);
		
		return $this->superFind('all', $options);
	}
	
	/**
	 * Sobrecarregando método paginateCount de contagem de registros de paginação, usando o behavior SuperFind
	 * @param array $conditions
	 * @param int $recursive
	 */
	public function paginateCount($conditions = null, $recursive = null, $extra = array())
	{
		$options = array(
			'conditions' => $conditions['conditions'],
			'recursive' => $recursive,
		);
		return $this->superFind('count', $options);
	}

	/**
	 * **************************************************
	 * Begin of copyrighted content to Matt Curry
	 * **************************************************
	 * 
	 * Static methods that can be used to retrieve the logged in user
	 * from anywhere
	 *
	 * Copyright (c) 2008 Matt Curry
	 * www.PseudoCoder.com
	 * http://github.com/mcurry/cakephp/tree/master/snippets/static_user
	 * http://www.pseudocoder.com/archives/2008/10/06/accessing-user-sessions-from-models-or-anywhere-in-cakephp-revealed/
	 *
	 * @author      Matt Curry <matt@pseudocoder.com>
	 * @license     MIT
	 */
	public static function &getInstance($user=null)
	{
		static $instance = array();

		if ($user)
		{
			$instance[0] = $user;
		}

		if (!$instance)
		{
			trigger_error(__("User not set.", true), E_USER_WARNING);
			return false;
		}

		return $instance[0];
	}

	public static function store($user)
	{
		if (empty($user))
		{
			return false;
		}

		User::getInstance($user);
	}

	public function get($path)
	{
		$_user = User::getInstance();

		$path = str_replace('.', '/', $path);
		
		if (strpos($path, 'User') !== 0)
		{
			$path = sprintf('User/%s', $path);
		}

		if (strpos($path, '/') !== 0)
		{
			$path = sprintf('/%s', $path);
		}

		$value = Set::extract($path, $_user);

		if (!$value)
		{
			return false;
		}

		return $value[0];
	}
	
	/**
	 * *****************************************
	 * End of copyright to Matt Curry
	 */
}

?>