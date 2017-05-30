<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\ClienteDao;

/**
 * Description of GestorDeCliente
 *
 * @author pchan
 */
class GestorDeCliente implements InterfaceDeApresentacao {
    
    private $ClienteDao;
    
    public function __construct() {
        $this->ClienteDao = new ClienteDao();
    }

    public function find($id) {
        return $this->ClienteDao->find($id);
    }

    public function listar($ordem) : array {
        return $this->ClienteDao->listar($ordem);
    }

    public function deletar($id) : bool {
        return $this->ClienteDao->deletar($id);
    }

}
