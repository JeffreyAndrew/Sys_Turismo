<?php
include './dto/Pas_AerDTO.php';
include './interfaces/Pas_AerInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pas_AerDTO
 *
 * @author CESAR
 */
class Pas_AerDAO implements Pas_AerInterface{
    //put your code here
    function create(Pas_Aer $p) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO pas_aer(PAS_AER_ID,VUE_ID)VALUES( 'NULL','".$p->getVUE_ID()."')";
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
        $sql = "SELECT PAS_AER_ID,VUE_ID FROM pas_aer order by PAS_AER_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $p=new Pas_Aer();
            $p->setPAS_AER_ID($reg[0]);
            $p->setVUE_ID($reg[1]);
            $lista[]=$p;
        }
        $link->close();
        return $lista;
    }
    
    function delete($id) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM pas_aer"
                . " WHERE PAS_AER_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }
    function update(Pas_Aer $p){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE pas_aer"
                . " SET VUE_ID='".$p->getVUE_ID()."'"
                . " WHERE PAS_AER_ID='".$p->getPAS_AER_ID()."'";
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
        $sql = "SELECT PAS_AER_ID,VUE_ID FROM pas_aer order by PAS_AER_ID "
                . "WHERE PAS_AER_ID='".$key."'";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $p=new Pas_Aer();
            $p->setPAS_AER_ID($reg[0]);
            $p->setVUE_ID($reg[1]);
            $lista[]=$p;
        }
        $link->close();
        return $lista;
    }
}
