<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgt;

use app\cgd\CombinacaoDao;
use app\cgt\InterfaceDeApresentacao;
use app\cdp\Combinacao;
/**
 * Description of Combinacao
 *
 * @author pchan
 */
class AplCombinacao implements InterfaceDeApresentacao {
    
    private $combinacaoDao;
    
    public function __construct() {
        $this->combinacaoDao = new CombinacaoDao(); 
    }
    
    public function alterar($objeto): bool {
        return $this->combinacaoDao->alterar($objeto);
    }

    public function deletar($id): bool {
        return $this->combinacaoDao->delete($id);
    }

    public function find($id) { 
        return $this->combinacaoDao->find($id);
    }

    public function listar($ordem): array {
        return $this->combinacaoDao->listar($ordem);
    }
    
    public function inserir($objeto): bool {
        return $this->combinacaoDao->inserir($objeto);
    }
    
    public function metodoFabricaCombinacao($tp_nave, $tp_arma) : Combinacao{
        
        $combinacao = new Combinacao();
        
        $resultado = $this->combinacaoDao->buscarCombinacao($tp_nave, $tp_arma);
        
        $combinacao->setDs_combinacao($resultado['ds_combinacao']);
        $combinacao->setTp_nave($resultado['tp_nave']);
        $combinacao->setTp_arma($resultado['tp_arma']);
        
        return $combinaacao;        
    }
}
