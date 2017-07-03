<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\AplTipoNave;
use app\cgt\AplTipoArma;
use app\cgt\InterfaceDeApresentacao;

use app\cdp\Combinacao as CombinacaoDominio;

use ifes\controller\Action;
/**
 * Description of Combinacao
 *
 * @author pchan
 */
class Combinacao extends Action {
    
    private $interfaceDeApresentacaoTipoNave;
    private $interfaceDeApresentacaoTipoArma;
    private $interfaceDeApresentacaoCombinacao;
    
    public function __construct() {
        $this->interfaceDeApresentacaoTipoNave = new AplTipoNave();
        $this->interfaceDeApresentacaoTipoArma = new AplTipoArma();
        $this->interfaceDeApresentacaoCombinacao = new AplCombinacao();
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
    
    public function listarTipoDeNave($ordem){
        return $this->interfaceDeApresentacaoTipoNave->listar($ordem);
    }
    
    public function listarTipoDeArma($ordem){
        return $this->interfaceDeApresentacaoTipoArma->listar($ordem);
    }
    
    public function listarCombinacao($ordem){
        return $this->interfaceDeApresentacaoCombinacao->listar($ordem);
    }
    
    public function findById(){
        
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(isset($id)){            
            return $this->interfaceDeApresentacaoCombinacao->find($id);
        }
        return "";        
    }
    
    public function save(){
        
        $combinacao = filter_input(INPUT_POST, 'combinacao', FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(isset($combinacao))
        {
            $combinacaoDominio = new CombinacaoDominio();            
                        
            $chave = array_values($combinacao);
                        
            $combinacaoDominio->setCd_combinacao($chave[0]);
            $combinacaoDominio->setDs_combinacao($chave[1]);
            $combinacaoDominio->setTp_nave($chave[2]);
            $combinacaoDominio->setTp_arma($chave[3]);
                                    
            if($this->interfaceDeApresentacaoCombinacao->alterar($combinacaoDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }    
    
    public function insert(){

        $combinacao = filter_input(INPUT_POST, 'combinacao', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        
        if(isset($combinacao))
        {
            $combinacaoDominio = new CombinacaoDominio();            
                        
            $chave = array_values($combinacao);
                        
            $combinacaoDominio->setCd_combinacao($chave[0]);
            $combinacaoDominio->setDs_combinacao($chave[1]);
            $combinacaoDominio->setTp_nave($chave[2]);
            $combinacaoDominio->setTp_arma($chave[3]);
                                                
            if($this->interfaceDeApresentacaoCombinacao->inserir($usuarioDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }     
}
