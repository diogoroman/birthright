<?php
class PatrimonyStatusesController extends AppController {

	var $name = 'PatrimonyStatuses';
        public $components = array('Paginator');
        public $paginate = array();

        function index() {
		$this->PatrimonyStatus->recursive = 0;
		$this->set('patrimonyStatuses', $this->paginate());
	}
        
	function admin_index() {
		$this->PatrimonyStatus->recursive = 0;
		$this->set('patrimonyStatuses', $this->paginate());
	}

        function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid patrimony status', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('patrimonyStatus', $this->PatrimonyStatus->read(null, $id));
	}
        
	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid patrimony status', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('patrimonyStatus', $this->PatrimonyStatus->read(null, $id));
	}

        function add() {
		if (!empty($this->data)) {
			$this->PatrimonyStatus->create();
			if ($this->PatrimonyStatus->save($this->data)) {
				$this->Session->setFlash(__('The patrimony status has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patrimony status could not be saved. Please, try again.', true));
			}
		}
	}
        
	function admin_add() {
		if (!empty($this->data)) {
			$this->PatrimonyStatus->create();
			if ($this->PatrimonyStatus->save($this->data)) {
				$this->Session->setFlash(__('The patrimony status has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patrimony status could not be saved. Please, try again.', true));
			}
		}
	}

        function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid patrimony status', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PatrimonyStatus->save($this->data)) {
				$this->Session->setFlash(__('The patrimony status has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patrimony status could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PatrimonyStatus->read(null, $id);
		}
	}
        
	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid patrimony status', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PatrimonyStatus->save($this->data)) {
				$this->Session->setFlash(__('The patrimony status has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patrimony status could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PatrimonyStatus->read(null, $id);
		}
	}

        function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for patrimony status', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PatrimonyStatus->delete($id)) {
			$this->Session->setFlash(__('Patrimony status deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Patrimony status was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
        
	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for patrimony status', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PatrimonyStatus->delete($id)) {
			$this->Session->setFlash(__('Patrimony status deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Patrimony status was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>