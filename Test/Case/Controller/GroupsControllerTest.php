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
App::uses('Group', 'Model');

class GroupsControllerTest extends ControllerTestCase{
    private $id;
    
    public function testIndex(){
        $result = $this->testAction('/groups/index');
        debug($result);
    }
    
    public function testView(){
        $result = $this->testAction('/groups/view/563');
        debug($result);
    }
    
    public function testEmptyView(){
        $result = $this->testAction('/groups/view');
        debug($result);
    }
    
    public function testEmptyData(){
        //TODO
    }
    
    public function testEmptyEdit(){
        $result = $this->testAction('groups/edit');
        debug($result);
    }
    
    public function testEdit(){
        
        $result = $this->testAction('groups/edit/5');
        debug($result);
        
    }
    
    public function testEmptyDelete(){
        $result = $this->testAction('groups/delete/');
        debug($result);
    }
    
    public function testDelete(){
        /*
         * TODO
         * */
         
    }
}
