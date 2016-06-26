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
interface CiudadInterface {
    //put your code here
    function create(Ciudad $entidad);
    function readall();
    function delete($key);
    function update(Ciudad $entidad);
    function read($key);
}
