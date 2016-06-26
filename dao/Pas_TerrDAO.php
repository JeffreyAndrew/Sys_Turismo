<?php
include './config/Conexion.php';
include './dto/Pass_TerrDTO.php';
include './interfaces/Pass_TerrInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pas_TerrDTO
 *
 * @author CESAR
 */
class Pas_TerrDAO implements Pas_TerrInterface{
    //put your code here
    function create(Pas_Terr $p) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO pas_terr(PAS_TERR_ID,VIA_ID)VALUES( 'NULL','".$p->getVIA_ID()."')";
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
        $sql = "SELECT PAS_TERR_ID,VIA_ID FROM pas_terr order by PAS_TERR_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $p=new Pas_Terr();
            $p->setPAS_TERR_ID($reg[0]);
            $p->setVIA_ID($reg[1]);
            $lista[]=$p;
        }
        $link->close();
        return $lista;
    }
    
    function delete($id) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM pas_terr"
                . " WHERE PAS_TERR_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }
    function update(Pas_Terr $p){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE pas_terr"
                . " SET VIA_ID='".$p->getVIA_ID()."'"
                . " WHERE PAS_TERR_ID='".$p->getPAS_TERR_ID()."'";
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
        $sql = "SELECT PAS_TERR_ID,VIA_ID FROM pas_terr order by PAS_TERR_ID "
                . "WHERE PAS_AER_ID='".$key."'";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $p=new Pas_Terr();
            $p->setPAS_TERR_ID($reg[0]);
            $p->setVIA_ID($reg[1]);
            $lista[]=$p;
        }
        $link->close();
        return $lista;
    }
}
