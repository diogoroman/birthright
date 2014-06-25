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
App::uses('Count', 'Model');

class MeasuresControllerTest extends ControllerTestCase{
    private $id;
    
    public function testIndex(){
        $result = $this->testAction('/measures/index');
        debug($result);
    }
    
    public function testView(){
        $result = $this->testAction('/measures/view/563');
        debug($result);
    }
    
    public function testEmptyView(){
        $result = $this->testAction('/measures/view');
        debug($result);
    }
    
    public function testEmptyData(){
        //TODO
    }
    
    public function testEmptyEdit(){
        $result = $this->testAction('measures/edit');
        debug($result);
    }
    
    public function testEdit(){
        
        $result = $this->testAction('measures/edit/5');
        debug($result);
        
    }
    
    public function testEmptyDelete(){
        $result = $this->testAction('measures/delete/');
        debug($result);
    }
    
    public function testDelete(){
        /*
         * TODO
         * */
         
    }
}
