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
 * Description of Login
 *
 * @author pchan
 */
class Login {
    
    private $intarfaceDeApresentacao;

    public function __construct() {
        $this->intarfaceDeApresentacao = new GestorDeCliente();
    }
    
    public function start(){
        $this->render('start',false);
    }
}
