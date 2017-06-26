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
	
        protected $db;
	protected $entity;

        public function __construct($entity){
            
            $this->db = new DBConnection();
            $this->entity = $entity;
            
	}
        
        public function find($id){
            
            $codigo = $this->entity->retornaAtributosDaClasse()[0];
            $metodo = $this->entity->retornaMetodosDaClasse()[0];
            
            $metodoReflection = new ReflectionMethod(get_class($this->entity),$metodo);
            $nomedaclasse = get_class($this->entity);
            
            //$query = "Select * from {$this->entity->getTable()} where id=:id";
            $query = "Select * from {$this->entity->getTable()} where $codigo=:$metodoReflection->invoke(new $nomedaclasse)";

            $teste = "";
            
            try{
                $stmt = $this->db->getDbconnect()->prepare($query);
                $stmt->bindValue(':id', $id);
                $stmt->execute();

                $teste = $stmt->fetch((\PDO::FETCH_ASSOC));	
            } catch (Exception $ex) {
                $teste = $this->get_error($e);
            } catch (PDOException $ex) {
                # call the get_error function
                $teste = $this->get_error($e);
            }                        
            
            return $teste;
            //return $stmt->fetch((PDO::FETCH_ASSOC));	
            
            //return $stmt->fetch((PDO::FETCH_ASSOC));	
	}
	
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

                $teste = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                                
                //return $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $teste;
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
