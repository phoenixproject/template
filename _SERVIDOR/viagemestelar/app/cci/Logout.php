<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cci;

use \ifes\controller\Action;
/**
 * Description of Logout
 *
 * @author pchan
 */
class Logout extends Action {
    
    //public function __construct() {               
        //Gravar a hora do último login
        //$this->intarfaceDeApresentacao = new GestorDeUsuario();                
    //}
    
    public function yes(){
        session_destroy();
        $this->render('index');           
        //header('index.php'); 
        //header('Localização: mapeamento.php'); 
        //echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=index.php'>";
        header("Refresh:0; url=index.php");
    }
    
}
