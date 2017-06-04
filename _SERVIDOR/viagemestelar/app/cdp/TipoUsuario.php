<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cdp;

/**
 * Description of TipoUsuario
 *
 * @author pchan
 */
class TipoUsuario {
    
    private $tp_usuario;
    private $ds_tp_usuario;
    
    function getTp_usuario() : int {
        return $this->tp_usuario;
    }

    function getDs_tp_usuario() : string {
        return $this->ds_tp_usuario;
    }

    function setTp_usuario($tp_usuario) {
        $this->tp_usuario = $tp_usuario;
    }

    function setDs_tp_usuario($ds_tp_usuario) {
        $this->ds_tp_usuario = $ds_tp_usuario;
    }

}
