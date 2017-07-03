<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\AplCombinacao;
use app\cgt\AplConfiguracao;
use app\cgt\AplAtividade;
use app\cgt\InterfaceDeApresentacao;

use app\cdp\Partida as PartidaDominio;

use ifes\controller\Action;
/**
 * Description of Partida
 *
 * @author pchan
 */
class Partida  extends Action {
    
    private $interfaceDeApresentacaoCombinacao;
    private $interfaceDeApresentacaoConfiguracao;
    private $interfaceDeApresentacaoAtividade;
    private $interfaceDeApresentacaoPartida;
    
    public function __construct() {
        $this->interfaceDeApresentacaoCombinacao = new AplCombinacao();
        $this->interfaceDeApresentacaoTipoConfiguracao = new AplConfiguracao();
        $this->interfaceDeApresentacaoAtividade = new AplAtividade();
        $this->interfaceDeApresentacaoPartida = new AplPartida();
    }
    
    public function retrieve(){
        $this->render('retrieve',false);
    }
    
    public function getall(){
        $this->render('getall',false);        
    }
    
    public function add(){
        $this->render('add',false);        
    }
    
    public function edit(){
        $this->render('edit',false);        
    }
    
    public function listarTipoDeCombinacao($ordem){
        return $this->interfaceDeApresentacaoCombinacao->listar($ordem);
    }
    
    public function listarConfiguracao($ordem){
        return $this->interfaceDeApresentacaoConfiguracao->listar($ordem);
    }
    
    public function listarAtividade($ordem){
        return $this->interfaceDeApresentacaoUsuario->listar($ordem);
    }
    
    public function listarPartida($ordem){
        return $this->interfaceDeApresentacaoPartida->listar($ordem);
    }
    
    public function findById(){
        
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(isset($id)){            
            return $this->interfaceDeApresentacaoPartida->find($id);
        }
        return "";        
    }
    
    public function save(){
        
        $partida = filter_input(INPUT_POST, 'partida', FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(isset($partida))
        {
            $partidaDominio = new PartidaDominio();            
                        
            $chave = array_values($partida);
                        
            $partidaDominio->setCd_partida($chave[0]);
            $partidaDominio->setPontos($chave[1]);
            $partidaDominio->setFases_completadas($chave[2]);
            $partidaDominio->setCd_combinacao($chave[3]);
            $partidaDominio->setCd_configuracao($chave[4]);
            $partidaDominio->setCd_atividade($chave[5]);
                                    
            if($this->interfaceDeApresentacaoPartida->alterar($partidaDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }    
    
    public function insert(){

        $partida = filter_input(INPUT_POST, 'partida', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        
        if(isset($partida))
        {
            $partidaDominio = new PartidaDominio();            
                        
            $chave = array_values($partida);
                        
            $partidaDominio->setCd_partida($chave[0]);
            $partidaDominio->setPontos($chave[1]);
            $partidaDominio->setFases_completadas($chave[2]);
            $partidaDominio->setCd_combinacao($chave[3]);
            $partidaDominio->setCd_configuracao($chave[4]);
            $partidaDominio->setCd_atividade($chave[5]);
                                                
            if($this->interfaceDeApresentacaoConfiguracao->inserir($usuarioDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    } 
}
