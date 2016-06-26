<?php

require_once './config/Conexion.php';
require_once './dto/LugarDTO.php';

class LugarDAO implements operaciones{

    //put your code here
    function create(LugarDTO $lugar) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO ciudad(CIU_ID,CIU_NOM)VALUES( '" . $lugar->getLUG_ID() . "','" . $lugar->getLUG_NOM() . "')";
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
        $sql = "SELECT CIU_ID,CIU_NOM FROM ciudad order by CIU_ID";
        $result = $link->query($sql);
        $lista = array();
        while ($reg = mysqli_fetch_array($result)) {
            $lugar = new LugarDTO();
            $lugar->setLUG_ID($reg[0]);
            $lugar->setLUG_NOM($reg[1]);
            $lista[] = $lugar;
        }
        $link->close();
        return $lista;
    }

    function delete($id) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM ciudad"
                . " WHERE CIU_ID='" . $id . "'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }

    function update(LugarDTO $l) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE ciudad"
                . " SET CIU_NOM='" . $l->getLUG_NOM() . "'"
                . " WHERE CIU_ID='" . $l->getLUG_ID() . "'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    public function read($key) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "SELECT LUG_NOM FROM ciudad "
                . "WHERE LUG_ID='" . $key . "'";
        $result = $link->query($sql);
        $lista = array();
        while ($reg = mysqli_fetch_array($result)) {
            $lugar = new LugarDTO();
            $lugar->setLUG_ID($reg[0]);
            $lugar->setLUG_NOM($reg[1]);
            $lista[] = $lugar;
        }
        $link->close();
        return $lista;
    }

}
?>