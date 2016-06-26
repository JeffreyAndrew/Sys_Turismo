<?php
include './config/Conexion.php';
include './dto/BusDTO.php';
include './interfaces/BusInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BusDAO
 *
 * @author CESAR
 */
class BusDAO implements BusInterface{
    //put your code here
    function create(BUS $b) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO bus(BUS_ID,BUS_MOD)VALUES( '".$b->getBUS_ID()."','".$b->getBUS_MOD()."')";
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
        $sql = "SELECT BUS_ID,BUS_MOD FROM bus order by BUS_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $b=new BUS();
            $b->setBUS_ID($reg[0]);
            $b->setBUS_MOD($reg[1]);
            $lista[]=$b;
        }
        $link->close();
        return $lista;
    }
    
    function delete($key) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM bus"
                . " WHERE BUS_ID='".$key."'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }
    function update(BUS $b){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE bus"
                . " SET BUS_MOD='".$b->getBUS_MOD()."'"
                . " WHERE BUS_ID='".$b->getBUS_ID()."'";
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
        $sql = "SELECT BUS_ID,BUS_MOD FROM bus order by BUS_ID "
                . "WHERE BUS_ID='".$key."'";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $b=new BUS();
            $b->setBUS_ID($reg[0]);
            $b->setBUS_MOD($reg[1]);
            $lista[]=$b;
        }
        $link->close();
        return $lista;
    }

}
