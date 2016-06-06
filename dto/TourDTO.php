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
    private $LUG_ID;
    
    public function setTOUR_ID($value) {
        $this->TOUR_ID=$value;
    }
    public function getTOUR_ID() {
        return $this->TOUR_ID;
    }
    public function setLUG_ID($value) {
        $this->LUG_ID=$value;
    }
    public function getLUG_ID() {
        return $this->LUG_ID;
    }
    
    public function TOUR() {
        $this->VUE_ID;
        $this->AVI_ID;
        $this->AER_ID;
        $this->LUG_ID;
        $this->VUE_FECH;
    }
}
