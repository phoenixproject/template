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
        $this->interfaceDeLogin = new AplUsuario();       
    }
    
    public function start(){
               
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);            
       
        if (($email != false) && ($password != false)) {
            
            $usuario = $this->interfaceDeLogin->ObterUsuarioPorEmailESenha($email, $password);
            
            if($usuario != 0){
                
                //Adiciona o usuário na sessão
                $_SESSION['usuariosessao'] = $usuario;
               
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
    function configuraLogin(){
        
        $this->loginuser = array();
        $this->loginuser['email'] = "";
        $this->loginuser['password'] = "";
        
        return $this->loginuser;
    }
}
