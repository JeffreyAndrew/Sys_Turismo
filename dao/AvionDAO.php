<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AvionDAO
 *
 * @author CESAR
 */
class AvionDAO {
    //put your code here
    function create($id,$modelo,$capacidad,$aerId) {
        include "../config/Conexion.php";
        $sql = "INSERT INTO avion(AVI_ID,AVI_MOD,AVI_CAP,AER_ID)VALUES( '".$id."','".$modelo."','".$capacidad."','".$aerId."')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function readall() {
        include '../config/Conexion.php';
        $sql = "SELECT A.AVI_MOD,A.AVI_CAP,B.AER_NOM FROM avion A,aerolinea B "
                . "WHERE A.AER_ID=B.AER_ID "
                . "ORDER BY AVI_ID";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>MODELO</td><td>CAPACIDAD</td><td>AEROLINEA</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td></tr> \n";
        }
        $link->close();
    }
    
    function delete($id) {
        include "../config/Conexion.php";
        $sql = "DELETE FROM avion"
                . " WHERE AVI_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function update($id,$aerId){
        include "../config/Conexion.php";
        $sql = "UPDATE avion"
                . " SET AER_ID='".$aerId."'"
                . " WHERE AVI_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function searchById($id) {
        include '../config/Conexion.php';
        $sql = "SELECT AVI_MOD,AVI_CAP FROM avion order by AVI_ID "
                . "WHERE AVI_ID='".$id."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>MODELO</td><td>CAPACIDAD</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
    function searchByName($nombre) {
        include '../config/Conexion.php';
        $sql = "SELECT AVI_MOD,AVI_CAP FROM avion order by AVI_ID "
                . "WHERE AVI_MOD='".$nombre."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>MODELO</td><td>CAPACIDAD</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
}
//$hola=new AvionDAO();
//$hola->create(1, "AXT800", "150", 1);
//$hola->readall();