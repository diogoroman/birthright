<?php
class Owner extends AppModel {
	var $name = 'Owner';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
        /*
	public $actsAs = array(
		'Locale.Locale',
		'SuperFind.SuperFind',
		'Logable' => array(
			'userModel' => 'User',
			'userKey' => 'user_id',
			'change' => 'full', // options are 'list' or 'full'
			'description_ids' => TRUE // options are TRUE or FALSE
	));
        */
	var $hasOne = array(
		'DefaultValue' => array(
			'className' => 'DefaultValue',
			'foreignKey' => 'owner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Equipment' => array(
			'className' => 'Equipment',
			'foreignKey' => 'owner_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>