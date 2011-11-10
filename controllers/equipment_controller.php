<?php
class EquipmentController extends AppController {
	var $name = 'Equipment';

	var $helpers = array('Locale.Locale');
	
	public $components = array(
		'RSearch.PaginationFilter' => array(
			'autoFilter' => true,
			'comparision' => 'or',
			'queryFields' => array ( 'Equipment.description' => 'like',
									 'Equipment.fcg' => '=')
		)
	);
	
	
	function admin_index() {
		if(!empty($this->params['url']['filter']) && $this->params['url']['filter'] == 'include')
		{
			$this->Equipment->recursive = 0;
			$this->set('equipment', $this->paginate('Equipment',array(
									 'Equipment.includeRegister =' => '0000-00-00 00:00:00')));
		}
		else
		{
			$this->Equipment->recursive = 0;
			$this->set('equipment', $this->paginate());
		}
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid equipment', true));
			$this->redirect(array('action' => 'index'));
		}
		//nao esta retornando todas as instacia de patrimony
		$this->set('equipment', $this->Equipment->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Equipment->create();
			if ($this->Equipment->save($this->data)) {
				$this->Session->setFlash(__('The equipment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipment could not be saved. Please, try again.', true));
			}
		}
		$kinds = $this->Equipment->Kind->find('list');
		$counts = $this->Equipment->Count->find('list');
		$owners = $this->Equipment->Owner->find('list');
		$measures = $this->Equipment->Measure->find('list');
		$equipmentTypes = $this->Equipment->EquipmentType->find('list');
		$this->set(compact('kinds', 'counts', 'equipmentTypes', 'owners', 'measures'));
		//busca os valores padrões
		$this->set('defaultValues', $this->Equipment->Kind->DefaultValue->read(null, '1'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid equipment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Equipment->save($this->data)) {
				$this->Session->setFlash(__('The equipment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Equipment->read(null, $id);
		}
		$kinds = $this->Equipment->Kind->find('list');
		$counts = $this->Equipment->Count->find('list');
		$owners = $this->Equipment->Owner->find('list');
		$measures = $this->Equipment->Measure->find('list');
		$equipmentTypes = $this->Equipment->EquipmentType->find('list');
		$this->set(compact('kinds', 'counts', 'equipmentTypes', 'owners', 'measures'));
		
		//busca os valores padrões
		$this->set('defaultValues', $this->Equipment->Kind->DefaultValue->read(null, '1'));
		
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for equipment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Equipment->delete($id)) {
			$this->Session->setFlash(__('Equipment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Equipment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
/*	
	function admin_acert_value($id = null)
	{
		if(empty($id))
		{
			$allEquipment = $this->Equipment->find('list',array('fields' => array('Equipment.id')));
			
			foreach ($allEquipment as $equipmentId)
			{
				$quantity = $this->Equipment->Patrimony->find('count',array(
															  'conditions' => array('Patrimony.equipment_id' => $equipmentId),
															  'recursive' => '-1'));
				
				$total = $this->Equipment->Patrimony->find('all', array('fields' => array('total'),
																		'conditions' => array('Patrimony.equipment_id' => $equipmentId)));
				$this->Equipment->read(null,$equipmentId);
				$this->Equipment->set(array(
					'quantity' => $quantity,
					'price' => $total['0']['Patrimony']['total']));
				$this->Equipment->save();
			}
			$this->__setFlash('Valores acertados', 'system-success');
													
		}
		else
		{
			//TODO acerta apenas do id
		}
	}
	*/
}
?>