<?php

App::uses('AppController', 'Controller');
class EquipmentTypesController extends AppController {

	var $name = 'EquipmentTypes';

        function index() {
		$this->EquipmentType->recursive = 0;
		$this->set('equipmentTypes', $this->paginate());
	}
        
	function admin_index() {
		$this->EquipmentType->recursive = 0;
		$this->set('equipmentTypes', $this->paginate());
	}

        function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid equipment type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('equipmentType', $this->EquipmentType->read(null, $id));
	}
        
	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid equipment type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('equipmentType', $this->EquipmentType->read(null, $id));
	}

        function add() {
		if (!empty($this->data)) {
			$this->EquipmentType->create();
			if ($this->EquipmentType->save($this->data)) {
				$this->Session->setFlash(__('The equipment type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipment type could not be saved. Please, try again.', true));
			}
		}
	}
        
	function admin_add() {
		if (!empty($this->data)) {
			$this->EquipmentType->create();
			if ($this->EquipmentType->save($this->data)) {
				$this->Session->setFlash(__('The equipment type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipment type could not be saved. Please, try again.', true));
			}
		}
	}

        function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid equipment type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EquipmentType->save($this->data)) {
				$this->Session->setFlash(__('The equipment type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipment type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EquipmentType->read(null, $id);
		}
	}
        
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid equipment type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EquipmentType->save($this->data)) {
				$this->Session->setFlash(__('The equipment type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The equipment type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EquipmentType->read(null, $id);
		}
	}

        function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for equipment type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EquipmentType->delete($id)) {
			$this->Session->setFlash(__('Equipment type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Equipment type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
        
	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for equipment type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EquipmentType->delete($id)) {
			$this->Session->setFlash(__('Equipment type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Equipment type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>