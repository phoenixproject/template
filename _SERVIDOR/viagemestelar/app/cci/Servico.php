<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\InterfaceDeServico;
use app\cgt\AplServico;

/**
 * Description of Servico
 *
 * @author pchan
 */
class Servico {
    
    private $interfaceDeServico;
    
    public function __construct() {
        $this->interfaceDeServico = new AplServico();
    }
 
}
