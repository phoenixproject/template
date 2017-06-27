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
}
