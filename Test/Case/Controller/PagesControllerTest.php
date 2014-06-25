<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author romandor
 */
App::uses('Controller', 'Controller');
App::uses('View', 'View');

class PagesControllerTest extends ControllerTestCase{
    private $id;
    
    public function testIndex(){
        $result = $this->testAction('/pages/');
        debug($result);
    }
}
