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
interface ClienteInterface {
    //put your code here
    function create(CLIENTE $entidad);
    function readall();
    function delete($key);
    function update(CLIENTE $entidad);
    function read($key);
    function readDni($key);
}
