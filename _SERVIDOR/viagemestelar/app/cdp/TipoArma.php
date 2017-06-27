<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cdp;

/**
 * Description of TipoArma
 *
 * @author pchan
 */
class TipoArma extends Entity {
    
    protected $tp_arma;
    protected $ds_tp_arma;
    
    public function __construct() {
        parent::__construct('Tipo_Arma');
    }
            
    function getTp_arma() : int {
        return $this->tp_arma;
    }

    function getDs_tp_arma() : string {
        return $this->ds_tp_arma;
    }

    function setTp_arma($tp_arma) {
        $this->tp_arma = $tp_arma;
    }

    function setDs_tp_arma($ds_tp_arma) {
        $this->ds_tp_arma = $ds_tp_arma;
    }    
}
