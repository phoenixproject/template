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
	private $id;	
        
        public function __construct($table) {            
            $this->table = $table;
        }        
    
        function getId() : int {
            return $this->id;
        }
        
        function setId($id) {
            $this->id = $id;
        }
        
        function getTable() : string {
            return $this->table;
        }

        function setTable($table) {
            $this->table = $table;
        }

}
