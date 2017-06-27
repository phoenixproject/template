<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\TipoNaveDao;
use app\cgt\InterfaceDeApresentacao;
/**
 * Description of AplTipoNave
 *
 * @author pchan
 */
class AplTipoNave implements InterfaceDeApresentacao {
    
    private $tipoNaveDao;
    
    public function __construct() {
        $this->tipoNaveDao = new TipoNaveDao(); 
    }
    
    public function alterar($objeto): bool {
        return $this->tipoNaveDao->alterar($objeto);
    }

    public function deletar($id): bool {
        return $this->tipoNaveDao->delete($id);
    }

    public function find($id) {
        return $this->tipoNaveDao->find($id);
    }

    public function listar($ordem): array {
        return $this->tipoNaveDao->listar($ordem);
    }
}
