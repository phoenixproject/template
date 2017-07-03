<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cdp;

use app\cdp\Entity;
/**
 * Description of Configuracao
 *
 * @author pchan
 */
class Configuracao extends Entity {
    
    private $cd_configuracao;
    private $ds_configuracao;
    private $nivel_dificuldade;
    
    public function __construct() {
        parent::__construct("Configuracao");        
    }
    
    function getCd_configuracao() : int {
        return $this->cd_configuracao;
    }

    function getDs_configuracao() : string {
        return $this->ds_configuracao;
    }

    function getNivel_dificuldade() : int {
        return $this->nivel_dificuldade;
    }

    function setCd_configuracao($cd_configuracao) {
        $this->cd_configuracao = $cd_configuracao;
    }

    function setDs_configuracao($ds_configuracao) {
        $this->ds_configuracao = $ds_configuracao;
    }

    function setNivel_dificuldade($nivel_dificuldade) {
        $this->nivel_dificuldade = $nivel_dificuldade;
    }}
