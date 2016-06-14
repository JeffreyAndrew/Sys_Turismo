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
interface interfaceAvion {
    //put your code here
    function create($id,$modelo,$capacidad,$aerId);
    function readall();
    function delete($id);
    function update($id,$aerId);
    function searchById($id);
    function searchByName($nombre);
}
