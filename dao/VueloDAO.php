<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VueloDAO
 *
 * @author CESAR
 */
class VueloDAO {

    //put your code here
    function create(Vuelo $vuelo) {
        include "../config/Conexion.php";
        $sql = "INSERT INTO vuelo(VUE_ID,AVI_ID,AER_ID,LUG_ID,VUE_FECH)VALUES( '" . $vuelo->getVUE_ID() . "','" . $vuelo->getAVI_ID() . "','" . $vuelo->getAER_ID() . "','" . $vuelo->getLUG_ID() . "','" 
                . $vuelo->getVUE_FECH() . "')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function readall() {
        include '../config/Conexion.php';
        $sql = "SELECT AVI_ID,AER_ID,LUG_ID_LL,LUG_ID_S,VUE_FECH FROM vuelo order by VUE_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $vuelo = new Vuelo();
            $vuelo->setAVI_ID($reg[0]);
            $vuelo->setAER_ID($reg[1]);
            $vuelo->setLUG_ID_LL($reg[2]);
            $vuelo->setLUG_ID_S($reg[3]);
            $vuelo->setVUE_FECH($reg[4]);
            $lista[]=$vuelo;
        }
        $link->close();
        return $lista;
    }

    function delete($id) {
        include "../config/Conexion.php";
        $sql = "DELETE FROM vuelo"
                . " WHERE VUE_ID='" . $id . "'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function update($id, $nombre) {
        include "../config/Conexion.php";
        $sql = "UPDATE vuelo"
                . " SET AVI_ID='" . $nombre . "'"
                . " WHERE VUE_ID='" . $id . "'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function searchById($id) {
        include '../config/Conexion.php';
        $sql = "SELECT AVI_ID,AER_ID,LUG_ID,VUE_FECH FROM vuelo order by VUE_ID "
                . "WHERE VUE_ID='" . $id . "'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID AVION</td><td>ID AIRLINE</td><td>ID LUGAR</td><td>FECHA VUELO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td><td>$reg[3]</td></tr> \n";
        }
        $link->close();
    }

    function searchByName($nombre) {
        include '../config/Conexion.php';
        $sql = "SELECT AVI_ID,AER_ID,LUG_ID,VUE_FECH FROM vuelo order by VUE_ID "
                . "WHERE LUG_ID='" . $nombre . "'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID AVION</td><td>ID AIRLINE</td><td>ID LUGAR</td><td>FECHA VUELO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td><td>$reg[3]</td></tr> \n";
        }
        $link->close();
    }

}