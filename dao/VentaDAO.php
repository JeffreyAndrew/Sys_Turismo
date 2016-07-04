<?php
include './dto/VentaDTO.php';
include './interfaces/VentaInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VentaDAO
 *
 * @author CESAR
 */
class VentaDAO implements VentaInterface{
    //put your code here
    function create(Venta $v) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "CALL PR_INSERT_VEN('".$v->getCLI_ID()."',NULL,'".$v->getPAS_ID()."')";
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
        $sql = "SELECT VEN_ID,CLI_ID,TOUR_ID,PAS_ID FROM venta ORDER BY VEN_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $a=new Venta();
            $a->setVEN_ID($reg[0]);
            $a->setCLI_ID($reg[1]);
            $a->setTOUR_ID($reg[2]);
            $a->setPAS_ID($reg[3]);
            $lista[]=$a;
        }
        $link->close();
        return $lista;
    }
    
    function delete($key) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM venta"
                . " WHERE VEN_ID='".$key."'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }
    function update(Venta $a){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE venta"
                . " SET CLI_ID='".$a->getCLI_ID()."',TOUR_ID='".$a->getTOUR_ID()."',PAS_ID='".$a->getPAS_ID()."'"
                . " WHERE VEN_ID='".$a->getVEN_ID()."'";
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
        $sql = "SELECT VEN_ID,CLI_ID,TOUR_ID,PAS_ID FROM venta order by VEN_ID "
                . "WHERE VEN_ID='".$key."'";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $a=new Venta();
            $a->setVEN_ID($reg[0]);
            $a->setCLI_ID($reg[1]);
            $a->setTOUR_ID($reg[2]);
            $a->setPAS_ID($reg[3]);
            $lista[]=$a;
        }
        $link->close();
        return $lista;
    }
}
