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
                . $vuelo->getVUE_FECH() . ",'" . $vuelo->getVUE_PRICE_ECO() . "','" . $vuelo->getVUE_PRICE_EJE() . "','" . $vuelo->getVUE_PRICE_PRI() . "','" . $vuelo->getVUE_PRICE_TUR() . "','" . $vuelo->getVUE_PRICE_BUS() . "'')";
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
        $sql = "SELECT VUE_ID,AVI_ID,CIU_ID_D,CIU_ID_O,VUE_FECH,VUE_PRICE_ECO,VUE_PRICE_EJE,VUE_PRICE_PRI,VUE_PRICE_TUR,VUE_PRICE_BUS FROM vuelo order by VUE_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $vuelo = new Vuelo();
            $vuelo->setVUE_ID($reg[0]);
            $vuelo->setAVI_ID($reg[1]);
            $vuelo->setCIU_ID_D($reg[2]);
            $vuelo->setCIU_ID_O($reg[3]);
            $vuelo->setVUE_FECH($reg[4]);
            $vuelo->setVUE_PRICE_ECO($reg[5]);
            $vuelo->setVUE_PRICE_EJE($reg[6]);
            $vuelo->setVUE_PRICE_PRI($reg[7]);
            $vuelo->setVUE_PRICE_TUR($reg[8]);
            $vuelo->setVUE_PRICE_BUS($reg[9]);
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

    public function read(Vuelo $v) {
        $link1 = new Conexion();
        $link = $link1->getConnection();$sql = "SELECT VUE_ID,AVI_ID,CIU_ID_D,CIU_ID_O,VUE_FECH,VUE_PRICE_ECO,VUE_PRICE_EJE,VUE_PRICE_PRI,VUE_PRICE_TUR,VUE_PRICE_BUS FROM vuelo "
                . "WHERE CIU_ID_O='" . $v->getCIU_ID_O() . "' "
                . "AND CIU_ID_D='".$v->getCIU_ID_D()."' "
                . "AND VUE_FECH='".$v->getVUE_FECH()."'";
        $result = $link->query($sql);$lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $vuelo = new Vuelo();$vuelo->setVUE_ID($reg[0]);$vuelo->setAVI_ID($reg[1]);
            $vuelo->setCIU_ID_D($reg[2]);
            $vuelo->setCIU_ID_O($reg[3]);
            $vuelo->setVUE_FECH($reg[4]);
            $vuelo->setVUE_PRICE_ECO($reg[5]);
            $vuelo->setVUE_PRICE_EJE($reg[6]);
            $vuelo->setVUE_PRICE_PRI($reg[7]);
            $vuelo->setVUE_PRICE_TUR($reg[8]);
            $vuelo->setVUE_PRICE_BUS($reg[9]);
            $lista[]=$vuelo;
        }
        $link->close();
        return $lista;
    }
    public function readId($key) {
        $link1 = new Conexion();
        $link = $link1->getConnection();$sql = "SELECT VUE_ID,AVI_ID,CIU_ID_D,CIU_ID_O,VUE_FECH,VUE_PRICE_ECO,VUE_PRICE_EJE,VUE_PRICE_PRI,VUE_PRICE_TUR,VUE_PRICE_BUS FROM vuelo "
                . "WHERE VUE_ID='" . $key . "' ";
        $result = $link->query($sql);$lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $vuelo = new Vuelo();
            $vuelo->setVUE_ID($reg[0]);
            $vuelo->setAVI_ID($reg[1]);
            $vuelo->setCIU_ID_D($reg[2]);
            $vuelo->setCIU_ID_O($reg[3]);
            $vuelo->setVUE_FECH($reg[4]);
            $vuelo->setVUE_PRICE_ECO($reg[5]);
            $vuelo->setVUE_PRICE_EJE($reg[6]);
            $vuelo->setVUE_PRICE_PRI($reg[7]);
            $vuelo->setVUE_PRICE_TUR($reg[8]);
            $vuelo->setVUE_PRICE_BUS($reg[9]);
            $lista[]=$vuelo;
        }
        $link->close();
        return $lista;
    }
}
