<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\AplTipoUsuario;
use app\cgt\InterfaceDeApresentacao;

use app\cdp\TipoUsuario;

use ifes\controller\Action;
/**
 * Description of Tipoatividade
 *
 * @author pchan
 */
class Tipoatividade extends Action {
        
    private $interfaceDeApresentacao;
    
    public function __construct() {        
        $this->interfaceDeApresentacao = new AplTipoAtividade();
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
    
    public function listarTipoAtividade($ordem){
        return $this->interfaceDeApresentacao->listar($ordem);
    }
    
    public function save(){
            
        if(isset($_POST['tipoatividade']))
        {
            $tipoAtividadeDominio = new TipoAtividade();
            
            $tipoAtividade = $_POST['tipoatividade'];            
                        
            $chave = array_values($tipoAtividade);
                        
            $tipoAtividadeDominio->setTp_atividade($chave[0]);
            $tipoAtividadeDominio->setDs_tp_atividade($chave[1]);
                                    
            if($this->interfaceDeApresentacaoAtividade->alterar($tipoAtividadeDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }
}
