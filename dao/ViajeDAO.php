<?php
include './dto/ViajeDTO.php';
include './interfaces/ViajeInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViajeDAO
 *
 * @author CESAR
 */
class ViajeDAO implements ViajeInterface{
    //put your code here
    function create(Viaje $v) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO viaje(VIA_ID,CIU_ID_D,CIU_ID_O,BUS_ID)VALUES( 'NULL','".$v->getCIU_ID_D()."','".$v->getCIU_ID_O()."','".$v->getBUS_ID()."')";
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
        $sql = "SELECT VIA_ID,CIU_ID_D,CIU_ID_O,BUS_ID FROM viaje ORDER BY VIA_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $a=new Viaje();
            $a->setVIA_ID($reg[0]);
            $a->setCIU_ID_D($reg[1]);
            $a->setCIU_ID_O($reg[2]);
            $a->setBUS_ID($reg[3]);
            $lista[]=$a;
        }
        $link->close();
        return $lista;
    }
    
    function delete($key) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM viaje"
                . " WHERE VIA_ID='".$key."'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }
    function update(Viaje $a){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE viaje"
                . " SET CIU_ID_D='".$a->getCIU_ID_D()."',CIU_ID_O='".$a->getCIU_ID_O()."',BUS_ID='".$a->getBUS_ID()."'"
                . " WHERE VIA_ID='".$a->getVIA_ID()."'";
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
        $sql = "SELECT VIA_ID,CIU_ID_D,CIU_ID_O,BUS_ID FROM viaje order by VIA_ID "
                . "WHERE VIA_ID='".$key."'";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $a=new Viaje();
            $a->setVIA_ID($reg[0]);
            $a->setCIU_ID_D($reg[1]);
            $a->setCIU_ID_O($reg[2]);
            $a->setBUS_ID($reg[3]);
            $lista[]=$a;
        }
        $link->close();
        return $lista;
    }
}
