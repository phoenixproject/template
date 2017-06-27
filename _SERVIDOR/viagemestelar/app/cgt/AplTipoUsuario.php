<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\TipoUsuarioDao;
use app\cgt\InterfaceDeApresentacao;

/**
 * Description of AplTipoUsuario
 *
 * @author pchan
 */
class AplTipoUsuario implements InterfaceDeApresentacao {
    
    private $tipoUsuarioDao;
    
    public function __construct() {
        $this->tipoUsuarioDao = new TipoUsuarioDao(); 
    }
    
    public function alterar($objeto): bool {
        return $this->tipoUsuarioDao->alterar($objeto);
    }

    public function deletar($id): bool {
        return $this->tipoUsuarioDao->delete($id);
    }

    public function find($id) {
        return $this->tipoUsuarioDao->find($id);
    }

    public function listar($ordem): array {
        return $this->tipoUsuarioDao->listar($ordem);
    }

}
