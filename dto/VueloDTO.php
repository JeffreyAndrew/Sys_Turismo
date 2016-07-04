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
    private $CIU_ID_D;
    private $CIU_ID_O;
    private $VUE_FECH;
    private $VUE_PRICE_ECO;
    private $VUE_PRICE_EJE;
    private $VUE_PRICE_PRI;
    private $VUE_PRICE_TUR;
    private $VUE_PRICE_BUS;
    
    public function setVUE_ID($value) {
        $this->VUE_ID=$value;
    }
    public function getVUE_ID() {
        return $this->VUE_ID;
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
    public function setVUE_PRICE_ECO($value) {
        $this->VUE_PRICE_ECO=$value;
    }
    public function getVUE_PRICE_ECO() {
        return $this->VUE_PRICE_ECO;
    }
    public function setVUE_PRICE_EJE($value) {
        $this->VUE_PRICE_EJE=$value;
    }
    public function getVUE_PRICE_EJE() {
        return $this->VUE_PRICE_EJE;
    }
    public function setVUE_PRICE_PRI($value) {
        $this->VUE_PRICE_PRI=$value;
    }
    public function getVUE_PRICE_PRI() {
        return $this->VUE_PRICE_PRI;
    }
    public function setVUE_PRICE_TUR($value) {
        $this->VUE_PRICE_TUR=$value;
    }
    public function getVUE_PRICE_TUR() {
        return $this->VUE_PRICE_TUR;
    }
    public function setVUE_PRICE_BUS($value) {
        $this->VUE_PRICE_BUS=$value;
    }
    public function getVUE_PRICE_BUS() {
        return $this->VUE_PRICE_BUS;
    }
    
    public function Vuelo() {
        $this->VUE_ID;
        $this->AVI_ID;
        $this->CIU_ID_D;
        $this->CIU_ID_O;
        $this->VUE_FECH;
        $this->VUE_PRICE_ECO;
        $this->VUE_PRICE_EJE;
        $this->VUE_PRICE_PRI;
        $this->VUE_PRICE_TUR;
        $this->VUE_PRICE_BUS;
    }
}
