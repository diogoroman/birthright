<?php
class DefaultValuesController extends AppController {

	var $name = 'DefaultValues';
        
        function index() {
		$this->DefaultValue->recursive = 0;
		$this->set('defaultValues', $this->paginate());
	}

	function admin_index() {
		$this->DefaultValue->recursive = 0;
		$this->set('defaultValues', $this->paginate());
	}

        function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid default value', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('defaultValue', $this->DefaultValue->read(null, $id));
	}
        
	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid default value', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('defaultValue', $this->DefaultValue->read(null, $id));
	}

        function add() {
		if (!empty($this->data)) {
			$this->DefaultValue->create();
			if ($this->DefaultValue->save($this->data)) {
				$this->Session->setFlash(__('The default value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The default value could not be saved. Please, try again.', true));
			}
		}
		$kinds = $this->DefaultValue->Kind->find('list');
		$counts = $this->DefaultValue->Count->find('list');
		$measures = $this->DefaultValue->Measure->find('list');
		$owners = $this->DefaultValue->Owner->find('list');
		$equipmentTypes = $this->DefaultValue->EquipmentType->find('list');
		$patrimonyStatuses = $this->DefaultValue->PatrimonyStatus->find('list');
		$sections = $this->DefaultValue->Section->find('list');
		$positions = $this->DefaultValue->Position->find('list');
		$this->set(compact('kinds', 'counts', 'measures', 'owners', 'equipmentTypes', 'patrimonyStatuses', 'sections','positions'));
	}
        
	function admin_add() {
		if (!empty($this->data)) {
			$this->DefaultValue->create();
			if ($this->DefaultValue->save($this->data)) {
				$this->Session->setFlash(__('The default value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The default value could not be saved. Please, try again.', true));
			}
		}
		$kinds = $this->DefaultValue->Kind->find('list');
		$counts = $this->DefaultValue->Count->find('list');
		$measures = $this->DefaultValue->Measure->find('list');
		$owners = $this->DefaultValue->Owner->find('list');
		$equipmentTypes = $this->DefaultValue->EquipmentType->find('list');
		$patrimonyStatuses = $this->DefaultValue->PatrimonyStatus->find('list');
		$sections = $this->DefaultValue->Section->find('list');
		$positions = $this->DefaultValue->Position->find('list');
		$this->set(compact('kinds', 'counts', 'measures', 'owners', 'equipmentTypes', 'patrimonyStatuses', 'sections','positions'));
	}

        function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid default value', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DefaultValue->save($this->data)) {
				$this->Session->setFlash(__('The default value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The default value could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DefaultValue->read(null, $id);
		}
		$kinds = $this->DefaultValue->Kind->find('list');
		$counts = $this->DefaultValue->Count->find('list');
		$measures = $this->DefaultValue->Measure->find('list');
		$owners = $this->DefaultValue->Owner->find('list');
		$equipmentTypes = $this->DefaultValue->EquipmentType->find('list');
		$patrimonyStatuses = $this->DefaultValue->PatrimonyStatus->find('list');
		$sections = $this->DefaultValue->Section->find('list');
		$positions = $this->DefaultValue->Position->find('list');
		$this->set(compact('kinds', 'counts', 'measures', 'owners', 'equipmentTypes', 'patrimonyStatuses', 'sections','positions'));
	}
        
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid default value', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DefaultValue->save($this->data)) {
				$this->Session->setFlash(__('The default value has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The default value could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DefaultValue->read(null, $id);
		}
		$kinds = $this->DefaultValue->Kind->find('list');
		$counts = $this->DefaultValue->Count->find('list');
		$measures = $this->DefaultValue->Measure->find('list');
		$owners = $this->DefaultValue->Owner->find('list');
		$equipmentTypes = $this->DefaultValue->EquipmentType->find('list');
		$patrimonyStatuses = $this->DefaultValue->PatrimonyStatus->find('list');
		$sections = $this->DefaultValue->Section->find('list');
		$positions = $this->DefaultValue->Position->find('list');
		$this->set(compact('kinds', 'counts', 'measures', 'owners', 'equipmentTypes', 'patrimonyStatuses', 'sections','positions'));
	}

        function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for default value', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DefaultValue->delete($id)) {
			$this->Session->setFlash(__('Default value deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Default value was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
        
	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for default value', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DefaultValue->delete($id)) {
			$this->Session->setFlash(__('Default value deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Default value was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>