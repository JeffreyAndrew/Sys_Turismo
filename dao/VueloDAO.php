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
        $sql = "CALL PR_INSERT_VUE('" . $vuelo->getAVI_ID() . "','" . $vuelo->getCIU_ID_D() . "','" . $vuelo->getCIU_ID_O() . "','" 
                . $vuelo->getVUE_FECH() . "')";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }

    function readall() {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "SELECT VUE_ID,AVI_ID,CIU_ID_D,CIU_ID_O,VUE_FECH FROM vuelo order by VUE_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $vuelo = new Vuelo();
            $vuelo->setVUE_ID($reg[0]);
            $vuelo->setAVI_ID($reg[1]);
            $vuelo->setCIU_ID_D($reg[2]);
            $vuelo->setCIU_ID_O($reg[3]);
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
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }

    function update(Vuelo $v) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE vuelo"
                . " SET AVI_ID='" . $v->getAVI_ID() . "',VUE_FECH='" . $v->getVUE_FECH() . "',CIU_ID_D='" . $v->getCIU_ID_D() . "',CIU_ID_O='" . $v->getCIU_ID_O() . "'"
                . " WHERE VUE_ID='" . $v->getVUE_ID() . "'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }

    public function read($key) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "SELECT VUE_ID,AVI_ID,CIU_ID_D,CIU_ID_O,VUE_FECH FROM vuelo order by VUE_ID "
                . "WHERE VUE_ID='" . $key . "'";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $vuelo = new Vuelo();
            $vuelo->setVUE_ID($reg[0]);
            $vuelo->setAVI_ID($reg[1]);
            $vuelo->setCIU_ID_D($reg[2]);
            $vuelo->setCIU_ID_O($reg[3]);
            $vuelo->setVUE_FECH($reg[4]);
            $lista[]=$vuelo;
        }
        $link->close();
        return $lista;
    }

}
