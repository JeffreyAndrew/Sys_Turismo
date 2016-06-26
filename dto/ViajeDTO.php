<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViajeDTO
 *
 * @author CESAR
 */
class Viaje {
    //put your code here
    private $VIA_ID;
    private $CIU_ID_D;
    private $CIU_ID_O;
    private $BUS_ID;
    
    public function setVIA_ID($value) {
        $this->VIA_ID=$value;
    }
    public function getVIA_ID() {
        return $this->VIA_ID;
    }
    public function setCIU_ID_D($value) {
        $this->CIU_ID_D=$value;
    }
    public function getCIU_ID_D() {
        return $this->CIU_ID_D;
    }
    public function setCIU_ID_O($value) {
        $this->CIU_ID_O=$value;
    }
    public function getCIU_ID_O() {
        return $this->CIU_ID_O;
    }
    public function setBUS_ID($value) {
        $this->BUS_ID=$value;
    }
    public function getBUS_ID() {
        return $this->BUS_ID;
    }
    
    public function Venta() {
        $this->VIA_ID;
        $this->CIU_ID_D;
        $this->CIU_ID_O;
        $this->BUS_ID;
    }
}
