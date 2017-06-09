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
    
    protected function initRouteLogin(){
    
        $ar['login'] = array(
            'route'=>'/login',
            'controller'=>'login',
            'action'=>'start'
        );
        
        $this->setRoutes($ar);
    }    
}