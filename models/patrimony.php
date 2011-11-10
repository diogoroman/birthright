<?php
class Patrimony extends AppModel {
	var $name = 'Patrimony';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $actsAs = array('Locale.Locale');
	
	//var $virtualFields = array('total' => 'SUM(Patrimony.priceUnit)');
	
	var $belongsTo = array(
		'Equipment' => array(
			'className' => 'Equipment',
			'foreignKey' => 'equipment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PatrimonyStatus' => array(
			'className' => 'PatrimonyStatus',
			'foreignKey' => 'patrimony_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Organization' => array(
			'className' => 'Organization',
			'foreignKey' => 'organization_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Section' => array(
			'className' => 'Section',
			'foreignKey' => 'section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>