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
        $this->render('index');                
    }    
}
