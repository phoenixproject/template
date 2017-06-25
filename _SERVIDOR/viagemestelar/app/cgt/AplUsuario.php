<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\UsuarioDao;
/**
 * Description of AplUsuario
 *
 * @author pchan
 */
class AplUsuario {
    
    private $usuarioDao;
    
    public function __construct() {
        $this->usuarioDao = new UsuarioDao(); 
    }
}
