<?php

namespace ifes\controller;
/**
 * Description of Action
 *
 * @author pchan
 */
class Action {
    
    //protected $view;
    protected $action;
    
    /*public function __construct() {
        $this->view = new \stdClass();
    }*/
    
    public function render($action, $layout=true)
    {
        $this->action = $action;
        
        if($layout == true && file_exists("../app/cih/layout.phtml")){
            include_once '../app/cih/layout.phtml';
        }
        else{
            //$this->action($view);
            $this->redirect();
        }
    }
    
    /*public function content()
    {
        $atual = get_class($this);
        $singleClassName = strtolower((str_replace("app\\cci\\","",$atual)));
        include_once '../app/cih/'.$singleClassName.'/'. $this->action.'.phtml';                    
    }*/
    
    public function redirect()
    {   
        $classe_atual = get_class($this);
        $singleClassName = strtolower((str_replace("app\\cci\\","",$classe_atual)));
        include_once '../app/cih/'.$singleClassName.'/'. $this->action.'.phtml';                
        /*if(isset($_GET['id'])){
            include_once '../app/cih/'.$singleClassName.'/'. $this->action.'.phtml'.'?id='.$_GET['id'];            
        }
        else{
            include_once '../app/cih/'.$singleClassName.'/'. $this->action.'.phtml';                
        }*/        
    }
}

?>
