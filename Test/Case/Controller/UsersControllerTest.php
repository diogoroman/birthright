<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserControllerTest
 *
 * @author romandor
 */

App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('User', 'Model');
class UserControllerTest extends ControllerTestCase{
    
    public function testIndex(){
        $result = $this->testAction('/users/index');
        debug($result);
    }
    
    public function testView(){
        $result = $this->testAction('/users/view/5');
        debug($result);
    }
    
    public function testEmptyView(){
        $result = $this->testAction('/users/view');
        debug($result);
    }
    
    public function testEdit(){
        
        $result = $this->testAction('users/edit/5');
        debug($result);
        
    }
    
    public function testEmptyDelete(){
        $result = $this->testAction('users/delete/');
        debug($result);
    }
}
