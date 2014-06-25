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
App::uses('Position', 'Model');

class PositionsControllerTest extends ControllerTestCase{
    private $id;
    
    public function testIndex(){
        $result = $this->testAction('/positions/index');
        debug($result);
    }
    
    public function testView(){
        $result = $this->testAction('/positions/view/563');
        debug($result);
    }
    
    public function testEmptyView(){
        $result = $this->testAction('/positions/view');
        debug($result);
    }
    
    public function testEmptyData(){
        //TODO
    }
    
    public function testEmptyEdit(){
        $result = $this->testAction('positions/edit');
        debug($result);
    }
    
    public function testEdit(){
        
        $result = $this->testAction('positions/edit/5');
        debug($result);
        
    }
    
    public function testEmptyDelete(){
        $result = $this->testAction('positions/delete/');
        debug($result);
    }
    
    public function testDelete(){
        /*
         * TODO
         * */
         
    }
}
