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
interface ViajeInterface {
    //put your code here
    function create(Viaje $entidad);
    function readall();
    function delete($key);
    function update(Viaje $entidad);
    function read($key);
}
