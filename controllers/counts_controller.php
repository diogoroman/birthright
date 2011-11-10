<?php
class CountsController extends AppController {

	var $name = 'Counts';

	public $components = array(
		'RSearch.PaginationFilter' => array(
			'autoFilter' => true,
			'comparision' => 'or',
			'queryFields' => array ('Count.name' => 'like')
		)
	);
	
	function index() {
		$this->Count->recursive = 0;
		$this->set('counts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid count', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('count', $this->Count->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Count->create();
			if ($this->Count->save($this->data)) {
				$this->Session->setFlash(__('The count has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The count could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid count', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Count->save($this->data)) {
				$this->Session->setFlash(__('The count has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The count could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Count->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for count', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Count->delete($id)) {
			$this->Session->setFlash(__('Count deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Count was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Count->recursive = 0;
		$this->set('counts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid count', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('count', $this->Count->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Count->create();
			if ($this->Count->save($this->data)) {
				$this->Session->setFlash(__('The count has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The count could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid count', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Count->save($this->data)) {
				$this->Session->setFlash(__('The count has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The count could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Count->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for count', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Count->delete($id)) {
			$this->Session->setFlash(__('Count deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Count was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>