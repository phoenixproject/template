<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgd;
use app\cdp\Usuario;
use app\cgd\GenericDao;
/**
 * Description of UsuarioDao
 *
 * @author pchan
 */
class UsuarioDao extends GenericDao {
    
    public function __construct(){
        parent::__construct(new Usuario());
    }
        
    public function ObterUsuarioPorEmailESenha($email, $senha){

        $query = "Select * from {$this->entity->getTable()} where id=:id";

        $stmt = $this->db->getDbconnect()->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch((PDO::FETCH_ASSOC));	
    }
}
