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
               
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);            
       
        if (($email != false) && ($password != false)) {
            
            $usuario = $this->interfaceDeLogin->ObterUsuarioPorEmailESenha($email, $password);
            
            if($usuario != 0){
                
                $_SESSION['usuariosessao'] = $usuario;
                
                /*$teste = $_SESSION['usuariosessao'];
                $teste2 = $_SESSION['usuariosessao']['email'];
                $teste3 = array_values($_SESSION['usuariosessao']);
                $teste4 = $teste3[0];*/
                
                //Retorna para o índice                
                header("Refresh:0; url=index.php");
            }
            else{
                $this->render('start',false);  
                
                echo '<div class="alert alert-danger" role="alert" align="center">
                    <p><strong>ERRO:</strong> email ou senha estão incorretos!</p>
                 </div>;';
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
