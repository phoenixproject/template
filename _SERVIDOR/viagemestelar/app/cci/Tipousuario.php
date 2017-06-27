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
 * Description of Tipousuario
 *
 * @author pchan
 */
class Tipousuario extends Action {
        
    private $interfaceDeApresentacao;
    
    public function __construct() {        
        $this->interfaceDeApresentacao = new AplTipoUsuario();
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
    
    public function listarTipoUsuario($ordem){
        return $this->interfaceDeApresentacao->listar($ordem);
    }
    
    public function save(){
            
        if(isset($_POST['tipousuario']))
        {
            $tipoUsuarioDominio = new TipoUsuario();
            
            $tipoUsuario = $_POST['tipousuario'];            
                        
            $chave = array_values($tipoUsuario);
                        
            $tipoUsuarioDominio->setTp_usuario($chave[0]);
            $tipoUsuarioDominio->setDs_tp_usuario($chave[1]);
                                    
            if($this->interfaceDeApresentacaoUsuario->alterar($tipoUsuarioDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }
}
