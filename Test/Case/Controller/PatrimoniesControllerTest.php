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
App::uses('Patrimony', 'Model');

class PatrimoniesControllerTest extends ControllerTestCase{
    private $id;
    
    public function testIndex(){
        $result = $this->testAction('/patrimonies/index');
        debug($result);
    }
    
    public function testView(){
        $result = $this->testAction('/patrimonies/view/563');
        debug($result);
    }
    
    public function testEmptyView(){
        $result = $this->testAction('/patrimonies/view');
        debug($result);
    }
    
    public function testEmptyData(){
        //TODO
    }
    
    public function testEmptyEdit(){
        $result = $this->testAction('patrimonies/edit');
        debug($result);
    }
    
    public function testEdit(){
        
        $result = $this->testAction('patrimonies/edit/5');
        debug($result);
        
    }
    
    public function testEmptyDelete(){
        $result = $this->testAction('patrimonies/delete/');
        debug($result);
    }
    
    public function testDelete(){
        /*
         * TODO
         * */
         
    }
}
