<?php
include './dto/VueloDTO.php';
include './interfaces/VueloInterface.php';
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
class VueloDAO implements VueloInterface{

    //put your code here
    function create(Vuelo $vuelo) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
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
        $link1 = new Conexion();
        $link = $link1->getConnection();
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
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM vuelo"
                . " WHERE VUE_ID='" . $id . "'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function update(Vuelo $v) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE vuelo"
                . " SET AVI_ID='" . $v->getAVI_ID() . "',VUE_FECH='" . $v->getVUE_FECH() . "',CIU_ID_D='" . $v->getCIU_ID_D() . "',CIU_ID_O='" . $v->getCIU_ID_O() . "'"
                . " WHERE VUE_ID='" . $v->getVUE_ID() . "'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    public function read($key) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "SELECT AVI_ID,AER_ID,LUG_ID,VUE_FECH FROM vuelo order by VUE_ID "
                . "WHERE VUE_ID='" . $key . "'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID AVION</td><td>ID AIRLINE</td><td>ID LUGAR</td><td>FECHA VUELO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td><td>$reg[3]</td></tr> \n";
        }
        $link->close();
    }

}
