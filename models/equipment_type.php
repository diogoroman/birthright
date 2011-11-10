<?php
class EquipmentType extends AppModel {
	var $name = 'EquipmentType';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'DefaultValue' => array(
			'className' => 'DefaultValue',
			'foreignKey' => 'equipment_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Equipment' => array(
			'className' => 'Equipment',
			'foreignKey' => 'equipment_type_id',
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