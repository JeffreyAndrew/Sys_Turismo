<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CLIENTE
 *
 * @author CESAR
 */
class CLIENTE {
    private $CLI_ID;
    private $CLI_NOM;
    private $CLI_APP;
    private $CLI_DNI;
    private $CLI_APM;
    
    public function setCLI_ID($value) {
        $this->CLI_ID=$value;
    }
    public function getCLI_ID() {
        return $this->CLI_ID;
    }
    public function setCLI_NOM($value) {
        $this->CLI_NOM=$value;
    }
    public function getCLI_NOM() {
        return $this->CLI_NOM;
    }
    public function setCLI_APP($value) {
        $this->CLI_APP=$value;
    }
    public function getCLI_APP() {
        return $this->CLI_APP;
    }
    public function setCLI_DNI($value) {
        $this->CLI_DNI=$value;
    }
    public function getCLI_DNI() {
        return $this->CLI_DNI;
    }
    public function setCLI_APM($value) {
        $this->CLI_APM=$value;
    }
    public function getCLI_APM() {
        return $this->CLI_APM;
    }
    
    public function CLIENTE() {
        $this->CLI_ID;
        $this->CLI_NOM;
        $this->CLI_DNI;
        $this->CLI_APP;
        $this->CLI_APM;
    }
}
