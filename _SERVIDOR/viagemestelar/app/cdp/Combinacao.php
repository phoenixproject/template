<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cdp;

/**
 * Description of Combinacao
 *
 * @author pchan
 */
class Combinacao {
    
    private $cd_combinacao;
    private $ds_combinacao;
    private $tp_nave;
    private $tp_arma;
    
    function getCd_combinacao() : int {
        return $this->cd_combinacao;
    }

    function getDs_combinacao() : string {
        return $this->ds_combinacao;
    }

    function getTp_nave() : int {
        return $this->tp_nave;
    }

    function getTp_arma() : int {
        return $this->tp_arma;
    }

    function setCd_combinacao($cd_combinacao) {
        $this->cd_combinacao = $cd_combinacao;
    }

    function setDs_combinacao($ds_combinacao) {
        $this->ds_combinacao = $ds_combinacao;
    }

    function setTp_nave($tp_nave) {
        $this->tp_nave = $tp_nave;
    }

    function setTp_arma($tp_arma) {
        $this->tp_arma = $tp_arma;
    }
}
