<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgd;

use app\cdp\Combinacao;
use app\cgd\GenericDao;
/**
 * Description of CombinacaoDao
 *
 * @author pchan
 */
class CombinacaoDao  extends GenericDao {
    
    public function __construct(){
        parent::__construct(new Combinacao());
    }
    
     public function buscarCombinacao($tp_nave, $tp_arma){
        
        $query = "Select * from {$this->entity->getTable()} where tp_nave = :codigo_nave and tp_arma =: codigo_arama";

        try{                
            $stmt = $this->db->getDbconnect()->prepare($query);

            $stmt->bindValue(':codigo_nave', $tp_nave);
            $stmt->bindValue(':codigo_arma', $tp_arma);

            $stmt->execute();

            return $stmt->fetch((\PDO::FETCH_ASSOC));	
        } catch (Exception $ex) {
            return $this->get_error($e);
        } catch (PDOException $ex) {
            # call the get_error function
            return $this->get_error($e);
        }
    }
    
}
