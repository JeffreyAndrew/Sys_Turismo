<?php
include './config/Conexion.php';
include './dto/AvionDTO.php';
include './interfaces/AvionInterface.php';
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
class AvionDAO implements AvionInterface{
    //put your code here
    function create(AVION $a) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO avion(AVI_ID,AVI_MOD,AVI_CAP,AER_ID)VALUES( 'NULL','".$a->getAVI_MOD()."','".$a->getAVI_CAP()."','".$a->getAER_ID()."')";
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
        $sql = "SELECT AVI_ID,AVI_MOD,AVI_CAP,AER_ID FROM avion ORDER BY AVI_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $a=new AVION();
            $a->setAVI_ID($reg[0]);
            $a->setAVI_MOD($reg[1]);
            $a->setAVI_CAP($reg[2]);
            $a->setAER_ID($reg[3]);
            $lista[]=$a;
        }
        $link->close();
        return $lista;
    }
    
    function delete($key) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM avion"
                . " WHERE AVI_ID='".$key."'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }
    function update(AVION $a){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE avion"
                . " SET AER_ID='".$a->getAER_ID()."',AVI_MOD='".$a->getAVI_MOD()."',AVI_CAP='".$a->getAVI_CAP()."'"
                . " WHERE AVI_ID='".$a->getAVI_ID()."'";
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
        $sql = "SELECT AVI_ID,AVI_MOD,AVI_CAP,AER_ID FROM avion order by AVI_ID "
                . "WHERE AVI_ID='".$key."'";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $a=new AVION();
            $a->setAVI_ID($reg[0]);
            $a->setAVI_MOD($reg[1]);
            $a->setAVI_CAP($reg[2]);
            $a->setAER_ID($reg[3]);
            $lista[]=$a;
        }
        $link->close();
        return $lista;
    }

}
//$hola=new AvionDAO();
//$hola->create(1, "AXT800", "150", 1);
//$hola->readall();