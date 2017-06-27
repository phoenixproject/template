<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use app\cgt\AplTipoArma;
use app\cgt\InterfaceDeApresentacao;

use app\cdp\TipoArma as TipoArmaDominio;

use ifes\controller\Action;
/**
 * Description of Tipoarma
 *
 * @author pchan
 */
class Tipoarma extends Action {
        
    private $interfaceDeApresentacao;
    
    public function __construct() {        
        $this->interfaceDeApresentacao = new AplTipoArma();
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
    
    public function listarTipoArma($ordem){
        return $this->interfaceDeApresentacao->listar($ordem);
    }
    
    public function save(){

        $tipoarma = filter_input(INPUT_POST, 'tipoarma', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        
        if(isset($tipoarma))        
        {   
            $tipoArmaDominio = new TipoArmaDominio();
                                    
            $chave = array_values($tipoarma);
                        
            $tipoArmaDominio->setTp_arma($chave[0]);
            $tipoArmaDominio->setDs_tp_arma($chave[1]);
                                    
            if($this->interfaceDeApresentacao->alterar($tipoArmaDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }
    
    public function insert(){

        $tipoarma = filter_input(INPUT_POST, 'tipoarma', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        
        if(isset($tipoarma))
        {
            $tipoArmaDominio = new TipoArmaDominio();
                                    
            $chave = array_values($tipoarma);
                        
            $tipoArmaDominio->setDs_tp_arma($chave[0]);
                                                
            if($this->interfaceDeApresentacao->inserir($tipoArmaDominio)){
                $this->render('getall',false);        
            }
        }    
        return "";                
    }    
}
