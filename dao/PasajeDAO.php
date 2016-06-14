<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PasajeDTO
 *
 * @author CESAR
 */
class PasajeDTO {
    //put your code here
    function create($id,$cliId,$pasCod) {
        include "../config/Conexion.php";
        $sql = "INSERT INTO pasaje(PAS_ID,CLI_ID,PAS_COD)VALUES( '".$id."','".$cliId."','".$pasCod."')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function readall() {
        include '../config/Conexion.php';
        $sql = "SELECT * FROM pasaje order by PAS_ID";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID</td><td>Nombre</td><td>CÓDIGO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td></tr> \n";
        }
        $link->close();
    }
    
    function delete($id) {
        include "../config/Conexion.php";
        $sql = "DELETE FROM pasaje"
                . " WHERE PAS_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function update($id,$nombre){
        include "../config/Conexion.php";
        $sql = "UPDATE pasaje"
                . " SET PAS_COD='".$nombre."'"
                . " WHERE PAS_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function searchById($id) {
        include '../config/Conexion.php';
        $sql = "SELECT * FROM pasaje order by PAS_ID "
                . "WHERE PAS_ID='".$id."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID</td><td>Nombre</td><td>CÓDIGO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td></tr> \n";
        }
        $link->close();
    }
    function searchByName($nombre) {
        include '../config/Conexion.php';
        $sql = "SELECT * FROM pasaje order by PAS_ID "
                . "WHERE PAS_ID='".$nombre."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID</td><td>Nombre</td><td>CÓDIGO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td></tr> \n";
        }
        $link->close();
    }
}
