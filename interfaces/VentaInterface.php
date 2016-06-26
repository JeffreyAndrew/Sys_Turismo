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
interface VentaInterface {
    //put your code here
    function create(Venta $entidad);
    function readall();
    function delete($key);
    function update(Venta $entidad);
    function read($key);
}
