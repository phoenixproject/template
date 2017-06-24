<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cdp;

/**
 * Description of Partida
 *
 * @author pchan
 */
class Partida {
    
    private $cd_partida;
    private $pontos;
    private $cd_combinacao;
    private $cd_configuracao;
    private $cd_atividade;
    
    function getCd_partida() : int {
        return $this->cd_partida;
    }

    function getPontos() : int {
        return $this->pontos;
    }

    function getCd_combinacao() : int {
        return $this->cd_combinacao;
    }

    function getCd_configuracao() : int {
        return $this->cd_configuracao;
    }

    function getCd_atividade() : int {
        return $this->cd_atividade;
    }

    function setCd_partida($cd_partida) {
        $this->cd_partida = $cd_partida;
    }

    function setPontos($pontos) {
        $this->pontos = $pontos;
    }

    function setCd_combinacao($cd_combinacao) {
        $this->cd_combinacao = $cd_combinacao;
    }

    function setCd_configuracao($cd_configuracao) {
        $this->cd_configuracao = $cd_configuracao;
    }

    function setCd_atividade($cd_atividade) {
        $this->cd_atividade = $cd_atividade;
    }
}