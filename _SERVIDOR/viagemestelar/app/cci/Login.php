<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use \ifes\controller\Action;
use app\cgt\InterfaceDeApresentacao;
use app\cgt\GestorDeUsuario;
use app\cdp\Usuario;


/**
 * Description of Login
 *
 * @author pchan
 */
class Login extends Action {
    
    private $intarfaceDeApresentacao;

    public function __construct() {        
        //Inicia a sessão
        //session_start();
        $this->intarfaceDeApresentacao = new GestorDeUsuario();        
    }
    
    public function start(){
        $this->render('start',false);
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
}
