<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cdp;

use app\cdp\Entity;
/**
 * Description of TipoNave
 *
 * @author pchan
 */
class TipoNave extends Entity {
    
    private $tp_nave;
    private $ds_tp_nave;
    
    public function __construct() {
        parent::__construct('Tipo_Nave');
    }
    
    function getTp_nave() : int {
        return $this->tp_nave;
    }

    function getDs_tp_nave() : string {
        return $this->ds_tp_nave;
    }

    function setTp_nave($tp_nave) {
        $this->tp_nave = $tp_nave;
    }

    function setDs_tp_nave($ds_tp_nave) {
        $this->ds_tp_nave = $ds_tp_nave;
    }
}
