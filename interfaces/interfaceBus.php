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
interface interfaceBus {
    //put your code here
    function create($id,$lugNombre,$busMod);

    function readall();
    
    function delete($id);
    
    function update($id,$modelo);
    
    function searchById($id);
    
    function searchByName($modelo);
}
