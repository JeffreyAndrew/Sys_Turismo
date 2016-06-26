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
    private $LUG_ID_D;
    private $LUG_ID_O;
    private $VUE_FECH;
    
    public function setVUE_ID($value) {
        $this->VUE_ID=$value;
    }
    public function getVUE_ID() {
        return $this->VUE_ID;
    }
    public function setLUG_ID_D($value) {
        $this->LUG_ID_D=$value;
    }
    public function getLUG_ID_D() {
        return $this->LUG_ID_D;
    }
    public function setLUG_ID_O($value) {
        $this->LUG_ID_O=$value;
    }
    public function getLUG_ID_O() {
        return $this->LUG_ID_O;
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
        $this->LUG_ID_D;
        $this->LUG_ID_O;
        $this->VUE_FECH;
    }
}
