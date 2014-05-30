<?php
class OwnersController extends AppController {

	var $name = 'Owners';

	function admin_index() {
		$this->Owner->recursive = 0;
		$this->set('owners', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid owner', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('owner', $this->Owner->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Owner->create();
			if ($this->Owner->save($this->data)) {
				$this->Session->setFlash(__('The owner has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The owner could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid owner', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Owner->save($this->data)) {
				$this->Session->setFlash(__('The owner has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The owner could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Owner->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for owner', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Owner->delete($id)) {
			$this->Session->setFlash(__('Owner deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Owner was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>