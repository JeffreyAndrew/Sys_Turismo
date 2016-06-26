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
interface Pas_TerrInterface {
    //put your code here
    function create(Pas_Terr $entidad);
    function readall();
    function delete($key);
    function update(Pas_Terr $entidad);
    function read($key);
}
