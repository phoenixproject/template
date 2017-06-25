<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgd;

/**
 * Description of DBConfig
 *
 * @author pchan
 */
class DBConfig {
    
    private $parametro;
	
    function __construct() {

            $this->parametro[0]['DB_HOST'] = "171.15.0.115:1433";
            $this->parametro[0]['DB_USER'] = "paguser";
            $this->parametro[0]['DB_PASS'] = "!@j2t32001";
            $this->parametro[0]['DB_PORT'] = "3306";
            $this->parametro[0]['DB_NAME'] = "pagteste";
            $this->parametro[0]['DB_TYPE'] = "mysql";

            $this->parametro[1]['DB_HOST'] = "127.0.0.1";
            //$this->parametro[1]['DB_HOST'] = "192.168.92.128";
            $this->parametro[1]['DB_USER'] = "ve_user";
            $this->parametro[1]['DB_PASS'] = "65Vg##";
            $this->parametro[1]['DB_PORT'] = "3306";
            $this->parametro[1]['DB_NAME'] = "viagemestelar";
            $this->parametro[1]['DB_TYPE'] = "mysql";

            $this->parametro[2]['DB_HOST'] = "172.16.0.128:1433";
            $this->parametro[2]['DB_USER'] = "paguser";
            $this->parametro[2]['DB_PASS'] = "!@j2t32001";
            $this->parametro[2]['DB_PORT'] = "3306";
            $this->parametro[2]['DB_NAME'] = "pagpms";
            $this->parametro[2]['DB_TYPE'] = "mysql";
    }

    public function getParametro() : array {
            return $this->parametro;
    }
    
}
