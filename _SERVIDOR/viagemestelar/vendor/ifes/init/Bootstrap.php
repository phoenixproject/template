<?php

namespace ifes\init;

abstract class Bootstrap{
    
    private $routes;    
    private $route;
    private $action;
    private $teste;
        
    public function __construct() {
        
        session_start();
        
        $this->teste = key($_GET);
        
        //Para inicializar as rotas
         $this->initRoutes();
        
        //Para armazenar informações da Url
        $this->armazenaInformacaoDaUrl();
                
        //Para exibir o controller
        $this->run($this->getUrl());                        
        
        //Capturando a info
        /*$email = $_POST["email"];
        $password = $_POST["password"];
        
        //if(isset($_POST["email"])){
        if(filter_input(INPUT_POST, 'email', FILTER_DEFAULT, FILTER_REQUIRE_SCALAR) &&
           filter_input(INPUT_POST, 'password', FILTER_DEFAULT, FILTER_REQUIRE_SCALAR)){
            
            
           $_SESSION['usersession'] = serialize($obj);   
        }*/        
                
        
    }
    
    abstract protected function initRoutes();
    
    abstract protected function initRouteLogin();
       
    protected function run($url){
    	//array_walk é um método que fica percorrendo um array como um foreach.
    	//E como em um foreach, o primeiro parâmetro é o array($this->routes
    	//e o segundo parâmetro é o elemento que está sendo percorrido($route).
    	//Na função anônima é permitido declarar uma função que recebe um parâmetro
    	//e utilizar o comando "use" para definir um parâmetro que será utilizado
    	//dentro da função.
    	array_walk($this->routes, function($route) use($url){
    
                $nomerota = $this->route;
                $nomeacao = $this->action;
            
                //Se rota estiver na lista de rotas ou for uma rota do tipo login
    		if($url == $route['route'] || $route['route'] == '/login'){
                        
                    //Se a rota estiver vazia é porque se trata do index 
                    //if(!(isset($this->route))){
                    if(!($this->route != "")){
                        //ucfirst quer dizer que a primeira letra do controller será maíuscula
                        $class = "app\\cci\\".ucfirst($route['controller']);
                        $controller = new $class;
                        $method = $route['action'];
                        $controller->$method();
                    }
                    else{                        
                        if(strcmp($this->action,$route['action']) == 0){                        
                            //ucfirst quer dizer que a primeira letra do controller será maíuscula
                            $class = "app\\cci\\".ucfirst($route['controller']);
                            $controller = new $class;                            
                            $method = $route['action'];
                            $controller->$method();
                        }
                    }
                    
    		}
    	});
    }
    
    protected function setRoutes(array $routes){
        $this->routes = $routes;
    }
    
    protected function getUrl(){
    	$variableName = key($_GET);        
        return '/'.$variableName;
    }
    
    protected function getController(){
    	return key($_GET);
    }
    
    public function armazenaInformacaoDaUrl(){
        
        //Se não existe chave(exemplo de chave que poderia existir: minhaurl.php?cliente=add)
        if(!isset($_SESSION['usuariosessao'])){
            //Armazena a chave como vazio 
            $this->route = "login";            
            //Armazena o valor da chave como vazio
            $this->action = "start";   
            //Reescreve rotas para inicializar somente a rota para login
            $this->initRouteLogin();
        }
        else{
            if(key($_GET) == null){
                //Armazena a chave como vazio 
                $this->route = "";            
                //Armazena o valor da chave como vazio
                $this->action = "";   
            }
            else{
                //Armazena a chave (cliente)
                $this->route = key($_GET);            
                //Armazena o valor da chave (add)
                $this->action = $_GET[$this->route];   
            }                    
        }        
    }
    
}

