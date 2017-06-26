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
        
            $metodosdaclasse = get_class_methods($this->getNameOfClass());

            return $metodosdaclasse;
        }

        public function retornaAtributosDaClasse() : array {

            $metodosdaclasse = get_class_vars($this->getNameOfClass());

            $chaves = array_keys($metodosdaclasse);

            return $chaves;
        }
        
        public function retornaConteudoDeAtributosDaClasse() : array {

            $metodosdaclasse = get_class_vars($this->getNameOfClass());

            $chaves = array_values($metodosdaclasse);

            return $chaves;
        }
}

