<?php

namespace app\cci;

use \ifes\controller\Action;

/**
 * Description of index
 *
 * @author pchan
 */
class Index extends Action {
    
    public function index(){
        $this->render('index');                
    }    
}
