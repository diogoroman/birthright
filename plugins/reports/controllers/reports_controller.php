<?php
class ReportsController extends AppController
{
	/**
	 * Apelido para a classe
	 * 
	 * @var string
	 */
	public $name = 'Reports';
	
	/**
	 * Controlador sem modelo padrão
	 * 
	 * @var array
	 */
	public $uses = array();
	
	
	/**
	 * Apresenta um painel com os diferentes relatórios
	 * disponíveis
	 */
	public function admin_index()
	{
		$this->__setBackUrl();
		
		$options = array(
			'bills' => __('Contas a pagar', true),
			'bills_pay' => __('Contas pagas', true),
			'receipts' => __('Contas a receber', true),
			'receipts_pay' => __('Contas Recebidas', true),
			//'employee_payments' =>__('Folha de pagamento', true),
			//'employee_payments_pay' =>__('Folha consolidada', true),
			'parking' => __('Relatório de Estacionamento', true)
		);
		
		$this->set('options', $options);
	}
	
	/**
	 * Renderiza um relatório escolhido
	 * 
	 * @param string $type Tipo de relatório a ser gerado
	 * @param bool $print Se o relatório será baixado ou visualizado
	 */
	public function admin_report($print = false)
	{
		$this->__setBackUrl();

		if($print)
		{
			$this->layout = 'blank';
		}
		
		$reportType = strtolower($this->data['Report']['report_type']);
		
		$today = new DateTime();
		
		if(empty($this->data['Report']['period_start']))
		{
			$today->modify('-15 day');
			$this->data['Report']['period_start'] = $today->format('Y-m-d');
			$today->modify('+15 day');
		}
		
		if(empty($this->data['Report']['period_end']))
		{
			$today->modify('+15 day');
			$this->data['Report']['period_end'] = $today->format('Y-m-d');
		}
		
		// relatórios de contas a pagar
		if(strpos($reportType, 'bills') !== false)
		{
			$this->__attachReportHelper('Bills');
			$this->loadModel('Bill');
			
			$conditions = array(
				'Bill.term BETWEEN ? AND ?' => array(
					$this->data['Report']['period_start'],
					$this->data['Report']['period_end']
				),
				'or' => array(
					'Bill.payment' => '0000-00-00',
					'Bill.payment IS NULL'
				)
			);
			
			// contas pagas
			if(strpos($reportType, 'pay') !== false)
			{
				$reportType = 'bills';
				
				$conditions['or'] = array(
					'Bill.payment <>' => '0000-00-00',
					'Bill.payment IS NOT NULL'
				);
			}
			
			$report = $this->Bill->find('all', array('conditions' => $conditions));
		}
		// relatórios de contas a receber
		else if(strpos($reportType, 'receipts') !== false)
		{
			$this->__attachReportHelper('Receipts');
			$this->loadModel('Receipt');
			
			$conditions = array(
				'Receipt.date BETWEEN ? AND ?' => array(
					$this->data['Report']['period_start'],
					$this->data['Report']['period_end']
				),
				'Receipt.paid' => 0
			);
			
			// contas recebidas
			if(strpos($reportType, 'pay') !== false)
			{
				$reportType = 'receipts';
				
				$conditions['Receipt.paid'] = 1;
			}
			
			$report = $this->Receipt->find('all', array(
				'conditions' => $conditions,
				'contain' => array(
					'Process.default_number',
					'Process.Customer.User.name'
					)
				)
			);
		}
		// relatório de folha de pagamento
		else if(strpos($reportType, 'employee_payments') !== false)
		{
			$this->loadModel('Payroll');
			
			$conditions = array(
				'EmployeePayment.payment_date BETWEEN ? AND ?' => array(
					$this->data['Report']['period_start'],
					$this->data['Report']['period_end']
					)
				);
				
			if(strpos($reportType, 'pay') !== false)
			{
				$this->__attachReportHelper('Payroll', array('type' => 'paid'));
				
				$conditions['or'] = array(
					'EmployeePayment.payment_date <>' => '0000-00-00',
					'EmployeePayment.payment_date IS NULL'
				);
			}
			else
			{
				$this->__attachReportHelper('Payroll');
			}
			
			$report = $this->Payroll->find('all', array(
				'conditions' => $conditions,
				'contain' => array(
					'Employee'
					)
				)
			);
			
			$reportType = 'payroll';
		}
		//relatorio de estacionamento
		else if(strpos($reportType, 'parking') !== false)
		{
			$this->loadModel('Employee');
			
			$conditions = array(
				'Employee.parking' => 1,
				'or' => array(
					'and' => array(
						'Employee.parking_begin <= ' => $this->data['Report']['period_start'],
						'or' => array(
							'Employee.parking_end IS NULL',
							'Employee.parking_end >= ' => $this->data['Report']['period_end'],
						)
					),
					'Employee.parking_begin >= ' => $this->data['Report']['period_end']
				)
			);
		
			$report = $this->Employee->find('all', array(
				'conditions' => $conditions,
				'fields' => array('parking', 'parking_begin', 'parking_end'),
				'contain' => array('User.name', 'VehicleType.title')
			));
					
			$this->__attachReportHelper('Parking');
			
		}
		
		
		$reportType = Inflector::camelize($reportType);
		
		if(empty($report))
		{
			$this->__setFlash('Não foram encontrados registros para os critérios passados. Tente outro critério.', 'system-warning');
			//$this->__goBack();
		}
		
		$this->set(compact('report', 'reportType'));
	}
	
	/**
	 * Implementa um método para adição de helpers "on-demand".
	 * 
	 * @param string $name Nome do Helper que será adicionado
	 * @param array $config Configuração do helper
	 * 
	 * @return void
	 */
	protected function __attachReportHelper($name, $config = array())
	{
		// caminho
		$path = 'Reports.' . $name;

		$this->helpers[$path] = $config;
	}
}