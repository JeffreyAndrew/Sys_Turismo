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
class Ciudad {
    private $CIU_ID;
    private $CIU_NOM;
    
    public function setCIU_ID($value) {
        $this->CIU_ID=$value;
    }
    public function getCIU_ID() {
        return $this->CIU_ID;
    }
    public function setCIU_NOM($value) {
        $this->CIU_NOM=$value;
    }
    public function getCIU_NOM() {
        return $this->CIU_NOM;
    }
    
    public function Ciudad() {
        $this->CIU_ID;
        $this->CIU_NOM;
    }
}
?>