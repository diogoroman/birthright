<?php
class PatrimonyStatus extends AppModel {
	var $name = 'PatrimonyStatus';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'DefaultValue' => array(
			'className' => 'DefaultValue',
			'foreignKey' => 'patrimony_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Patrimony' => array(
			'className' => 'Patrimony',
			'foreignKey' => 'patrimony_status_id',
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