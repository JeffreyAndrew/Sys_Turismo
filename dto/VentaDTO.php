<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VentaDTO
 *
 * @author CESAR
 */
class Venta {
    //put your code here
    private $VEN_ID;
    private $CLI_ID;
    private $TOUR_ID;
    private $PAS_ID;
    
    public function setVEN_ID($value) {
        $this->VEN_ID=$value;
    }
    public function getVEN_ID() {
        return $this->VEN_ID;
    }
    public function setCLI_ID($value) {
        $this->CLI_ID=$value;
    }
    public function getCLI_ID() {
        return $this->CLI_ID;
    }
    public function setTOUR_ID($value) {
        $this->TOUR_ID=$value;
    }
    public function getTOUR_ID() {
        return $this->TOUR_ID;
    }
    public function setPAS_ID($value) {
        $this->PAS_ID=$value;
    }
    public function getPAS_ID() {
        return $this->PAS_ID;
    }
    
    public function Venta() {
        $this->VEN_ID;
        $this->CLI_ID;
        $this->TOUR_ID;
        $this->PAS_ID;
    }
}
