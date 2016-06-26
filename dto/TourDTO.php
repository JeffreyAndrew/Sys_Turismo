<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TOUR
 *
 * @author CESAR
 */
class TOUR {
    private $TOUR_ID;
    private $TOUR_NOM;
    private $TOUR_DESC;
    private $CIU_ID;
    
    public function setTOUR_ID($value) {
        $this->TOUR_ID=$value;
    }
    public function getTOUR_ID() {
        return $this->TOUR_ID;
    }
    public function setTOUR_NOM($value) {
        $this->TOUR_NOM=$value;
    }
    public function getTOUR_NOM() {
        return $this->TOUR_NOM;
    }
    public function setTOUR_DESC($value) {
        $this->TOUR_DESC=$value;
    }
    public function getTOUR_DESC() {
        return $this->TOUR_DESC;
    }
    public function setCIU_ID($value) {
        $this->CIU_ID=$value;
    }
    public function getCIU_ID() {
        return $this->CIU_ID;
    }
    
    public function TOUR() {
        $this->TOUR_ID;
        $this->CIU_ID;
        $this->TOUR_DESC;
    }
}
