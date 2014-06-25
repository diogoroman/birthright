<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EquipmentTest
 *
 * @author romandor
 */
App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('Equipment', 'Model');
class EquipmentControllerTest extends ControllerTestCase{
    private $id;
    
    public function testIndex(){
        $result = $this->testAction('/equipment/index');
        debug($result);
    }
    
    public function testIndexInclude(){
        $result = $this->testAction('/equipment?filter=include');
        debug($result);
    }
    
    public function testView(){
        $result = $this->testAction('/equipment/view/563');
        debug($result);
    }
    
    public function testEmptyView(){
        $result = $this->testAction('/equipment/view');
        debug($result);
    }
    
    public function testAdd(){
        $dados = array(
            'Equipment' => array(
                'fcg' => 123456789,
                'description' => 'teste_automático',
                'quantity' => 50,
                'equipment_type_id' => 1,
                'price' => 125000
            )
        );
        
        $this->testAction('/equipment/add/');
        $this->id = $this->testAction('/equipment/add/', array('data' => $dados));
        //verificar se o patrimonio foi adicionado com o valor unitário
        //verificar se o patrimonio foi adicionado na seção do usuário
        debug($this->id);
    }
    
    public function testEmptyData(){
        //TODO
    }
    
    public function testEmptyEdit(){
        $result = $this->testAction('equipment/edit');
        debug($result);
    }
    
    public function testEdit(){
        
        $result = $this->testAction('equipment/edit/5');
        $this->assertArrayHasKey('defaultValues',$this->vars);
        debug($result);
        
    }
    
    public function testEmptyDelete(){
        $result = $this->testAction('equipment/delete/');
        debug($result);
    }
    
    public function testDelete(){
        /*
         * TODO
        $contr = new Controller();
        $this->testAction('equipment/delete/'.$this->id);
        //$result = $this->testAction('equipment/delete/id', array('id' => $this->id));
        //debug($result);
         * */
         
    }
}
