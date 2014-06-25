<?php

App::uses('AppController', 'Controller');
class PositionsController extends AppController {

	var $name = 'Positions';
        public $components = array('Paginator');
        public $paginate = array();

	function index() {
		$this->Position->recursive = 0;
		$this->set('positions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid position', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('position', $this->Position->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Position->create();
			if ($this->Position->save($this->data)) {
				$this->Session->setFlash(__('The position has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The position could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid position', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Position->save($this->data)) {
				$this->Session->setFlash(__('The position has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The position could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Position->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for position', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Position->delete($id)) {
			$this->Session->setFlash(__('Position deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Position was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Position->recursive = 0;
		$this->set('positions', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid position', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('position', $this->Position->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Position->create();
			if ($this->Position->save($this->data)) {
				$this->Session->setFlash(__('The position has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The position could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid position', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Position->save($this->data)) {
				$this->Session->setFlash(__('The position has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The position could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Position->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for position', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Position->delete($id)) {
			$this->Session->setFlash(__('Position deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Position was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>