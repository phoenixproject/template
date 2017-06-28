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
class DBConnection extends \Exception {
    
    private $dbconfig;
    private $dbconnect;
    
    public function __construct(){
        
            //Identificador do banco de dados
            $indice = 1;            
                        
            $this->dbconfig = new DBConfig();
            
            try{
                $this->dbconnect = new \PDO(
                            $this->dbconfig->getParametro()[$indice]['DB_TYPE'].
                            ":host=".$this->dbconfig->getParametro()[$indice]['DB_HOST'].";".
                            "dbname=".$this->dbconfig->getParametro()[$indice]['DB_NAME'],
                            $this->dbconfig->getParametro()[$indice]['DB_USER'],
                            $this->dbconfig->getParametro()[$indice]['DB_PASS']
                        );                                
            } catch (\PDOException $e){
                //die("Não foi possível estabelecer uma conexã com o banco: Erro: ".$e->getMessage());
                die('<div class="alert alert-danger" role="alert">
                    <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
                 </div>;');                    
            } catch (Exception $e) {
                $e->getMessage();                
            }            
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
