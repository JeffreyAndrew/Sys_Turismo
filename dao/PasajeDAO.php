<?php
include './dto/PasajeDTO.php';
include './interfaces/PasajeInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PasajeDTO
 *
 * @author CESAR
 */
class PasajeDAO implements PasajeInterface{
    //put your code here
    function create(PASAJE $p) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO pasaje(PAS_ID,PAS_FECH,PAS_COD,PAS_TERR_ID,PAS_AER_ID)VALUES( 'NULL','".$p->getPAS_FECH()."','".$p->getPAS_COD()."','".$p->getPAS_TERR_ID()."','".$p->getPAS_AER_ID()."')";
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
        $sql = "SELECT PAS_ID,PAS_FECH,PAS_COD,PAS_TERR_ID,PAS_AER_ID FROM pasaje order by PAS_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $p=new PASAJE();
            $p->setPAS_ID($reg[0]);
            $p->setPAS_FECH($reg[1]);
            $p->setPAS_COD($reg[2]);
            $p->setPAS_TERR_ID($reg[3]);
            $p->setPAS_AER_ID($reg[4]);
            $lista[]=$p;
        }
        $link->close();
        return $lista;
    }
    
    function delete($id) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM pasaje"
                . " WHERE PAS_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }
    function update(PASAJE $p){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE pasaje"
                . " SET PAS_FECH='".$p->getPAS_FECH()."',PAS_COD='".$p->getPAS_COD()."',PAS_TERR_ID='".$p->getPAS_TERR_ID()."',PAS_AER_ID='".$p->getPAS_AER_ID()."'"
                . " WHERE PAS_ID='".$p->getPAS_ID()."'";
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
        $sql = "SELECT PAS_ID,PAS_FECH,PAS_COD,PAS_TERR_ID,PAS_AER_ID FROM pasaje order by PAS_ID "
                . "WHERE PAS_ID='".$key."'";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $p=new PASAJE();
            $p->setPAS_ID($reg[0]);
            $p->setPAS_FECH($reg[1]);
            $p->setPAS_COD($reg[2]);
            $p->setPAS_TERR_ID($reg[3]);
            $p->setPAS_AER_ID($reg[4]);
            $lista[]=$p;
        }
        $link->close();
        return $lista;
    }

}
