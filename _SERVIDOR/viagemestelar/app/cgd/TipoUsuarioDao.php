<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\cgd;

use app\cdp\TipoUsuario;
use app\cgd\GenericDao;
/**
 * Description of TipoUsuarioDao
 *
 * @author pchan
 */
class TipoUsuarioDao extends GenericDao {
    
    public function __construct(){
        parent::__construct(new TipoUsuario());
    }
    
}
