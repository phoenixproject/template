<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgd;

use app\cgd\GenericDao;
use app\cgd\DBConnection;
use app\cdp\Usuario;

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
                        
            $query = "Select * from {$this->entity->getTable()} where $codigo = :valor";
                        
            try{                
                $stmt = $this->db->getDbconnect()->prepare($query);
                
                $stmt->bindValue(':valor', $id);
                
                $stmt->execute();

                return $stmt->fetch((\PDO::FETCH_ASSOC));	
            } catch (Exception $ex) {
                return $this->get_error($e);
            } catch (PDOException $ex) {
                # call the get_error function
                return $this->get_error($e);
            }
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

                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            } 
            catch (Exception $ex) {
                return $this->get_error($e);
            } catch (PDOException $ex) {
                # call the get_error function
                return $this->get_error($e);
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
	
	public function alterar($objeto) : bool{
	
            $codigo = $this->entity->retornaAtributosDaClasse()[0];
                        
            $query = "";
            
            $query .= "Update {$this->entity->getTable()} ";
            $query .= "set ";
            
            for($posicao = 1; $posicao < $this->entity->retornaDeQuantidadeAtributosDaClasseFilha(); $posicao++){
                $query .= $this->entity->retornaAtributosDaClasse()[$posicao] ." = :valor".$posicao;
                if($posicao + 1 != $this->entity->retornaDeQuantidadeAtributosDaClasseFilha()){
                    $query .=  ", ";
                }
            }
            
            //Finaliza a query com o código
            $query .= " where $codigo = :valor";

            try{
                $stmt = $this->db->getDbconnect()->prepare($query);

                //Retorna o método na posição 1 que traz o id da classe
                $metodo = $this->entity->retornaMetodosDaClasse()[1];

                //Utiliza reflection para invocar o método de busca do id da classe.
                $metodoReflection = new \ReflectionMethod(get_class($objeto),$metodo);
                $nomedaclasse = get_class($objeto);                            
                
                //Faz o bind do valor do código invocando o método por reflection
                $stmt->bindValue(':valor', $metodoReflection->invoke(new $nomedaclasse));

                //O índice é menor igual ao último registro para não contar o atributo table e de código (que já foi feito o bind)
                for($indice = 2; $posicao <= $this->entity->retornaDeQuantidadeAtributosDaClasseFilha(); $indice++){

                    $metodoReflection = new \ReflectionMethod(get_class($objeto),$this->entity->retornaMetodosDaClasse()[$indice]);
                    $nomedaclasse = get_class($objeto);            

                    $stmt->bindValue(':valor'.$indice, $metodoReflection->invoke(new $nomedaclasse));
                }
                
                $stmt->execute();

                return $stmt->fetch((\PDO::FETCH_ASSOC));	
                
            } catch (Exception $ex) {
                return $this->get_error($e);
            } catch (PDOException $ex) {
                # call the get_error function
                return $this->get_error($e);
            }
	}
		
	public function deletar($id) : bool {
            
            $codigo = $this->entity->retornaAtributosDaClasse()[0];
            	
            $query = "delete from {$this->entity->getTable()} where $codigo = :valor";
	
            try{
                $stmt = $this->db->getDbconnect()->prepare($query);
                
                $stmt->bindValue(':valor', $id);
                
                $stmt->execute();
                
                return true;
            } catch (Exception $ex) {
                return $this->get_error($e);
            } catch (PDOException $ex) {
                # call the get_error function
                return $this->get_error($e);
            }
	}
        
        public function teste(){
            
            $quantidadeatributos = count($this->entity->retornaAtributosDaClasse());
            
            $codigo = $this->entity->retornaAtributosDaClasse()[0];
            $metodo = $this->entity->retornaMetodosDaClasse()[1];
            
            $metodoReflection = new \ReflectionMethod(get_class($this->entity),$metodo);
            $nomedaclasse = get_class($this->entity);
        }
}
