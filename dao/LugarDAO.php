<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LugarDAO
 *
 * @author CESAR
 */
class LugarDAO {
    //put your code here
    function create($id,$nombre) {
        include "../config/Conexion.php";
        $sql = "INSERT INTO lugar(LUG_ID,LUG_NOM)VALUES( '".$id."','".$nombre."')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function readall() {
        include '../config/Conexion.php';
        $sql = "SELECT LUG_NOM FROM lugar order by LUG_ID";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>NOMBRE</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
    
    function delete($id) {
        include "../config/Conexion.php";
        $sql = "DELETE FROM lugar"
                . " WHERE LUG_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function update($id,$nombre){
        include "../config/Conexion.php";
        $sql = "UPDATE lugar"
                . " SET LUG_NOM='".$nombre."'"
                . " WHERE LUG_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function searchById($id) {
        include '../config/Conexion.php';
        $sql = "SELECT LUG_NOM FROM lugar order by LUG_ID "
                . "WHERE LUG_ID='".$id."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>NOMBRE</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
    function searchByName($nombre) {
        include '../config/Conexion.php';
        $sql = "SELECT LUG_NOM FROM bus order by LUG_ID "
                . "WHERE LUG_NOM='".$nombre."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>Nombre</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
}
