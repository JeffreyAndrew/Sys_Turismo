<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AVION
 *
 * @author CESAR
 */
class AVION {
    private $AVI_ID;
    private $AER_ID;
    private $AVI_MOD;
    private $AVI_CAP;
    
    public function setAVI_ID($value) {
        $this->AVI_ID=$value;
    }
    public function getAVI_ID() {
        return $this->AVI_ID;
    }
    public function setAER_ID($value) {
        $this->AER_ID=$value;
    }
    public function getAER_ID() {
        return $this->AER_ID;
    }
    public function setAVI_MOD($value) {
        $this->AVI_MOD=$value;
    }
    public function getAVI_MOD() {
        return $this->AVI_MOD;
    }
    public function setAVI_CAP($value) {
        $this->AVI_CAP=$value;
    }
    public function getAVI_CAP() {
        return $this->AVI_CAP;
    }
    
    public function AVION() {
        $this->AVI_ID;
        $this->AER_ID;
        $this->AVI_MOD;
        $this->AVI_CAP;
    }
}
