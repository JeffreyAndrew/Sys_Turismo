<?php
include './config/Conexion.php';
include './dto/AerolineaDTO.php';
include './interfaces/AerolineaInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AerolineaDAO
 *
 * @author CESAR
 */
class AerolineaDAO implements AerolineaInterface{

    //put your code here
    function create(AEROLINEA $objeto) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "CALL PR_INSERT_AER( '".$objeto->getAER_NOM()."')";
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
        $sql = "SELECT AER_ID,AER_NOM FROM aerolinea order by AER_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $a=new AEROLINEA();
            $a->setAER_ID($reg[0]);
            $a->setAER_NOM($reg[1]);
            $lista[]=$a;
        }
        $link->close();
        return $lista;
    }
    
    function delete($id) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM aerolinea"
                . " WHERE AER_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }
    function update(AEROLINEA $a){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE aerolinea"
                . " SET AER_NOM='".$a->getAER_NOM()."'"
                . " WHERE AER_ID='".$a->getAER_ID()."'";
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
        $sql = "SELECT AER_ID,AER_NOM FROM aerolinea order by AER_ID "
                . "WHERE AER_ID='".$key."'";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $a=new AEROLINEA();
            $a->setAER_ID($reg[0]);
            $a->setAER_NOM($reg[1]);
            $lista[]=$a;
        }
        $link->close();
        return $lista;
    }

}