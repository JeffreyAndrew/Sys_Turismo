<?php

require_once './config/Conexion.php';
require_once './dto/LugarDTO.php';

class LugarDAO {

    //put your code here
    function create(LUGAR $lugar) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO ciudad(CIU_ID,CIU_NOM)VALUES( '" . $lugar->getLUG_ID() . "','" . $lugar->getLUG_NOM() . "')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function readall() {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "SELECT CIU_ID,CIU_NOM FROM ciudad order by CIU_ID";
        $result = $link->query($sql);
        $lista = array();
        while ($reg = mysqli_fetch_array($result)) {
            $lugar = new LugarDTO();
            $lugar->setLUG_ID($reg[0]);
            $lugar->setLUG_NOM($reg[1]);
            $lista[] = $lugar;
        }
        $link->close();
        return $lista;
    }

    function delete($id) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM ciudad"
                . " WHERE CIU_ID='" . $id . "'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function update($id, $nombre) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE ciudad"
                . " SET CIU_NOM='" . $nombre . "'"
                . " WHERE CIU_ID='" . $id . "'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function searchById($id) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "SELECT LUG_NOM FROM ciudad order by LUG_ID "
                . "WHERE LUG_ID='" . $id . "'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>NOMBRE</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }

    function searchByName($nombre) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "SELECT LUG_NOM FROM ciudad order by LUG_ID "
                . "WHERE LUG_NOM='" . $nombre . "'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>Nombre</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }

}
?>