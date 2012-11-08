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
			$this->paginate['order'] = array('Equipment.created DESC');
			$this->set('equipment', $this->paginate('Equipment',array(
									 'Equipment.includeRegister =' => '0000-00-00 00:00:00')));
		}
		else
		{
			$this->Equipment->recursive = 0;
			$this->paginate['order'] = array('Equipment.created DESC');
			$this->set('equipment', $this->paginate());
		}
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid equipment', true));
			$this->redirect(array('action' => 'index'));
		}
		//nao esta retornando todas as instacia de patrimony
		//$this->set('equipment', $this->Equipment->read(null, $id));
		$this->set('equipment', $this->Equipment->find('all', array('conditions' => array('Equipment.id' => $id),
																	'recursive' => 2)));
		
		/*$this->set('equipment', $this->Equipment->read(null, $id));
		 * array('conditions' => array('Article.id' => 1))
		 * $this->set('equipment', $this->Equipment->find('all', array('conditions' => array('Equipment.id' => $id))));
		 * user_related
		 * section_related
		 */
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Equipment->create();
			if ($this->Equipment->save($this->data)) {
				$this->setFlash(__('O material foi gravado com sucesso', 'system-success'));
				$this->redirect(array('action' => 'view', $this->Equipment->id));
			} else {
				$this->setFlash(__('O material não pode ser gravado. Por favor, tente novamente.', 'system-error'));
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
				$this->setFlash(__('O Material foi modificado com sucesso', 'system-success'));
				$this->redirect(array('action' => 'view', $this->Equipment->id));
			} else {
				$this->Session->setFlash(__('O material não pode ser modificado. Por favor, tente novamente.', true));
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
			$this->setFlash(__('Equipamento não encontrado, erro interno', 'system-error'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Equipment->delete($id)) {
			$this->Session->setFlash(__('Equipamento Excluido com sucesso', 'system-success'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('O Equipamento não foi Excluido', 'system-warning'));
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