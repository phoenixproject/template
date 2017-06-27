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
        $ar['partidaretrieve'] = array(
            'route'=>'/partida',
            'controller'=>'partida',
            'action'=>'retrieve'
        );
        $ar['partidagetall'] = array(
            'route'=>'/partida',
            'controller'=>'partida',
            'action'=>'getall'
        );
        $ar['partidaadd'] = array(
            'route'=>'/partida',
            'controller'=>'partida',
            'action'=>'add'
        );
        $ar['partidaedit'] = array(
            'route'=>'/partida',
            'controller'=>'partida',
            'action'=>'edit'
        );        
        $ar['partidasave'] = array(
            'route'=>'/partida',
            'controller'=>'partida',
            'action'=>'save'
        );
        $ar['tipoarmaretrieve'] = array(
            'route'=>'/tipoarma',
            'controller'=>'tipoarma',
            'action'=>'retrieve'
        );
        $ar['tipoarmagetall'] = array(
            'route'=>'/tipoarma',
            'controller'=>'tipoarma',
            'action'=>'getall'
        );
        $ar['tipoarmaadd'] = array(
            'route'=>'/tipoarma',
            'controller'=>'tipoarma',
            'action'=>'add'
        );
        $ar['tipoarmaedit'] = array(
            'route'=>'/tipoarma',
            'controller'=>'tipoarma',
            'action'=>'edit'
        );        
        $ar['tipoarmasave'] = array(
            'route'=>'/tipoarma',
            'controller'=>'tipoarma',
            'action'=>'save'
        );                        
        $ar['tipoarmainsert'] = array(
            'route'=>'/tipoarma',
            'controller'=>'tipoarma',
            'action'=>'insert'
        );        
        $ar['tipoatividaderetrieve'] = array(
            'route'=>'/tipoatividade',
            'controller'=>'tipoatividade',
            'action'=>'retrieve'
        );
        $ar['tipoatividadegetall'] = array(
            'route'=>'/tipoatividade',
            'controller'=>'tipoatividade',
            'action'=>'getall'
        );
        $ar['tipoatividadeadd'] = array(
            'route'=>'/tipoatividade',
            'controller'=>'tipoatividade',
            'action'=>'add'
        );
        $ar['tipoatividadeedit'] = array(
            'route'=>'/tipoatividade',
            'controller'=>'tipoatividade',
            'action'=>'edit'
        );        
        $ar['tipoatividadesave'] = array(
            'route'=>'/tipoatividade',
            'controller'=>'tipoatividade',
            'action'=>'save'
        );                        
        $ar['tiponaveretrieve'] = array(
            'route'=>'/tiponave',
            'controller'=>'tiponave',
            'action'=>'retrieve'
        );
        $ar['tiponavegetall'] = array(
            'route'=>'/tiponave',
            'controller'=>'tiponave',
            'action'=>'getall'
        );
        $ar['tiponaveadd'] = array(
            'route'=>'/tiponave',
            'controller'=>'tiponave',
            'action'=>'add'
        );
        $ar['tiponaveedit'] = array(
            'route'=>'/tiponave',
            'controller'=>'tiponave',
            'action'=>'edit'
        );        
        $ar['tiponavesave'] = array(
            'route'=>'/tiponave',
            'controller'=>'tiponave',
            'action'=>'save'
        );
        $ar['tipousuarioretrieve'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'retrieve'
        );
        $ar['tipousuariogetall'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'getall'
        );
        $ar['tipousuarioadd'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'add'
        );
        $ar['tipousuarioedit'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'edit'
        );        
        $ar['tipousuariosave'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'save'
        );                        
        $ar['tipousuarioretrieve'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'retrieve'
        );
        $ar['tipousuariogetall'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'getall'
        );
        $ar['tipousuarioadd'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'add'
        );
        $ar['tipousuarioedit'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'edit'
        );        
        $ar['tipousuariosave'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'save'
        );                        
        $ar['tipousuarioretrieve'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'retrieve'
        );
        $ar['tipousuariogetall'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'getall'
        );
        $ar['tipousuarioadd'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'add'
        );
        $ar['tipousuarioedit'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
            'action'=>'edit'
        );        
        $ar['tipousuariosave'] = array(
            'route'=>'/tipousuario',
            'controller'=>'tipousuario',
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