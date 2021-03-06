<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\UsuarioDao;
use app\cgt\InterfaceDeLogin;
/**
 * Description of AplUsuario
 *
 * @author pchan
 */
class AplUsuario implements InterfaceDeLogin, InterfaceDeApresentacao {
    
    private $usuarioDao;
    
    public function __construct() {
        $this->usuarioDao = new UsuarioDao(); 
    }

    public function ObterUsuarioPorEmailESenha($email, $password) {
        return $this->usuarioDao->ObterUsuarioPorEmailESenha($email, $password);
    }

    public function deletar($id): bool {
        return $this->usuarioDao->delete($id);
    }

    public function find($id) {
        return $this->usuarioDao->find($id);
    }

    public function listar($ordem): array {
       return $this->usuarioDao->listar($ordem);
    }

    public function alterar($objeto): bool {
        return $this->usuarioDao->alterar($objeto);
    }
    
    public function inserir($objeto): bool {
        return $this->inserir($objeto);
    }

}
