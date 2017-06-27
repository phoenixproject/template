<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\PartidaDao;
use app\cgt\InterfaceDeApresentacao;
/**
 * Description of AplPartida
 *
 * @author pchan
 */
class AplPartida implements InterfaceDeApresentacao {
    
    private $partidaDao;
    
    public function __construct() {
        $this->partidaDao = new PartidaDao(); 
    }
    
    public function alterar($objeto): bool {
        return $this->partidaDao->alterar($objeto);
    }

    public function deletar($id): bool {
        return $this->partidaDao->delete($id);
    }

    public function find($id) {
        return $this->partidaDao->find($id);
    }

    public function listar($ordem): array {
        return $this->partidaDao->listar($ordem);
    }
}
