<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\InterfaceDeApresentacao;

use app\cdp\Configuracao as ConfiguracaoDominio;

use ifes\controller\Action;
/**
 * Description of Configuracao
 *
 * @author pchan
 */
class Configuracao extends Action {
    
    private $interfaceDeApresentacao;
        
    public function __construct() {
        $this->interfaceDeApresentacao = new AplConfiguracao();       
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
    
    public function listar($ordem){
        return $this->interfaceDeApresentacao->listar($ordem);
    }
    
    public function findById(){
        
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(isset($id)){            
            return $this->interfaceDeApresentacao->find($id);
        }
        return "";        
    }
    
    public function save(){
        
        $configuracao = filter_input(INPUT_POST, 'configuracao', FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(isset($configuracao))
        {
            $configuracaoDominio = new ConfiguracaoDominio();            
                        
            $chave = array_values($configuracao);
                        
            $configuracaoDominio->setCd_configuracao($chave[0]);
            $configuracaoDominio->setDs_configuracao($chave[1]);
            $configuracaoDominio->setNivel_dificuldade($chave[2]);
                                                
            if($this->interfaceDeApresentacao->alterar($configuracaoDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }    
}
