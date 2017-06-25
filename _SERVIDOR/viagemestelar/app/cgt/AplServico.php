<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgt\InterfaceDeServico;
use app\cgd\ServicoDao;
/**
 * Description of AplServico
 *
 * @author pchan
 */
class AplServico implements InterfaceDeServico {
    
    private $ServicoDao;
    
    public function __construct() {
        $this->ServicoDao = new ServicoDao(); 
    }
    
}
