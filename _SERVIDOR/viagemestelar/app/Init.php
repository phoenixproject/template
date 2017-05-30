<?php

namespace app;

use ifes\init\Bootstrap;

//use controllers\Index;

/**
 * Description of Init
 *
 *
 * @author pchan
 */
class Init extends Bootstrap {

    //private $teste;
    
    /*public function __construct($teste)
    {
        $this->teste = $teste;
        //echo "It works";
        //parent::__construct();
    }*/
    
    protected function initRoutes(){
        
        $ar['home'] = array(
            'route'=>'/',
            'controller'=>'index',
            'action'=>'index'
        );        
        $ar['empresa'] = array(
            'route'=>'/empresa',
            'controller'=>'index',
            'action'=>'empresa'
        );        
        $ar['clienteretrieve'] = array(
            'route'=>'/cliente',
            'controller'=>'cliente',
            'action'=>'retrieve'
        );
        $ar['clientegetall'] = array(
            'route'=>'/cliente',
            'controller'=>'cliente',
            'action'=>'getall'
        );
        $ar['clienteadd'] = array(
            'route'=>'/cliente',
            'controller'=>'cliente',
            'action'=>'add'
        );
        $ar['clienteedit'] = array(
            'route'=>'/cliente',
            'controller'=>'cliente',
            'action'=>'edit'
        );
        $this->setRoutes($ar);
    }
}