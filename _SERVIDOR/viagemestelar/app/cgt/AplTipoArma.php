<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\TipoArmaDao;
use app\cgt\InterfaceDeApresentacao;
/**
 * Description of AplTipoArma
 *
 * @author pchan
 */
class AplTipoArma implements InterfaceDeApresentacao {
    
    private $tipoArmaDao;
    
    public function __construct() {
        $this->tipoArmaDao = new TipoArmaDao(); 
    }
    
    public function alterar($objeto): bool {
        return $this->tipoArmaDao->alterar($objeto);
    }

    public function deletar($id): bool {
        return $this->tipoArmaDao->delete($id);
    }

    public function find($id) {
        return $this->tipoArmaDao->find($id);
    }

    public function listar($ordem): array {
        return $this->tipoArmaDao->listar($ordem);
    }
    
    public function inserir($objeto): bool {
        return $this->tipoArmaDao->inserir($objeto);
    }
}
