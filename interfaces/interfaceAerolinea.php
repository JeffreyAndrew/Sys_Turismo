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
interface interfaceAerolinea {
    //put your code here
    function create($entidad);
    function readall();
    function delete($id);
    function update($entidad);
    function searchById($id);
    function searchByName($nombre);
}
