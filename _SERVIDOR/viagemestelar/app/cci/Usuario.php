<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\AplUsuario;
use app\cgt\AplTipoUsuario;
use app\cgt\InterfaceDeApresentacao;

use app\cdp\Usuario as UsuarioDominio;

use ifes\controller\Action;
/**
 * Description of Usuario
 *
 * @author pchan
 */
class Usuario extends Action {
    
    private $interfaceDeApresentacaoUsuario;
    private $interfaceDeApresentacaoTipoUsuario;
    
    public function __construct() {
        $this->interfaceDeApresentacaoUsuario = new AplUsuario();
        $this->interfaceDeApresentacaoTipoUsuario = new AplTipoUsuario();
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
        return $this->interfaceDeApresentacaoUsuario->listar($ordem);
    }
    
    public function findById(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            return $this->interfaceDeApresentacaoUsuario->find($id);
        }
        return "";        
    }
    
    public function listarTipoUsuario($ordem){
        return $this->interfaceDeApresentacaoTipoUsuario->listar($ordem);
    }
    
    public function save(){
            
        if(isset($_POST['usuario']))
        {
            $usuarioDominio = new UsuarioDominio();
            $usuario = $_POST['usuario'];            
                        
            $chave = array_values($usuario);
                        
            $usuarioDominio->setCd_usuario($chave[0]);
            $usuarioDominio->setEmail($chave[1]);
            $usuarioDominio->setPassword($chave[2]);
            $usuarioDominio->setTp_usuario($chave[3]);
            $usuarioDominio->setDt_criacao($chave[4]);
            
            //$teste2 = $usuarioDominio->retornaConteudoDeAtributosDaClasse();
            //$teste3 = $usuarioDominio->retornaConteudoDeAtributosDaClasse();
            //$teste4 = get_object_vars($usuarioDominio);
            
            /*$atributosdaclasse = get_class_vars(get_class($usuarioDominio));
            $atributos = array_keys($atributosdaclasse);
            
            $conteudoatributos = get_class_vars(get_class($usuarioDominio));
            $valores = array_values($conteudoatributos);
            
            $quantidadeatributos = count($atributos) - 1;*/
            
            if($this->interfaceDeApresentacaoUsuario->alterar($usuarioDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }
    
}
