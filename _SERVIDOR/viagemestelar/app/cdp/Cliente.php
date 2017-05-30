<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cdp;

use app\cdp\Entity;

/**
 * Description of Cliente
 *
 * @author pchan
 */
class Cliente extends Entity {
    
    private $name;
    private $cpf_cnpj;
    private $birthdate;
    private $address;
    private $hood;
    private $zip_code;
    private $city;
    private $state;
    private $phone;
    private $mobile;
    private $ie;
    private $created;
    private $modified;
    
    public function __construct() {
        parent::__construct("customers");        
    }
    
    function getName() : string {
        return $this->name;
    }

    function getCpf_cnpj() : string {
        return $this->cpf_cnpj;
    }

    function getBirthdate() : \DateTime {
        return $this->birthdate;
    }

    function getAddress() : string {
        return $this->address;
    }

    function getHood() : string {
        return $this->hood;
    }

    function getZip_code() {
        return $this->zip_code;
    }

    function getCity() : string {
        return $this->city;
    }

    function getState() : string {
        return $this->state;
    }

    function getPhone() : int {
        return $this->phone;
    }

    function getMobile() : int {
        return $this->mobile;
    }

    function getIe() : int {
        return $this->ie;
    }

    function getCreated() : \DateTime {
        return $this->created;
    }

    function getModified() : \DateTime {
        return $this->modified;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setCpf_cnpj($cpf_cnpj) {
        $this->cpf_cnpj = $cpf_cnpj;
    }

    function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setHood($hood) {
        $this->hood = $hood;
    }

    function setZip_code($zip_code) {
        $this->zip_code = $zip_code;
    }

    function setCity($city) {
        $this->city = $city;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    function setIe($ie) {
        $this->ie = $ie;
    }

    function setCreated($created) {
        $this->created = $created;
    }

    function setModified($modified) {
        $this->modified = $modified;
    }
    
}

?>