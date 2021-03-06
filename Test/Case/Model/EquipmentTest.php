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
App::uses('Equipment', 'Model');
class EquipmentTest extends CakeTestCase{
    //testar função que busca profundidade vazia.
    public function setUp(){
        parent::setUp();
        $this->Equipment = ClassRegistry::init('Equipment');
    }
    
    public function testBuscaEquipamentosSemPatrimonios(){
        $result = $this->Equipment->equipmentWithoutPatrimony(array('description'));
        $this->assertArrayHasKey(750,$result);
        $this->assertArrayHasKey(751,$result);
        $this->assertArrayHasKey(752,$result);
        $this->assertArrayNotHasKey(85,$result);
    }
}
