<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PASAJE
 *
 * @author CESAR
 */
class PASAJE {
    private $PAS_ID;
    private $PAS_FECH;
    private $PAS_COD;
    private $PAS_TERR_ID;
    private $PAS_AER_ID;
    
    public function setPAS_ID($value) {
        $this->PAS_ID=$value;
    }
    public function getPAS_ID() {
        return $this->PAS_ID;
    }
    public function setPAS_FECH($value) {
        $this->PAS_FECH=$value;
    }
    public function getPAS_FECH() {
        return $this->PAS_FECH;
    }
    public function setPAS_COD($value) {
        $this->PAS_COD=$value;
    }
    public function getPAS_COD() {
        return $this->PAS_COD;
    }
    public function setPAS_TERR_ID($value) {
        $this->PAS_TERR_ID=$value;
    }
    public function getPAS_TERR_ID() {
        return $this->PAS_TERR_ID;
    }
    public function setPAS_AER_ID($value) {
        $this->PAS_AER_ID=$value;
    }
    public function getPAS_AER_ID() {
        return $this->PAS_AER_ID;
    }
    
    public function PASAJE() {
        $this->PAS_ID;
        $this->PAS_FECH;
        $this->PAS_COD;
        $this->PAS_TERR_ID;
        $this->PAS_AER_ID;
    }
}
