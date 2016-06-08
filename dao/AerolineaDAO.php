<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AerolineaDAO
 *
 * @author CESAR
 */
class AerolineaDAO {

    //put your code here
    function Ingresar($id,$nombre) {
        include "../config/Conexion.php";
        $sql = "insert into aerolinea(AER_ID,AER_NOM)values( '".$id."','".$nombre."')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
}
