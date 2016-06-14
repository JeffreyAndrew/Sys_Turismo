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
interface interfacePasaje {
    //put your code here
    function create($id,$cliId,$pasCod);

    function readall();
    
    function delete($id);
    
    function update($id,$nombre);
    
    function searchById($id);
    
    function searchByName($nombre);
    
}
