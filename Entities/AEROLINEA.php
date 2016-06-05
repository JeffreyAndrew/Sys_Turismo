<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AEROLINEA
 *
 * @author CESAR
 */
class AEROLINEA {
    private $AER_ID;
    private $AER_NOM;
    
    public function setAER_NOM($value) {
        $this->AER_NOM=$value;
    }
    public function getAER_NOM() {
        return $this->AER_NOM;
    }
    public function setAER_ID($value) {
        $this->AER_ID=$value;
    }
    public function getAER_ID() {
        return $this->AER_ID;
    }
    
    public function AEROLINEA() {
        $this->AER_NOM;
        $this->AER_ID;
    }
}
