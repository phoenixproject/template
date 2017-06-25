<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\AplUsuario;
use app\cgt\InterfaceDeApresentacao;

use ifes\controller\Action;
/**
 * Description of Usuario
 *
 * @author pchan
 */
class Usuario extends Action {
    
    private $intarfaceDeApresentacao;

    public function __construct() {
        $this->intarfaceDeApresentacao = new AplUsuario();
    }
    
    public function getall(){
        $this->render('getall',false);        
    }
    
    public function listar($ordem){
        return $this->intarfaceDeApresentacao->listar($ordem);
    }
    
}
