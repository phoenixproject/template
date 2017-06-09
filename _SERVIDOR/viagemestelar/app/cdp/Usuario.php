<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cdp;

/**
 * Description of Usuario
 *
 * @author pchan
 */
class Usuario extends Entity {
    
    public $cd_usuario;
    public $email;
    public $password;
    public $dt_criacao;
    public $tp_usuario;
    
    public function __construct() {
        parent::__construct("usuario");        
    }
    
    function getCd_usuario() : int {
        return $this->cd_usuario;
    }

    function getEmail() : string {
        return $this->email;
    }

    function getPassword() : string {
        return $this->password;
    }

    function getDt_criacao() : \DateTime {
        return $this->dt_criacao;
    }
    
    function getTp_usuario() : int {
        return $this->tp_usuario;
    }

    function setCd_usuario($cd_usuario) {
        $this->cd_usuario = $cd_usuario;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setDt_criacao($dt_criacao) {
        $this->dt_criacao = $dt_criacao;
    }

    function setTp_usuario($tp_usuario) {
        $this->tp_usuario = $tp_usuario;
    }


    
}
