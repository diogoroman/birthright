<?php
App::uses('AppController', 'Controller');
class UsersController extends AppController {

	var $name = 'Users';
        /*
	public $components = array(
		'RSearch.PaginationFilter' => array(
			'autoFilter' => true,
			'queryFields' => array ( 'User.name' => 'like')
	));
         * */
	public function login()
	{
		$activeUser = $this->Auth->user();
		if(!empty($activeUser))
		{
			$activeUser['Group'] = $this->User->getGroups($activeUser['User']['id']);
			
			$groupKey = $this->Auth->sessionKey . '.groups';
			
			$this->Session->write($groupKey, $activeUser['Group']);
			
			$this->__setUserData($activeUser);
			
			$this->__setFlash('Você está autenticado', 'system-success');

			$this->redirect($this->Auth->redirect());
		}
	}
	
	public function logout()
	{
		$this->__clearUserData();
		$this->__setFlash('Você foi desconectado!', 'system');
		$this->redirect($this->Auth->logout());
	}
	
	/**
	 * Index do controlador
	 * @param $group_id id do grupo de usuários a serem exibidos
	 */
	
        function index($group_id = null)
	{			
		$conditions = array('conditions' => array());
	
		if(isset($group_id))
			$conditions = array('conditions' => array('Group.id' => $group_id));
		else
		if(isset($this->params['url']['group']) && !empty($this->params['url']['group']))
		{
			$conditions = array('conditions' => array('Group.id' => $this->params['url']['group']));
		}
		
		if(isset($this->paginate['conditions']))
			$conditions['conditions'] = array_merge($conditions['conditions'], $this->paginate['conditions']);
				
		$result = $this->paginate($conditions);
		$this->set('users', $result);
	}
        
	function admin_index($group_id = null)
	{			
		$conditions = array('conditions' => array());
	
		if(isset($group_id))
			$conditions = array('conditions' => array('Group.id' => $group_id));
		else
		if(isset($this->params['url']['group']) && !empty($this->params['url']['group']))
		{
			$conditions = array('conditions' => array('Group.id' => $this->params['url']['group']));
		}
		
		if(isset($this->paginate['conditions']))
			$conditions['conditions'] = array_merge($conditions['conditions'], $this->paginate['conditions']);
				
		$result = $this->paginate($conditions);
		$this->set('users', $result);
	}

        function view($id = null)
	{
		if (!$id)
		{
			$this->__setFlash('Selecione um usuário', 'system-warning');
			$this->redirect(array('action' => 'index'));
		}
		$this->loadModel('Patrimony');
		$this->set('patrimonies', $this->Patrimony->find('all', array('conditions' => 
			array('Patrimony.user_id' => $id))));
		$this->set('user', $this->User->read(null, $id));

	}
        
	function admin_view($id = null)
	{
		if (!$id)
		{
			$this->__setFlash('Selecione um usuário', 'system-warning');
			$this->redirect(array('action' => 'index'));
		}
		$this->loadModel('Patrimony');
		$this->set('patrimonies', $this->Patrimony->find('all', array('conditions' => 
			array('Patrimony.user_id' => $id))));
		$this->set('user', $this->User->read(null, $id));

	}

        function add($group_id = null)
	{
		if (!empty($this->data))
		{
			if(is_numeric($group_id))
			{
				$this->data['Group']['Group'] = $group_id;
			}
			
			if ($this->User->save($this->data))
			{
				$this->__setFlash('Novo usuário criado!', 'system-success');
				$this->redirect(array('action' => 'index'));
			}
			else
				$this->__setFlash('Usuário não pode ser criado. Verifique os campos preenchidos', 'system-error');
		}
		
		if(isset($this->data['User']['password']))
			unset($this->data['User']['password']);
			
		
		if(!isset($group_id))
		{
			$groups = $this->User->Group->find('list');
			$this->set('groups', $groups);
		}
		
		$sections = $this->User->Section->find('list',array('order' => array('Section.name')));
		$positions = $this->User->Position->find('list');
		$this->set(compact('sections','positions'));
		
		//Busca valores padrão
		$this->set('defaultValues', $this->User->Position->DefaultValue->read(null, '1'));
	}
        
	function admin_add($group_id = null)
	{
		if (!empty($this->data))
		{
			if(is_numeric($group_id))
			{
				$this->data['Group']['Group'] = $group_id;
			}
			
			if ($this->User->save($this->data))
			{
				$this->__setFlash('Novo usuário criado!', 'system-success');
				$this->redirect(array('action' => 'index'));
			}
			else
				$this->__setFlash('Usuário não pode ser criado. Verifique os campos preenchidos', 'system-error');
		}
		
		if(isset($this->data['User']['password']))
			unset($this->data['User']['password']);
			
		
		if(!isset($group_id))
		{
			$groups = $this->User->Group->find('list');
			$this->set('groups', $groups);
		}
		
		$sections = $this->User->Section->find('list',array('order' => array('Section.name')));
		$positions = $this->User->Position->find('list');
		$this->set(compact('sections','positions'));
		
		//Busca valores padrão
		$this->set('defaultValues', $this->User->Position->DefaultValue->read(null, '1'));
	}
	
        
        function edit($id = null)
	{
		if (!$id && empty($this->data))
		{
			$this->__setFlash('Selecione um usuário', 'system-warning');
			$this->redirect(array('action' => 'index'));
		}
		
		if (!empty($this->data))
		{
			if(!empty($this->data['User']['new_password']))
				$this->data['User']['password'] = $this->Auth->password($this->data['User']['new_password']);
			
			if ($this->User->save($this->data))
			{
				$this->__setFlash('Informações do usuário atualizadas!', 'system-success');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->__setFlash('Usuário não pode ser salvo. Verifique os campos preenchidos', 'system-error');
			}
		}
		
		if (empty($this->data))
		{
			$this->data = $this->User->read(null, $id);
			unset($this->data['User']['password']);
		}
		if(!isset($group_id))
		{
			$groups = $this->User->Group->find('list');
			$this->set('groups', $groups);
		}
		$sections = $this->User->Section->find('list',array('order' => array('Section.name')));
		$positions = $this->User->Position->find('list');
		$this->set(compact('sections','positions'));
		
		//Busca valores padrão
		$this->set('defaultValues', $this->User->Position->DefaultValue->read(null, '1'));
	}

	function admin_edit($id = null)
	{
		if (!$id && empty($this->data))
		{
			$this->__setFlash('Selecione um usuário', 'system-warning');
			$this->redirect(array('action' => 'index'));
		}
		
		if (!empty($this->data))
		{
			if(!empty($this->data['User']['new_password']))
				$this->data['User']['password'] = $this->Auth->password($this->data['User']['new_password']);
			
			if ($this->User->save($this->data))
			{
				$this->__setFlash('Informações do usuário atualizadas!', 'system-success');
				$this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->__setFlash('Usuário não pode ser salvo. Verifique os campos preenchidos', 'system-error');
			}
		}
		
		if (empty($this->data))
		{
			$this->data = $this->User->read(null, $id);
			unset($this->data['User']['password']);
		}
		if(!isset($group_id))
		{
			$groups = $this->User->Group->find('list');
			$this->set('groups', $groups);
		}
		$sections = $this->User->Section->find('list',array('order' => array('Section.name')));
		$positions = $this->User->Position->find('list');
		$this->set(compact('sections','positions'));
		
		//Busca valores padrão
		$this->set('defaultValues', $this->User->Position->DefaultValue->read(null, '1'));
	}
	

        function delete($id = null)
	{
		if (!$id)
		{
			$this->__setFlash('Selecione um usuário', 'system-warning');
			$this->__goBack();
		}
		
		if ($this->User->delete($id))
		{
			$this->__setFlash('Usuário excluído!', 'system-success');
			$this->__goBack();
		}
		
		$this->__setFlash('Usuário não pode ser excluido. Verifique os campos preenchidos', 'system-error');
		$this->__goBack();
	}
        
	function admin_delete($id = null)
	{
		if (!$id)
		{
			$this->__setFlash('Selecione um usuário', 'system-warning');
			$this->__goBack();
		}
		
		if ($this->User->delete($id))
		{
			$this->__setFlash('Usuário excluído!', 'system-success');
			$this->__goBack();
		}
		
		$this->__setFlash('Usuário não pode ser excluido. Verifique os campos preenchidos', 'system-error');
		$this->__goBack();
	}
	
	protected function __clearUserData()
	{
		$this->Session->delete('Patrimony.Menu');
	}
}
?>