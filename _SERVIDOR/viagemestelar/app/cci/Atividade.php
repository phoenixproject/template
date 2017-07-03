<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\AplUsuario;
use app\cgt\AplTipoAtividade;
use app\cgt\AplAtividade;
use app\cgt\InterfaceDeApresentacao;

use app\cdp\Atividade as AtividadeDominio;

use ifes\controller\Action;
/**
 * Description of Atividade
 *
 * @author pchan
 */
class Atividade extends Action {
    
    private $interfaceDeApresentacaoUsuario;
    private $interfaceDeApresentacaoTipoAtividade;
    private $interfaceDeApresentacaoAtividade;
    
    public function __construct() {
        $this->interfaceDeApresentacaoUsuario = new AplUsuario();
        $this->interfaceDeApresentacaoTipoAtividade = new AplTipoAtividade();
        $this->interfaceDeApresentacaoAtividade = new AplAtividade();
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
    
    public function listarAtividade($ordem){
        return $this->interfaceDeApresentacaoAtividade->listar($ordem);
    }
    
    public function listarTipoDeAtividade($ordem){
        return $this->interfaceDeApresentacaoTipoAtividade->listar($ordem);
    }
    
    public function listarUsuario($ordem){
        return $this->interfaceDeApresentacaoUsuario->listar($ordem);
    }
    
    public function findById(){
        
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(isset($id)){            
            return $this->interfaceDeApresentacaoUsuario->find($id);
        }
        return "";        
    }
    
    public function save(){
        
        $atividade = filter_input(INPUT_POST, 'atividade', FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(isset($atividade))
        {
            $atividadeDominio = new AtividadeDominio();            
                        
            $chave = array_values($atividade);
                        
            $atividadeDominio->setCd_atividade($chave[0]);
            $atividadeDominio->setDt_atividade($chave[1]);
            $atividadeDominio->setCd_usuario($chave[2]);
            $atividadeDominio->setTp_atividade($chave[3]);
                                    
            if($this->interfaceDeApresentacaoAtividade->alterar($atividadeDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }   
    
    public function insert(){

        $atividade = filter_input(INPUT_POST, 'atividade', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        
        if(isset($atividade))
        {
            $atividadeDominio = new AtividadeDominio();            
                        
            $chave = array_values($atividade);
                        
            $atividadeDominio->setCd_atividade($chave[0]);
            $atividadeDominio->setDt_atividade($chave[1]);
            $atividadeDominio->setCd_usuario($chave[2]);
            $atividadeDominio->setTp_atividade($chave[3]);
                                                
            if($this->interfaceDeApresentacaoAtividade->inserir($usuarioDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    } 
}
