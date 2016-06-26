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
interface AerolineaInterface {
    //put your code here
    function create(AEROLINEA $entidad);
    function readall();
    function delete($key);
    function update(AEROLINEA $entidad);
    function read($key);
}
