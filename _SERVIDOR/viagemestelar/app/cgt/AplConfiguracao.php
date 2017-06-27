<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\ConfiguracaoDao;
use app\cgt\InterfaceDeApresentacao;
/**
 * Description of AplConfiguracao
 *
 * @author pchan
 */
class AplConfiguracao implements InterfaceDeApresentacao {
    
    private $configuracaoDao;
    
    public function __construct() {
        $this->configuracaoDao = new ConfiguracaoDao(); 
    }
    
    public function alterar($objeto): bool {
        return $this->configuracaoDao->alterar($objeto);
    }

    public function deletar($id): bool {
        return $this->configuracaoDao->delete($id);
    }

    public function find($id) {
        return $this->configuracaoDao->find($id);
    }

    public function listar($ordem): array {
        return $this->configuracaoDao->listar($ordem);
    }
    
    public function inserir($objeto): bool {
        return $this->inserir($objeto);
    }
}
