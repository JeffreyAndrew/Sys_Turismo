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
    function create($id,$nombre) {
        include "../config/Conexion.php";
        $sql = "INSERT INTO aerolinea(AER_ID,AER_NOM)VALUES( '".$id."','".$nombre."')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function readall() {
        include '../config/Conexion.php';
        $sql = "SELECT * FROM aerolinea order by AER_ID";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>Nombre</td><td>E-Mail</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
    
    function delete($id) {
        include "../config/Conexion.php";
        $sql = "DELETE FROM aerolinea"
                . " WHERE AER_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function update($id,$nombre){
        include "../config/Conexion.php";
        $sql = "UPDATE aerolinea"
                . " SET AER_NOM='".$nombre."'"
                . " WHERE AER_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function searchById($id) {
        include '../config/Conexion.php';
        $sql = "SELECT * FROM aerolinea order by AER_ID "
                . "WHERE AER_ID='".$id."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>Nombre</td><td>E-Mail</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
    function SearchByName($nombre) {
        include '../config/Conexion.php';
        $sql = "SELECT * FROM aerolinea order by AER_ID "
                . "WHERE AER_ID='".$nombre."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>Nombre</td><td>E-Mail</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
}