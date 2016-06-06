<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BUS
 *
 * @author CESAR
 */
class BUS {
    private $BUS_ID;
    private $LUG_ID;
    private $BUS_MOD;
    
    public function setBUS_ID($value) {
        $this->BUS_ID=$value;
    }
    public function getBUS_ID() {
        return $this->BUS_ID;
    }
    public function setLUG_ID($value) {
        $this->LUG_ID=$value;
    }
    public function getLUG_ID() {
        return $this->LUG_ID;
    }
    public function setBUS_MOD($value) {
        $this->BUS_MOD=$value;
    }
    public function getBUS_MOD() {
        return $this->BUS_MOD;
    }
    
    public function BUS() {
        $this->BUS_ID;
        $this->LUG_ID;
        $this->BUS_MOD;
    }
}
