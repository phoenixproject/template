<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\TipoAtividadeDao;
use app\cgt\InterfaceDeApresentacao;
/**
 * Description of AplTipoAtividade
 *
 * @author pchan
 */
class AplTipoAtividade  implements InterfaceDeApresentacao {
    
    private $tipoAtividadeDao;
    
    public function __construct() {
        $this->tipoAtividadeDao = new TipoAtividadeDao(); 
    }
    
    public function alterar($objeto): bool {
        return $this->tipoAtividadeDao->alterar($objeto);
    }

    public function deletar($id): bool {
        return $this->tipoAtividadeDao->delete($id);
    }

    public function find($id) {
        return $this->tipoAtividadeDao->find($id);
    }

    public function listar($ordem): array {
        return $this->tipoAtividadeDao->listar($ordem);
    }
    
    public function inserir($objeto): bool {
        return $this->inserir($objeto);
    }
}
