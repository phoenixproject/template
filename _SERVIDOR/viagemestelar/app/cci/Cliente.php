<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use \ifes\controller\Action;
use app\cgt\InterfaceDeApresentacao;
use app\cgt\GestorDeCliente;


/**
 * Description of Cliente
 *
 * @author pchan
 */
class Cliente extends Action {
   
    private $intarfaceDeApresentacao;

    public function __construct() {
        $this->intarfaceDeApresentacao = new GestorDeCliente();
    }
    
    public function retrieve(){
        $this->render('retrieve',false);
    }
    
    public function getall(){
        $this->render('getall',false);        
    }
    
    public function add(){
        $this->render('add',false);        
    }
    
    public function edit(){
        $this->render('edit',false);        
    }
    
    public function listar($ordem){
        return $this->intarfaceDeApresentacao->listar($ordem);
    }
}
