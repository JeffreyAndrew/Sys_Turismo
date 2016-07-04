<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author CESAR
 */
interface Pas_AerInterface {
    //put your code here
    function create(Pas_Aer $entidad);
    function readall();
    function delete($key);
    function update(Pas_Aer $entidad);
    function read($key);
    function readByDni(Pas_Aer $entidad);
}
