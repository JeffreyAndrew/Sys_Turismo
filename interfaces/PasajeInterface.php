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
interface PasajeInterface {
    //put your code here
    function create(PASAJE $entidad);
    function readall();
    function delete($key);
    function update(PASAJE $entidad);
    function read($key);
}
