<?php
class Patrimony extends AppModel {
	var $name = 'Patrimony';
	//descomentar para acert_preco
	//var $virtualFields = array('total' => 'SUM(Patrimony.priceUnit)');

	public $actsAs = array(
		'Locale.Locale',
            /*
		'SuperFind.SuperFind',
		'Logable' => array(
			'userModel' => 'User',
			'userKey' => 'user_id',
			'change' => 'full', // options are 'list' or 'full'
			'description_ids' => TRUE) // options are TRUE or FALSE
             * */
	);

	public $validate = array(
		'bmpNumber' => array(
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'O número BMP deve ser único.',
				'allowEmpty' => true
		))
	);

	var $belongsTo = array(
		'Equipment' => array(
			'className' => 'Equipment',
			'foreignKey' => 'equipment_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
                        'counterCache' => true
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