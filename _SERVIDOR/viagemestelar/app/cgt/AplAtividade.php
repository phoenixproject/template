<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgt\InterfaceDeApresentacao;
use app\cgd\AtividadeDao;
/**
 * Description of AplAtividade
 *
 * @author pchan
 */
class AplAtividade implements InterfaceDeApresentacao {
    
    private $atividadeDao;
    
    public function __construct() {
        $this->atividadeDao = new AtividadeDao(); 
    }
    
    public function alterar($objeto): bool {
        return $this->atividadeDao->alterar($objeto);
    }

    public function deletar($id): bool {
        return $this->atividadeDao->delete($id);
    }

    public function find($id) {
        return $this->atividadeDao->find($id);
    }

    public function listar($ordem): array {
        return $this->atividadeDao->listar($ordem);    
    }

    public function inserir($objeto): bool {
        return $this->inserir($objeto);
    }

}
