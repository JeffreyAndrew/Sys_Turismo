<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VUELO
 *
 * @author CESAR
 */
class Vuelo {
    private $VUE_ID;
    private $AVI_ID;
    private $AER_ID;
    private $LUG_ID_LL;
    private $LUG_ID_S;
    private $VUE_FECH;
    
    public function setVUE_ID($value) {
        $this->VUE_ID=$value;
    }
    public function getVUE_ID() {
        return $this->VUE_ID;
    }
    public function setAER_ID($value) {
        $this->AER_ID=$value;
    }
    public function getAER_ID() {
        return $this->AER_ID;
    }
    public function setLUG_ID_LL($value) {
        $this->LUG_ID_LL=$value;
    }
    public function getLUG_ID_LL() {
        return $this->LUG_ID_LL;
    }
    public function setLUG_ID_S($value) {
        $this->LUG_ID_S=$value;
    }
    public function getLUG_ID_S() {
        return $this->LUG_ID_S;
    }
    public function setAVI_ID($value) {
        $this->AVI_ID=$value;
    }
    public function getAVI_ID() {
        return $this->AVI_ID;
    }
    public function setVUE_FECH($value) {
        $this->VUE_FECH=$value;
    }
    public function getVUE_FECH() {
        return $this->VUE_FECH;
    }
    
    public function Vuelo() {
        $this->VUE_ID;
        $this->AVI_ID;
        $this->AER_ID;
        $this->LUG_ID_LL;
        $this->LUG_ID_S;
        $this->VUE_FECH;
    }
}
