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
    private $PAS_AER_TIP;
    private $CLI_ID;
    
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
    public function setPAS_AER_TIP($value) {
        $this->PAS_AER_TIP=$value;
    }
    public function getPAS_AER_TIP() {
        return $this->PAS_AER_TIP;
    }
    public function setCLI_ID($value) {
        $this->CLI_ID=$value;
    }
    public function getCLI_ID() {
        return $this->CLI_ID;
    }
    
    public function Pas_Aer() {
        $this->PAS_AER_ID;
        $this->VUE_ID;
        $this->PAS_AER_TIP;
        $this->CLI_ID;
    }
}
