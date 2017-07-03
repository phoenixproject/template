<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\AplTipoUsuario;
use app\cgt\InterfaceDeApresentacao;

use app\cdp\TipoUsuario as TipoUsuarioDominio;

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
        
        $tipousuario = filter_input(INPUT_POST, 'tipousuario', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        
        if(isset($usuario))
        {
            $tipoUsuarioDominio = new TipoUsuarioDominio();
            
            $tipoUsuario = $_POST['tipousuario'];            
                        
            $chave = array_values($tipoUsuario);
                        
            $tipoUsuarioDominio->setTp_usuario($chave[0]);
            $tipoUsuarioDominio->setDs_tp_usuario($chave[1]);
                                    
            if($this->interfaceDeApresentacao->alterar($tipoUsuarioDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }
    
    public function insert(){

        $tipousuario = filter_input(INPUT_POST, 'tipousuario', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        
        if(isset($tipousuario))
        {
            $tipoUsuarioDominio = new TipoUsuarioDominio();
                                    
            $chave = array_values($tipousuario);
                        
            $tipoUsuarioDominio->setDs_tp_usuario($chave[0]);
                                                
            if($this->interfaceDeApresentacao->inserir($tipoUsuarioDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    } 
}
