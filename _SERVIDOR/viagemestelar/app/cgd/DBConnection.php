<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgd;

use app\cgd\DBConfig;
/**
 * Description of DBConnection
 *
 * @author pchan
 */
class DBConnection {
    
    private $dbconfig;
    private $dbconnect;
    private $indice;

    public function __construct(){
        
            $this->indice = 1;            
            $this->dbconfig = new DBConfig();
            
            //$host = $this->dbconfig->getParametro()[$this->indice]['DB_TYPE'];
            //$caminho = new \PDO("mysql:host=127.0.0.1;dbname=wda_crud","root","roadrash");
                        
            try{
                $this->dbconnect = new \PDO(
                            $this->dbconfig->getParametro()[$this->indice]['DB_TYPE'].
                            ":host=".$this->dbconfig->getParametro()[$this->indice]['DB_HOST'].";".
                            "dbname=".$this->dbconfig->getParametro()[$this->indice]['DB_NAME'],
                            $this->dbconfig->getParametro()[$this->indice]['DB_USER'],
                            $this->dbconfig->getParametro()[$this->indice]['DB_PASS']
                        );
                //$conexao = new \PDO("mysql:host=127.0.0.1;dbname=phppdo","root","roadrash");	
                //$this->dbconnect = new \PDO("mysql:host=127.0.0.1;dbname=wda_crud","root","roadrash");	                
            } catch (\PDOException $e){
                die("Não foi possível estabelecer uma conexã com o banco: Erro: ".$e->getMessage());
            } catch (Exception $e) {
                $e->getMessage();
            }            

            //echo $this->dbconnect;
    }

    public function getDb() : DBConfig {
            return $this->dbconfig;
    }

    public function setDb(DBConfig $dbconfig) {
            $this->$dbconfig = $dbconfig;
            return $this;
    }

    public function getDbconnect() : \PDO {
            return $this->dbconnect;
    }

    public function setDbconnect(\PDO $dbconnect) {
            $this->dbconnect = $dbconnect;
            return $this;
    }    
    
}
