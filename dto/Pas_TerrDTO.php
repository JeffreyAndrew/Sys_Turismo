<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pas_TerrDTO
 *
 * @author CESAR
 */
class Pas_Terr {
    //put your code here
    private $PAS_TERR_ID;
    private $VIA_ID;
    
    public function setPAS_TERR_ID($value) {
        $this->PAS_TERR_ID=$value;
    }
    public function getPAS_TERR_ID() {
        return $this->PAS_TERR_ID;
    }
    public function setVIA_ID($value) {
        $this->VIA_ID=$value;
    }
    public function getVIA_ID() {
        return $this->VIA_ID;
    }
    
    public function Pas_Terr() {
        $this->PAS_TERR_ID;
        $this->VIA_ID;
    }
}
