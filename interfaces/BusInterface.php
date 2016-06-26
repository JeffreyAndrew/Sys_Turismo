<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
interface BusInterface {
    //put your code here
    function create(BUS $entidad);
    function readall();
    function delete($key);
    function update(BUS $entidad);
    function read($key);
}
