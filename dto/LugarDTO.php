<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LUGAR
 *
 * @author CESAR
 */
class LugarDTO {
    private $LUG_ID;
    private $LUG_NOM;
    
    public function setLUG_ID($value) {
        $this->LUG_ID=$value;
    }
    public function getLUG_ID() {
        return $this->LUG_ID;
    }
    public function setLUG_NOM($value) {
        $this->LUG_NOM=$value;
    }
    public function getLUG_NOM() {
        return $this->LUG_NOM;
    }
    
    public function LUGAR() {
        $this->LUG_ID;
        $this->LUG_NOM;
    }
}
?>