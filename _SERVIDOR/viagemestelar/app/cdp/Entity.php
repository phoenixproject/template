<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\cdp;
/**
 * Description of AbstractEntity
 *
 * @author pchan
 */
abstract class Entity {
    
    	private $table;
	        
        public function __construct($table) {            
            $this->table = $table;
        }        
        
        function getTable() : string {
            return $this->table;
        }

        function setTable($table) {
            $this->table = $table;
        }
        
        public function retornaMetodosDaClasse() : array {
        
            $metodosdaclasse = get_class_methods(get_class($this));

            return $metodosdaclasse;
        }

        public function retornaAtributosDaClasse() : array {

            $atributosdaclasse = get_class_vars(get_class($this));
            //$atributosdaclasse = get_object_vars($this);

            $chaves = array_keys($atributosdaclasse);

            return $chaves;
        }
        
        public function retornaConteudoDeAtributosDaClasse() : array {

            //$conteudoatributos = get_class_vars(get_class($this));
            $conteudoatributos = get_object_vars($this);

            $chaves = array_values($conteudoatributos);

            return $chaves;
        }
        
        public function retornaDeQuantidadeAtributosDaClasseFilha() : int {
            
            //Retirando um atributo protected (table) da classe pai.
            return (count($this->retornaAtributosDaClasse()));
            
        }
}

