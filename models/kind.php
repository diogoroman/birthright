<?php
class Kind extends AppModel {
	var $name = 'Kind';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'DefaultValue' => array(
			'className' => 'DefaultValue',
			'foreignKey' => 'kind_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Equipment' => array(
			'className' => 'Equipment',
			'foreignKey' => 'kind_id',
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