<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BusDAO
 *
 * @author CESAR
 */
class BusDAO {
    //put your code here
    function create($id,$lugNombre,$busMod) {
        include "../config/Conexion.php";
        $sql = "INSERT INTO bus(BUS_ID,LUG_NOM,BUS_MOD)VALUES( '".$id."','".$lugNombre."','".$busMod."')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function readall() {
        include '../config/Conexion.php';
        $sql = "SELECT BUS_MOD,LUG_NOM FROM bus order by BUS_ID";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>LUGAR</td><td>MODELO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td></tr> \n";
        }
        $link->close();
    }
    
    function delete($id) {
        include "../config/Conexion.php";
        $sql = "DELETE FROM bus"
                . " WHERE BUS_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function update($id,$modelo){
        include "../config/Conexion.php";
        $sql = "UPDATE bus"
                . " SET BUS_MOD='".$modelo."'"
                . " WHERE BUS_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function searchById($id) {
        include '../config/Conexion.php';
        $sql = "SELECT BUS_MOD,LUG_NOM FROM bus order by BUS_ID "
                . "WHERE BUS_ID='".$id."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>LUGAR</td><td>MODELO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td></tr> \n";
        }
        $link->close();
    }
    function searchByName($modelo) {
        include '../config/Conexion.php';
        $sql = "SELECT BUS_MOD,LUG_NOM FROM bus order by BUS_ID "
                . "WHERE BUS_MOD='".$modelo."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>LUGAR</td><td>MODELO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td></tr> \n";
        }
        $link->close();
    }
}
