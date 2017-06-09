<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cdp;


/**
 * Description of Atividade
 *
 * @author pchan
 */
class Atividade {
    
    private $cd_atividade;
    private $dt_atividade;
    private $cd_usuario;
    private $tp_atividade;
    
    function getCd_atividade() : int {
        return $this->cd_atividade;
    }

    function getDt_atividade() : \DateTime {
        return $this->dt_atividade;
    }

    function getCd_usuario() : int {
        return $this->cd_usuario;
    }

    function getTp_atividade() : int {
        return $this->tp_atividade;
    }

    function setCd_atividade($cd_atividade) {
        $this->cd_atividade = $cd_atividade;
    }

    function setDt_atividade($dt_atividade) {
        $this->dt_atividade = $dt_atividade;
    }

    function setCd_usuario($cd_usuario) {
        $this->cd_usuario = $cd_usuario;
    }

    function setTp_atividade($tp_atividade) {
        $this->tp_atividade = $tp_atividade;
    }
}
