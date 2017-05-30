<?php

namespace app\cci;

use \ifes\controller\Action;
//use \codelogic\di\Container;

/**
 * Description of index
 *
 * @author pchan
 */
class Index extends Action {
       
    //public function index(){
    public function index(){
        
        //$route = key($_GET);
        //$action = $_GET[$route];
                
        //$artigo = Container::getClass("Artigo");
        //$artigos = $artigo->find(1);
        //$artigos = $artigo->fetchAll();
        
        //$this->view->artigos = $artigos;
        
        //renderizando
        $this->render('index');        
        //Para caso não quiser renderizar o conteúdo
        //$this->render('index',false);        
        /*switch ($route){
            
            case "/cliente":
                
                switch ($action){
                
                    case "list":                        
                        $this->render('/cliente/list');        
                        break;
                
                    default:
                        $this->render('index');
                        break;
                }
            
            default:
                $this->render('index');
                break;
        }*/
    }
    
    public function empresa(){
        $this->render('empresa');
    }
    
}
