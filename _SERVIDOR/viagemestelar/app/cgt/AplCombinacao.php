<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\CombinacaoDao;
use app\cgt\InterfaceDeApresentacao;
/**
 * Description of Combinacao
 *
 * @author pchan
 */
class AplCombinacao implements InterfaceDeApresentacao {
    
    private $combinacaoDao;
    
    public function __construct() {
        $this->combinacaoDao = new CombinacaoDao(); 
    }
    
    public function alterar($objeto): bool {
        return $this->combinacaoDao->alterar($objeto);
    }

    public function deletar($id): bool {
        return $this->combinacaoDao->delete($id);
    }

    public function find($id) {
        return $this->combinacaoDao->find($id);
    }

    public function listar($ordem): array {
        return $this->combinacaoDao->listar($ordem);
    }
}
