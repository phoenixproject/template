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
	
	public function inserir($objeto) : bool {
		
            $query = "Insert into {$this->entity->getTable()} ";
            $query .= "(";
            //$query .= "(nome, email) Values(:nome, :email)";
	            
            for($posicao = 1; $posicao < $objeto->retornaDeQuantidadeAtributosDaClasseFilha() -1; $posicao++){            
                //$query .= $objeto->retornaAtributosDaClasse()[$posicao] ." = :valor".$posicao;                
                $query .= $objeto->retornaAtributosDaClasse()[$posicao];
                
                if($posicao + 1 != $objeto->retornaDeQuantidadeAtributosDaClasseFilha() -1){                
                    $query .=  ", ";
                }
                else{
                    $query .=  ") Values( ";
                }
            }
            
            //O índice iniicia a partir do 1 (para eleminar o código) e finaliza antes do atributo que contém informação de tabela
            for($indice = 1; $indice < $objeto->retornaDeQuantidadeAtributosDaClasseFilha() -1; $indice++){
                $query .= "'".$objeto->retornaConteudoDeAtributosDaClasse()[$indice]."'";
                
                if($indice + 1 != $objeto->retornaDeQuantidadeAtributosDaClasseFilha() -1){
                    $query .=  ", ";
                }
                else{
                    $query .=  ") ";
                }
            }
            
            try{                
                $stmt = $this->db->getDbconnect()->prepare($query);

                //O índice iniicia a partir do 1 (para eleminar o código) e finaliza antes do atributo que contém informação de tabela
                for($indice = 1; $indice < $objeto->retornaDeQuantidadeAtributosDaClasseFilha() -1; $indice++){
                    $stmt->bindValue(':valor'.$indice,$objeto->retornaConteudoDeAtributosDaClasse()[$indice]);
                }
                
                $stmt->execute();
        
                return true;
                
            } catch (Exception $ex) {
                return $this->get_error($e);
            } catch (PDOException $ex) {
                # call the get_error function
                return $this->get_error($e);
            }
	}
	
	public function alterar($objeto) : bool{
	    
            $query = "Update {$objeto->getTable()} set ";
                        
            for($posicao = 1; $posicao < $objeto->retornaDeQuantidadeAtributosDaClasseFilha() -1; $posicao++){            
                $query .= $objeto->retornaAtributosDaClasse()[$posicao] ." = :valor".$posicao;                
                if($posicao + 1 != $objeto->retornaDeQuantidadeAtributosDaClasseFilha() -1){                
                    $query .=  ", ";
                }
            }
            
            //Obtém o código do objeto a ser alterado
            $codigo = $objeto->retornaAtributosDaClasse()[0];
            
            //Finaliza a query com o código
            $query .= " where $codigo = :valor";

            try{
                $stmt = $this->db->getDbconnect()->prepare($query);

                //Faz o bind do valor do valor do código que está contido no primeiro atributo da classe
                $stmt->bindValue(':valor', $objeto->retornaConteudoDeAtributosDaClasse()[0]);

                
                //O índice iniicia a partir do 1 (para eleminar o código) e finaliza antes do atributo que contém informação de tabela
                for($indice = 1; $indice < $objeto->retornaDeQuantidadeAtributosDaClasseFilha() -1; $indice++){                
                    $stmt->bindValue(':valor'.$indice, $objeto->retornaConteudoDeAtributosDaClasse()[$indice]);
                }
                                
                $stmt->execute();
        
                return true;
                
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
}
