<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use \ifes\controller\Action;

use app\cgt\InterfaceDeLogin;

use app\cgt\AplUsuario;
use app\cdp\Usuario;


/**
 * Description of Login
 *
 * @author pchan
 */
class Login extends Action {
        
    private $interfaceDeLogin;
    public $loginuser;

    public function __construct() {        
       
        //Inicia a sessão
        //session_start();
        
        $this->interfaceDeLogin = new AplUsuario();
        
        //$this->configuraLogin();        
    }
    
    public function start(){
                        
        //$teste1 = $_REQUEST['email'];
        //$teste2 = $_REQUEST['password'];
        
        if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
            
            $email = $_POST['email'];
            $password = $_POST['password'];            
            
            $usuario = $this->interfaceDeLogin->ObterUsuarioPorEmailESenha($email, $password);
            
            if($usuario != 0){
                
                //session_start();
                
                $_SESSION['usuariosessao'] = $usuario;
                
                //Retorna para o índice                
                header("Refresh:0; url=index.php");
            }
            else{
                $this->render('start',false);    
            }
        }
        else{
            $this->render('start',false);    
        }
        
    }
    
    function logar() {
        
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['customer'])) {
          $customer = $_POST['customer'];
          $customer['modified'] = $now->format("Y-m-d H:i:s");
          update('customers', $id, $customer);
          header('location: index.php');
        } else {
          global $customer;
          $customer = find('customers', $id);
        } 
      } else {
        header('location: index.php');
      }
    }     
    
    function configuraLogin(){
        $this->loginuser = array();
        $this->loginuser['email'] = "";
        $this->loginuser['password'] = "";
    }
}
