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
    private $CLI_ID;
    private $PAS_COD;
    
    public function setPAS_ID($value) {
        $this->PAS_ID=$value;
    }
    public function getPAS_ID() {
        return $this->PAS_ID;
    }
    public function setCLI_ID($value) {
        $this->CLI_ID=$value;
    }
    public function getCLI_ID() {
        return $this->CLI_ID;
    }
    public function setPAS_COD($value) {
        $this->PAS_COD=$value;
    }
    public function getPAS_COD() {
        return $this->PAS_COD;
    }
    
    public function PASAJE() {
        $this->PAS_ID;
        $this->CLI_ID;
        $this->PAS_COD;
    }
}
