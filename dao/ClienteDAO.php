<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteDAO
 *
 * @author CESAR
 */
class ClienteDAO {
    //put your code here
    function create($id,$dni,$nombre,$app,$apm) {
        include "../config/Conexion.php";
        $sql = "INSERT INTO cliente(CLI_ID,CLI_NOM,CLI_DNI,CLI_APP,CLI_APM)VALUES( '".$id."','".$nombre."','".$dni."','".$app."','".$apm."')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function readall() {
        include '../config/Conexion.php';
        $sql = "SELECT CLI_NOM,CLI_APP,CLI_APM,CLI_DNI FROM cliente order by CLI_ID";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>Nombre</td><td>APELLIDO PATERNO</td><td>APELLIDO MATERNO</td><td>DNI</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td><td>$reg[3]</td></tr> \n";
        }
        $link->close();
    }
    
    function delete($id) {
        include "../config/Conexion.php";
        $sql = "DELETE FROM cliente"
                . " WHERE CLI_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function update($id,$nombre){
        include "../config/Conexion.php";
        $sql = "UPDATE cliente"
                . " SET CLI_NOM='".$nombre."'"
                . " WHERE CLI_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function searchById($id) {
        include '../config/Conexion.php';
        $sql = "SELECT CLI_NOM,CLI_APP,CLI_APM,CLI_DNI FROM cliente order by CLI_ID "
                . "WHERE CLI_ID='".$id."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>Nombre</td><td>APELLIDO PATERNO</td><td>APELLIDO MATERNO</td><td>DNI</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td><td>$reg[3]</td></tr> \n";
        }
        $link->close();
    }
    function searchByName($nombre) {
        include '../config/Conexion.php';
        $sql = "SELECT CLI_NOM,CLI_APP,CLI_APM,CLI_DNI FROM cliente order by CLI_ID "
                . "WHERE CLI_NOM='".$nombre."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>Nombre</td><td>APELLIDO PATERNO</td><td>APELLIDO MATERNO</td><td>DNI</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td><td>$reg[3]</td></tr> \n";
        }
        $link->close();
    }
}
//$hola=new ClienteDAO();
//$hola->create(1, "1234567", "Juan", "Alvaro", "Perez");
//$hola->readall();
