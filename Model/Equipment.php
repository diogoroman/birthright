<?php
class Equipment extends AppModel {
	var $name = 'Equipment';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
        
	public $actsAs = array(
		'Locale.Locale',
		/*'SuperFind.SuperFind',
		'Logable' => array(
			'userModel' => 'User',
			'userKey' => 'user_id',
			'change' => 'full', // options are 'list' or 'full'
			'description_ids' => TRUE) // options are TRUE or FALSE*/
	);
        
        public $validate = array(
		'price' => array(
			'valor' => array(
				'rule' => 'numeric',
				'message' => 'O campo valor deve ter apenas números',
				'allowEmpty' => true
		))
	);
        
	var $belongsTo = array(
		'Kind' => array(
			'className' => 'Kind',
			'foreignKey' => 'kind_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Count' => array(
			'className' => 'Count',
			'foreignKey' => 'count_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EquipmentType' => array(
			'className' => 'EquipmentType',
			'foreignKey' => 'equipment_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Owner' => array(
			'className' => 'Owner',
			'foreignKey' => 'owner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Measure' => array(
			'className' => 'Measure',
			'foreignKey' => 'measure_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Patrimony' => array(
			'className' => 'Patrimony',
			'foreignKey' => 'equipment_id',
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
        
        public function equipmentWithoutPatrimony($fields = null){
            $params = array(
                'fields' => $fields
            );
            
            $allEquipments = $this->find('list', $params);
            //foreach ($allEquipments as $equipment)
            while($equipment = each($allEquipments))
            {
                $quantity = $this->Patrimony->find('count', array(
                    'conditions' => array('Patrimony.equipment_id' => $equipment[0])
                ));
                
                if($quantity > 0){
                    unset($allEquipments[$equipment[0]]);
                }
            }
            return $allEquipments;
        }
        
}
?>