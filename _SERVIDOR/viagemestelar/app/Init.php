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
        $ar['atividaderetrieve'] = array(
            'route'=>'/atividade',
            'controller'=>'atividade',
            'action'=>'retrieve'
        );
        $ar['atividadegetall'] = array(
            'route'=>'/atividade',
            'controller'=>'atividade',
            'action'=>'getall'
        );
        $ar['atividadeadd'] = array(
            'route'=>'/atividade',
            'controller'=>'atividade',
            'action'=>'add'
        );
        $ar['atividadeedit'] = array(
            'route'=>'/atividade',
            'controller'=>'atividade',
            'action'=>'edit'
        );        
        $ar['atividadesave'] = array(
            'route'=>'/atividade',
            'controller'=>'atividade',
            'action'=>'save'
        );                
        $ar['combinacaoretrieve'] = array(
            'route'=>'/combinacao',
            'controller'=>'combinacao',
            'action'=>'retrieve'
        );
        $ar['combinacaogetall'] = array(
            'route'=>'/combinacao',
            'controller'=>'combinacao',
            'action'=>'getall'
        );
        $ar['combinacaoadd'] = array(
            'route'=>'/combinacao',
            'controller'=>'combinacao',
            'action'=>'add'
        );
        $ar['combinacaoedit'] = array(
            'route'=>'/combinacao',
            'controller'=>'combinacao',
            'action'=>'edit'
        );        
        $ar['combinacaosave'] = array(
            'route'=>'/combinacao',
            'controller'=>'combinacao',
            'action'=>'save'
        );  
        $ar['configuracaoretrieve'] = array(
            'route'=>'/configuracao',
            'controller'=>'configuracao',
            'action'=>'retrieve'
        );
        $ar['configuracaogetall'] = array(
            'route'=>'/configuracao',
            'controller'=>'configuracao',
            'action'=>'getall'
        );
        $ar['configuracaoadd'] = array(
            'route'=>'/configuracao',
            'controller'=>'configuracao',
            'action'=>'add'
        );
        $ar['configuracaoedit'] = array(
            'route'=>'/configuracao',
            'controller'=>'configuracao',
            'action'=>'edit'
        );        
        $ar['configuracaosave'] = array(
            'route'=>'/configuracao',
            'controller'=>'configuracao',
            'action'=>'save'
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