<?php
class PatrimoniesController extends AppController {

	var $name = 'Patrimonies';

	var $helpers = array('Locale.Locale');
	
	public $components = array(
		'RSearch.PaginationFilter' => array(
			'autoFilter' => true,
			'comparision' => 'or',
			'queryFields' => array ( 'Equipment.description' => 'like',
									 'Patrimony.orderNum' => '=',
									 'Equipment.fcg' => '=')
		)
	);
	
	function admin_index() {
		if(!empty($this->params['url']['filter']) && $this->params['url']['filter'] == 'waiting')
		{
			$this->Patrimony->recursive = 0;
			$this->set('patrimonies', $this->paginate('Patrimony',array(
													  'Patrimony.patrimony_status_id =' => '3')));
		}
		else if(!empty($this->passedArgs['filter']) && $this->passedArgs['filter'] == 'waiting')
		{
			$this->Patrimony->recursive = 0;
			$this->set('patrimonies', $this->paginate('Patrimony',array(
													  'Patrimony.patrimony_status_id =' => '3')));
		}
		else
		{
			$this->Patrimony->recursive = 0;
			$this->set('patrimonies', $this->paginate());
		}
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid patrimony', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('patrimony', $this->Patrimony->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Patrimony->create();
			if ($this->Patrimony->save($this->data)) {
				$this->Session->setFlash(__('The patrimony has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patrimony could not be saved. Please, try again.', true));
			}
		}
		$equipment = $this->Patrimony->Equipment->find('list',array('fields' => array('Equipment.id', 'Equipment.fcg')));
		$organizations = $this->Patrimony->Organization->find('list');
		$sections = $this->Patrimony->Section->find('list',array('order' => array('Section.name')));
		$users = $this->Patrimony->User->find('list');
		$patrimonyStatuses = $this->Patrimony->PatrimonyStatus->find('list',array('fields' => array('PatrimonyStatus.id', 'PatrimonyStatus.name')));
		$this->set(compact('equipment', 'organizations', 'sections', 'users','patrimonyStatuses'));
		
		//busca os valores padrões
		$this->set('defaultValues', $this->Patrimony->Section->DefaultValue->read(null, '1'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid patrimony', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Patrimony->save($this->data)) {
				$this->Session->setFlash(__('The patrimony has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patrimony could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Patrimony->read(null, $id);
		}
		$equipment = $this->Patrimony->Equipment->find('list',array('fields' => array('Equipment.id', 'Equipment.fcg')));
		$organizations = $this->Patrimony->Organization->find('list');
		$sections = $this->Patrimony->Section->find('list',array('order' => array('Section.name')));
		$users = $this->Patrimony->User->find('list',array('order' => array('User.name')));
		$patrimonyStatuses = $this->Patrimony->PatrimonyStatus->find('list');
		$this->set(compact('equipment', 'organizations', 'sections', 'users','patrimonyStatuses'));
		
		$this->set('patrimony', $this->Patrimony->read(null, $id));
		
		$this->set('defaultValues', $this->Patrimony->Section->DefaultValue->read(null, '1'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for patrimony', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Patrimony->delete($id)) {
			$this->Session->setFlash(__('Patrimony deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Patrimony was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>