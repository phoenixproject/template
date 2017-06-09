<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;
use app\cgd\UsuarioDao;

/**
 * Description of GestorDeUsuario
 *
 * @author pchan
 */
class GestorDeUsuario implements InterfaceDeApresentacao {
       
    
    public function deletar($id): bool {
        return false;
    }

    public function find($id) {
        
    }

    public function listar($ordem): array {
        return "";
    }

}
