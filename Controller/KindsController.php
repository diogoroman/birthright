<?php

App::uses('AppController', 'Controller');
class KindsController extends AppController {

	var $name = 'Kinds';
        /*
	public $components = array(
		'RSearch.PaginationFilter' => array(
			'autoFilter' => true,
			'comparision' => 'or',
			'queryFields' => array ('Kind.name' => 'like')
		)
	);
	*/
	function index() {
		$this->Kind->recursive = 0;
		$this->set('kinds', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid kind', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('kind', $this->Kind->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Kind->create();
			if ($this->Kind->save($this->data)) {
				$this->Session->setFlash(__('The kind has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kind could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid kind', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Kind->save($this->data)) {
				$this->Session->setFlash(__('The kind has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kind could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Kind->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for kind', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Kind->delete($id)) {
			$this->Session->setFlash(__('Kind deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Kind was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Kind->recursive = 1;
		$this->set('kinds', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid kind', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('kind', $this->Kind->find('all', array('conditions' => array('Kind.id' => $id),
															'recursive' => 2)));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Kind->create();
			if ($this->Kind->save($this->data)) {
				$this->Session->setFlash(__('The kind has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kind could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid kind', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Kind->save($this->data)) {
				$this->Session->setFlash(__('The kind has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kind could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Kind->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for kind', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Kind->delete($id)) {
			$this->Session->setFlash(__('Kind deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Kind was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>