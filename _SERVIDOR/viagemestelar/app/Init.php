<?php

namespace app;

use ifes\init\Bootstrap;

/**
 * Description of Init
 *
 *
 * @author pchan
 */
class Init extends Bootstrap {

    
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