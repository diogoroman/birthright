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
App::uses('Kind', 'Model');

class KindsControllerTest extends ControllerTestCase{
    private $id;
    
    public function testIndex(){
        $result = $this->testAction('/kinds/index');
        debug($result);
    }
    
    public function testView(){
        $result = $this->testAction('/kinds/view/563');
        debug($result);
    }
    
    public function testEmptyView(){
        $result = $this->testAction('/kinds/view');
        debug($result);
    }
    
    public function testEmptyData(){
        //TODO
    }
    
    public function testEmptyEdit(){
        $result = $this->testAction('kinds/edit');
        debug($result);
    }
    
    public function testEdit(){
        
        $result = $this->testAction('kinds/edit/5');
        debug($result);
        
    }
    
    public function testEmptyDelete(){
        $result = $this->testAction('kinds/delete/');
        debug($result);
    }
    
    public function testDelete(){
        /*
         * TODO
         * */
         
    }
}
