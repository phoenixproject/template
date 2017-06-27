<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\AplTipoNave;
use app\cgt\InterfaceDeApresentacao;

use app\cdp\TipoNave;

use ifes\controller\Action;
/**
 * Description of Tiponave
 *
 * @author pchan
 */
class Tiponave extends Action {
        
    private $interfaceDeApresentacao;
    
    public function __construct() {        
        $this->interfaceDeApresentacao = new AplTipoNave();
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
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            return $this->interfaceDeApresentacao->find($id);
        }
        return "";        
    }
    
    public function listarTipoNave($ordem){
        return $this->interfaceDeApresentacao->listar($ordem);
    }
    
    public function save(){
            
        if(isset($_POST['tiponave']))
        {
            $tipoNaveDominio = new TipoNave();
            
            $tipoNave = $_POST['tiponave'];            
                        
            $chave = array_values($tipoNave);
                        
            $tipoNaveDominio->setTp_nave($chave[0]);
            $tipoNaveDominio->setDs_tp_nave($chave[1]);
                                    
            if($this->interfaceDeApresentacaoNave->alterar($tipoNaveDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }
}
