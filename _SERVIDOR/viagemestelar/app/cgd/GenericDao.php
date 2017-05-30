<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgd;

use app\cgd\GenericDao;
use app\cgd\DBConnection;

/**
 * Description of GenericDAO
 *
 * @author pchan
 */
class GenericDao{
	
	private $db;
	private $entity;
	
	public function __construct($entity){
            $this->db = new DBConnection();
            $this->entity = $entity;
	}
	
	public function find($id){
            
            $query = "Select * from {$this->entity->getTable()} where id=:id";

            $stmt = $this->db->getDbconnect()->prepare($query);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            return $stmt->fetch((PDO::FETCH_ASSOC));	
	}
	
	//public function listar($ordem = null){
        public function listar($ordem) : array{
            
            $query = "";
                        
            try{
                if($ordem){
                        $query ="Select * from {$this->entity->getTable()} order by {$ordem}";
                }
                else{
                        $query ="Select * from {$this->entity->getTable()}";
                }

                $stmt = $this->db->getDbconnect()->query($query);

                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
                //return $stmt->fetchAll(\PDO::FETCH_CLASS, "Cliente" );
                //return $stmt->fetchAll(\PDO::FETCH_OBJ);
                //return $stmt->fetchAll(\PDO::FETCH_CLASS, get_class([$this->entity]));

                //$stmt->bindParam(':id', $id, \PDO::PARAM_INT);

                //return $stmt->fetchAll(\PDO::FETCH_CLASS, "app\cdp\Cliente");                
                //return $stmt->fetchAll(\PDO::FETCH_FUNC);                
                //return $stmt->fetch(\PDO::FETCH_COLUMN);                                
            } 
            catch (PDOException $ex) {
                # call the get_error function
                $this->get_error($e);
            }
	}
	
	public function inserir() : bool {
		
            $query = "Insert into {$this->entity->getTable()}(nome, email) Values(:nome, :email)";
	
            $stmt = $this->db->prepare($query);

            $stmt->bindValue(':nome', $this->entity->getNome());
            $stmt->bindValue(':email', $this->entity->getEmail());

            if($stmt->execute()){
                    return true;
            }
            else{
                    return false;
            }
	}
	
	public function alterar() : bool{
		
            $query = "Update {$this->entity->getTable()} set nome=:nome, email=:email Where id=:id";
		
            $stmt = $this->db->prepare($query);

            $stmt->bindValue(':id', $this->entity->getId());
            $stmt->bindValue(':nome', $this->entity->getNome());
            $stmt->bindValue(':email', $this->entity->getEmail());

            if($stmt->execute()){
                    return true;
            }
            else{
                    return false;
            }
	}
		
	public function deletar($id) : bool {
		
            $query = "delete from {$this->entity->getTable()} where id=:id";
	
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id', $id);

            if($stmt->execute()){
                    return true;
            }
            else{
                    return false;
            }
	}	
	
}
