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
App::uses('EquipmentController', 'Controller');
App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('Equipment', 'Model');
class EquipmentControllerTest extends ControllerTestCase{
    
    public function setUp(){
        parent::setUp();
        $this->Equipment = new EquipmentController(new CakeRequest(), new CakeResponse());
        $this->Equipment->constructClasses();
        $this->Equipment->startupProcess();
    }
    public function testIndex(){
        
       $result = $this->testAction('/equipment/index', array('return' => 'contents'));
       $this->assertArrayHasKey('equipment',$this->vars);
       $this->assertContains('IMPRESSORA MOD 930 C MARCA HP',$result);
        debug($result);
    }
    
    public function testIndexInclude(){
        
        $result = $this->testAction('/equipment?filter=include', array('return' => 'contents'));
        $this->assertArrayHasKey('equipment',$this->vars);
        $this->assertContains('CADEIRA DE DIGITADOR S/ ESPALDAR',$result);
        $this->assertNotContains('IMPRESSORA HP LASERJET 1000',$result);
        debug($result);
    }
    
    public function testView(){
        $result = $this->testAction('/equipment/view/563', array('return' => 'contents'));
        $this->assertContains('Mesa Componivel contendo 3 gavetas padrão marfim/preto med. 1200x1200x800x800mm fab. Advance mod. 5508 com suporte para CPU',$result);
        debug($result);
    }
    public function testInvalidView(){
        $result = $this->testAction('/equipment/view/5000');
        $flash_message = $this->Equipment->Session->read('Message.flash.message');
        $this->assertContains($flash_message, 'Equipamento Inexistente');
        debug($result);
    }
    
    public function testEmptyView(){
        $result = $this->testAction('/equipment/view');
        $flash_message = $this->Equipment->Session->read('Message.flash.message');
        $this->assertContains($flash_message, 'Impossível Mostrar um Equipamento Vazio');
        debug($result);
    }
    
    public function testAddAndDel(){
        
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
        $id = $this->testAction('/equipment/add/', array('data' => $dados));
        $flash_message = $this->Equipment->Session->read('Message.flash.message');
        $this->assertContains($flash_message, 'O material foi gravado com sucesso');
        $result = $this->testAction('equipment/delete/'.$id);
        $flash_message = $this->Equipment->Session->read('Message.flash.message');
        $this->assertContains($flash_message, 'Equipamento Excluido com sucesso');
        debug($result);
    }
    //Adição com valor invalido no preço
    public function testInvalidPriceAdd(){
        $dados = array(
            'Equipment' => array(
                'fcg' => 123456789,
                'description' => 'teste_automático',
                'quantity' => 100,
                'equipment_type_id' => 1,
                'price' => 'oopoiu'
            )
        );
        $this->testAction('/equipment/add/');
        $this->testAction('/equipment/add/', array('data' => $dados));
        $flash_message = $this->Equipment->Session->read('Message.flash.message');
        $this->assertContains($flash_message, 'O material não pode ser gravado. Por favor, tente novamente.');
        
    }
    //Adição com valor invalido na quantidade
    public function testInvalidQuantityAdd(){
        $dados = array(
            'Equipment' => array(
                'fcg' => 123456789,
                'description' => 'teste_automático',
                'quantity' => 'alkfjdalk',
                'equipment_type_id' => 1,
                'price' => 125000
            )
        );
        $this->testAction('/equipment/add/');
        $this->testAction('/equipment/add/', array('data' => $dados));
        $flash_message = $this->Equipment->Session->read('Message.flash.message');
        $this->assertContains($flash_message, 'O material não pode ser gravado. Por favor, tente novamente.');
        
    }
    
    public function testEdit(){
        $result = $this->testAction('equipment/edit/750', array('return' => 'contents'));
        $this->testAction('equipment/edit/750', array('data' => $this->vars['data']));
        $this->assertContains('Primeiro EquipmentoSemPatrimonio',$result);
        $flash_message = $this->Equipment->Session->read('Message.flash.message');
        $this->assertContains($flash_message,'O Material foi modificado com sucesso');
        debug($result);
    }
    
    public function testInvalidEdit(){
        $result = $this->testAction('equipment/edit/750', array('return' => 'contents'));
        $this->vars['data']['Equipment']['price'] = 'adfadf';
        $this->testAction('equipment/edit/750', array('data' => $this->vars['data']));
        $this->assertContains('Primeiro EquipmentoSemPatrimonio',$result);
        $flash_message = $this->Equipment->Session->read('Message.flash.message');
        $this->assertContains($flash_message,'O material não pode ser modificado. Por favor, tente novamente.');
        debug($result);
    }
    
    public function testEmptyEdit(){
        
        $result = $this->testAction('equipment/edit/');
        $flash_message = $this->Equipment->Session->read('Message.flash.message');
        $this->assertContains($flash_message,'Equipamento Inválido');
        debug($result);
        
    }
    
    public function testEmptyDelete(){
        $result = $this->testAction('equipment/delete/');
        $flash_message = $this->Equipment->Session->read('Message.flash.message');
        $this->assertContains($flash_message,'Equipamento vazio');
        debug($result);
    }
}
