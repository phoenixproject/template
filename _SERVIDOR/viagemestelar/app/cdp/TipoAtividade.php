<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cdp;

use app\cdp\Entity;

/**
 * Description of TipoAtividade
 *
 * @author pchan
 */
class TipoAtividade extends Entity {
    
    private $tp_atividade;
    private $ds_tp_atividade;
    
    public function __construct() {
        parent::__construct('Tipo_Atividade');
    }
    
    function getTp_atividade() : int {
        return $this->tp_atividade;
    }

    function getDs_tp_atividade() : string {
        return $this->ds_tp_atividade;
    }

    function setTp_atividade($tp_atividade) {
        $this->tp_atividade = $tp_atividade;
    }

    function setDs_tp_atividade($ds_tp_atividade) {
        $this->ds_tp_atividade = $ds_tp_atividade;
    }
}
