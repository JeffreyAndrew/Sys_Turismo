<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pas_AerDTO
 *
 * @author CESAR
 */
class Pas_Aer {
    //put your code here
    private $PAS_AER_ID;
    private $VUE_ID;
    
    public function setPAS_AER_ID($value) {
        $this->PAS_AER_ID=$value;
    }
    public function getPAS_AER_ID() {
        return $this->PAS_AER_ID;
    }
    public function setVUE_ID($value) {
        $this->VUE_ID=$value;
    }
    public function getVUE_ID() {
        return $this->VUE_ID;
    }
    
    public function Pas_Aer() {
        $this->PAS_AER_ID;
        $this->VUE_ID;
    }
}
