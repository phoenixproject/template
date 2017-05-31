<?php

namespace ifes\controller;
/**
 * Description of Action
 *
 * @author pchan
 */
class Action {
    
    protected $action;
    
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
    
    public function redirect()
    {   
        $classe_atual = get_class($this);
        $singleClassName = strtolower((str_replace("app\\cci\\","",$classe_atual)));
        include_once '../app/cih/'.$singleClassName.'/'. $this->action.'.phtml';                    
    }
}

?>
