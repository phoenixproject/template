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
        $ar['usuarioretrieve'] = array(
            'route'=>'/usuario',
            'controller'=>'usuario',
            'action'=>'retrieve'
        );
        $ar['usuariogetall'] = array(
            'route'=>'/usuario',
            'controller'=>'usuario',
            'action'=>'getall'
        );
        $ar['usuarioadd'] = array(
            'route'=>'/usuario',
            'controller'=>'usuario',
            'action'=>'add'
        );
        $ar['usuarioedit'] = array(
            'route'=>'/usuario',
            'controller'=>'usuario',
            'action'=>'edit'
        );        
        $ar['usuariosave'] = array(
            'route'=>'/usuario',
            'controller'=>'usuario',
            'action'=>'save'
        );                
        $ar['logout'] = array(
            'route'=>'/logout',
            'controller'=>'logout',
            'action'=>'yes'
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