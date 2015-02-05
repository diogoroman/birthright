<?php
/**
 * Controller principal da aplicação
 *
 * PHP version 5
 *
 * Advocacia: Sistema de Gerenciamento de Atividades de Advocacia
 * Copyright 2009-2011, Radig Soluções em TI. (http://www.radig.com.br)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2011, Radig Soluções em TI. (http://www.radig.com.br)
 * @link          http://www.radig.com.br
 * @package       advocacia
 * @subpackage
 * @since         Advocacia(tm) v 0.1
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

App::uses('Model', 'User');
App::uses('Model', 'Group');
App::uses('Controller', 'Controller');

class AppController extends Controller
{
	/****************************
	 * Cake Controller atributes
	 ****************************/
	
	public $components = array('Auth','Session', 'RequestHandler', 'DebugKit.Toolbar');
	/*
        public $components = array('Auth', 'Session', 'RequestHandler', 'DebugKit.Toolbar');
         * 
	public $helpers = array(
		'Html',
		'Form',
		'Js',
		'Session',
		'Locale.Locale',
		'Menu',
		'RSearch.RSearch',
		'RSearch.RPaginator'
	);
		
	public $paginate = array('limit' => 30);
	
	public $userLogged = false;

	public $activeUser = null;

	public $action = null;
	
	*/
	/*************************
	 * Cake Callbacks
	 ************************/

	/**
	 * Callback default
	 * 
	 * @return void
	 */
        
	public function beforeFilter()
	{
		//$this->__setupAuth();

		//if($this->userLogged === true)
		//{
			$this->__buildMenu();
		//}

		//if($this->{$this->modelClass}->Behaviors->attached('Logable'))
		//{
		//	{
		//		$this->{$this->modelClass}->setUserData($this->activeUser);
		//	}
		//}

		//if($this->Auth->user('id')) {
		//	AuditableConfig::$userId = $this->Auth->user('id');

		$this->__setBackUrl();
		//$this->__unLockEdit();
		//$this->__lockEdit();

		parent::beforeFilter();
	}
        
	/**
	 * Callback default
	 * 
	 * @return void
	 */
	
	public function beforeRender()
	{
		$this->__setErrorLayout();

	}
        /*
	public function isAuthorized()
	{
		if(($this->userLogged === TRUE) && $this->__checkGroup($this->params['prefix']))
		{
			return true;
		}
		
		return false;
	}
	*/
	/***************************
	 * Auxiliar methods
	 **************************/
	
	
	/**
	 * Configura o componente Auth, responsável pela
	 * autenticação de usuário
	 */
        /*
	private function __setupAuth()
	{
		$this->Auth->authorize = 'controller';
		
		$this->Auth->autoRedirect = false;
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login', 'admin' => false);
		$this->Auth->logoutRedirect = '/';
		$this->Auth->loginRedirect = array('controller' => 'patrimonies');
		
		$this->Auth->loginError = __('Falha no login. Por favor, verifique se o usuário e senha digitado estão corretos.', true);
		$this->Auth->authError = __('Desculpe, você precisa estar autenticado para acessar esta página.', true);
		if( !isset($this->params['prefix']) || !( in_array($this->params['prefix'], Configure::read('Routing.prefixes')) ) )
		{
			// ações sem prefixo estão liberadas
			$this->Auth->allow('*');
		}
		
		// recupera informações do usuário logado
		$activeUser = $this->Auth->user();
		
		if($activeUser !== null)
		{
			$this->__setUserData($activeUser);
		}
	}
	*/
	/**
	 * Construção geral de menu
	 */
        
	private function __buildMenu()
	{
            /*
		if(!$this->userLogged)
		{
			if($this->Session->check('Advocacia.Menu'))
			{
				$this->Session->delete('Advocacia.Menu');
			}
			
			return;
		}
            */
		$menu = array();
		
		//if($this->activeUser && isset($this->params['prefix']))
		//{
			if(!$this->Session->check('Patrimony.Menu'))
			{
		//		switch($this->params['prefix'])
		//		{
		//			case 'admin':
						$menu = $this->__buildAdminMenu();
		//			break;
		//		}
			}
			else
			{
				$menu = $this->Session->read('Patrimony.Menu');
			}
		//}
		$this->set('menuItems', $menu);
	}
	
        
	/**
	 * Constrói menu administrativo
	 */
        
	private function __buildAdminMenu()
	{
		//$groupActions = array();
		
		//$userActions = array();

		//$groups = Group::getAll();
		/*
		foreach($groups as $id => $group)
		{
			$userActions[$group] = array(
				__('Listar todos', true) => array(
					'plugin' => false,
					'controller' => 'users',
					'action' => 'index',
					'group_id' => $id
				),
				__('Criar', true) => array(
					'plugin' => false,
					'controller' => 'users',							
					'action' => 'add', 
					'group_id' => $id
				),						
			);
		}
                */
		$menu = array(
			__('Usuários', true) => array_merge(array(
				__('Listar Todos',true) => array(
					'plugin' => false,
					'controller' => 'users',
					'action' => 'index'
				),
				__('Criar',true) => array(
					'plugin' => false,
					'controller' => 'users',
					'action' => 'add'
				),
			)),
			__('Materiais', true) => array(
				__('Listar', true) => array(
					'plugin' => false,
					'controller' => 'equipment',
					'action' => 'index', 
				),
				__('Criar', true) => array(
					'plugin' => false,
					'controller' => 'equipment',
					'action' => 'add',
				),
				__('Classe', true) => array(
					__('Listar', true) => array(
						'plugin' => false,
						'controller' => 'kinds',
						'action' => 'index', 
					),
					__('Criar', true) => array(
						'plugin' => false,
						'controller' => 'kinds',
						'action' => 'add',
				)),
				__('Conta', true) => array(
					__('Listar', true) => array(
						'plugin' => false,
						'controller' => 'counts',
						'action' => 'index', 
					),
					__('Criar', true) => array(
						'plugin' => false,
						'controller' => 'counts',
						'action' => 'add',
				),
			)),
			__('Patrimonios', true) => array(
				__('Listar', true) => array(
					'plugin' => false,
					'controller' => 'patrimonies',
					'action' => 'index',
				),
				//__('Criar', true) => array(
				//	'plugin' => false,
				//	'controller' => 'patrimonies',
				//	'action' => 'add',
				//),
				__('Aguardando Descarga', true) => array(
					'plugin' => false,
					'controller' => 'patrimonies',
					'action' => 'index',
					'?' => array('filter' => 'waiting'),
			)),
			__('Seções', true) => array(
				__('Listar', true) => array(
					'plugin' => false,
					'controller' => 'sections',
					'action' => 'index', 
				),
				__('Criar', true) => array(
					'plugin' => false,
					'controller' => 'sections',
					'action' => 'add', 
			)),
			__('Dependentes', true) => array(
				__('Listar', true) => array(
					'plugin' => false,
					'controller' => 'owners',
					'action' => 'index', 
				),
				__('Criar', true) => array(
					'plugin' => false,
					'controller' => 'owners',
					'action' => 'add', 
			)),
			__('Configurações', true) => array(
				__('Grupos', true) => array(
					__('Listar', true) => array(
						'plugin' => false,
						'controller' => 'groups',
						'action' => 'index', 
					),
					__('Criar', true) => array(
						'plugin' => false,
						'controller' => 'groups',
						'action' => 'add',
					),
				),
				__('Histórico do Sistema', true) => array(
					__('Visualizar', true) => array(
						'plugin' => false,
						'controller' => 'logs',
						'action' => 'index', 
					)),
					
				__('Valores Padrão', true) => array(
					__('Listar', true) => array(
						'plugin' => false,
						'controller' => 'default_values',
						'action' => 'index', 
					),
					__('Criar', true) => array(
						'plugin' => false,
						'controller' => 'default_values',
						'action' => 'add',
					),
				),
					
				__('Unidade de Medida', true) => array(
					__('Listar', true) => array(
						'plugin' => false,
						'controller' => 'measures',
						'action' => 'index', 
					),
					__('Criar', true) => array(
						'plugin' => false,
						'controller' => 'measures',
						'action' => 'add',
					)
				),
			),
			__('Relatórios', true) => array(
				__('Patrimonios por Seção', true) => array(
					'plugin' => false,
					'controller' => 'sections',
					'action' => 'reportPatrimony', 
				),
				__('Patrimonios Não Conferidos', true) => array(
					'plugin' => false,
					'controller' => 'patrimonies',
					'action' => 'reportNotCheck', 
				),
				__('Patrimonios Aguardando Descarga', true) => array(
					'plugin' => false,
					'controller' => 'patrimonies',
					'action' => 'reportWaitDischarge', 
				),
				__('Patrimonios Sob Cautela', true) => array(
					'plugin' => false,
					'controller' => 'patrimonies',
					'action' => 'reportEmCautela',
				)
			),
			__('Ajuda', true) => array(
				'plugin' => false,
				'controller' => 'patrimonies',
				'action' => 'ajuda',
				'admin' => true
			),
			__('Encerrar Sessão', true) => array(
				'plugin' => false,
				'controller' => 'users',
				'action' => 'logout',
				'admin' => false
			)
		);
		
		$this->Session->write('Patrimony.Menu', $menu);
		return $menu;
	}
	
	/**
	 * 
	 * 
	 * @param array $activeUser
	 */
        /*
	protected function __setUserData($activeUser = null)
	{
		if(!empty($activeUser))
		{
			// flag de controle
			$this->userLogged = true;
			
			$this->activeUser = $activeUser;
			
			App::import('Model', 'User');
			
			// Acesso estático as informações do usuário
			User::store($activeUser);
			
			$this->set('activeUser', $activeUser);
		}
	}
	*/
	/**
	 * Método auxiliar para verificar se um determinado usuário
	 * pertence a um determinado grupo.
	 * 
	 * @param string $group - alias do grupo
	 * 
	 * @return bool TRUE caso pertença, FALSE caso contrário
	 */
        /*
	protected function __checkGroup($group)
	{		
		if(in_array($group, $this->activeUser['User']['groups']))
			return true;
		
		return false;
	} 
	*/
        
	/**
	 * 
	 */
        
	private function __setErrorLayout()
	{
		if($this->name == 'CakeError')
		{
			//@TODO create the error layout
			//$this->layout = 'error';
		}
	}
	
        
	/**
	 * RServices
	 * Método que garante configurações necessárias para o funcionamento correto de requisições assincronas
	 * Deve ser invocado no inicio de todos os métodos que tratam este tipo de requisição
	 */
        
	protected function __isAjax($autoRender = false)
	{
		//Configurações necessárias para o funcionamento correto do ajax
		Configure::write('debug', 0);
		
		$this->disableCache();
		
		$this->autoRender = $autoRender;
	}
	
	/**
	 * Try redirect to origin action
	 * 
	 * @return void
	 */
        
	protected function __goBack()
	{
		// caso a página anterior seja diferente da página atual
		if($this->referer() != $this->here)
		{
			// tenta redirecionar de volta para tela anterior, caso não consiga manda par action index
			$this->redirect($this->referer(array('action'=>'index'), TRUE));
		}
		else
		{
			// redireciona para a index do controller atual para evitar erro de redirecionamento
			$this->redirect(array('action' => 'index'));
		}
	}
	
	/**
	 * Seta a variável $backUrl para a view gerar um botão de voltar
	 * 
	 * @param string|array $url
	 */
        
	protected function __setBackUrl($url = null)
	{
		if($url !== null)
		{
			$this->set('backUrl', $url);
		}
		else if($this->referer() != $this->here)
		{
			// tenta setar url da tela anterior, caso não consiga manda para action index
			$this->set('backUrl', $this->referer(array('action'=>'index'), TRUE));
		}
		else
		{
			$this->set('backUrl', array('action' => 'index'));
		}
	}
        
        
	protected function __setBackIndex($url = null)
	{
		if($url !== null)
		{
			if(substr_compare($this->Session->read('backUrl.action'), '_index', -6, 6) == 0)
			{
				print_r($this->Session->read('act'));
				print_r($url);
				$this->Session->write('backUrl',$url);
			}

		}
		else if($this->referer() != $this->here)
		{
			// tenta setar url da tela anterior, caso não consiga manda para action index
			if(substr_compare($this->Session->read('act'), '_index', -6, 6) == 0)
			{	
				print_r('(1)action = '.$this->Session->read('act'));
				print_r(' referer = '.$this->referer(array('action'=>'index'), TRUE));
				$this->Session->write('backUrl', $this->referer(array('action'=>'index'), TRUE));
			}
		}
		else
		{
			if(substr_compare($this->Session->read('act'), '_index', -6, 6) == 0)
			{
				print_r('(2)action = '.$this->Session->read('act'));
				print_r(' referer = '.array('action' => 'index'));
				$this->Session->write('backUrl', array('action' => 'index'));
			}
		}	
	}
        
        
	protected function __lockEdit()
	{
		if(substr_compare($this->params['action'], '_edit',-5,5) == 0)
		{
			if($this->Session->check('lockEdit'))
			{
				$lockEdit = $this->Session->read('lockEdit');
				if(array_key_exists($this->params['controller'],$lockEdit))
				{
					if(array_search($this->params['pass']['0'],$lockEdit[$this->params['controller']]) == null)
						array_push($lockEdit[$this->params['controller']], $this->params['pass']['0']);
				}
				else
					$lockEdit = $lockEdit + array($this->params['controller'] => $this->params['pass']['0']);
					

				$this->Session->write('lockEdit', $lockEdit);
			}
			else
				$this->Session->write('lockEdit', array($this->params['controller'] => array($this->params['pass']['0'])));
			//print_r($this->Session);
			print_r($this->Session->read('lockEdit'));
			//$this->Session->delete('lockEdit');
		} 
	}
         
         
	protected function __unLockEdit()
	{
			print_r(explode('/',$this->referer()));
	}
	
	/**
	 * Wrapper para o método SessionComponent::setFlash
	 *
	 * @param string $message
	 * @param string $class
	 *
	 * @return void
	 */
        
	protected function __setFlash($message, $class)
	{
		$this->Session->setFlash(__($message, true), 'default', array('class' => $class));
	}
         
         
}