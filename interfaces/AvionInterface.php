<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
interface AvionInterface {
    //put your code here
    function create(AVION $entidad);
    function readall();
    function delete($key);
    function update(AVION $entidad);
    function read($key);
}
