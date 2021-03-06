<?php
require_once './dto/CiudadDTO.php';
require_once './interfaces/CiudadInterface.php';

class CiudadDAO implements CiudadInterface{

    //put your code here
    function create(Ciudad $c) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "CALL PR_INSERT_CIU( '" . $c->getCIU_NOM() . "','" . $c->getCIU_ABR() . "')";
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
        $sql = "SELECT CIU_ID,CIU_NOM,CIU_ABR FROM ciudad ORDER BY CIU_ID";
        $result = $link->query($sql);
        $lista = array();
        while ($reg = mysqli_fetch_array($result)) {
            $lugar = new Ciudad();
            $lugar->setCIU_ID($reg[0]);
            $lugar->setCIU_NOM($reg[1]);
            $lugar->setCIU_ABR($reg[2]);
            $lista[] = $lugar;
        }
        $link->close();
        return $lista;
    }

    function delete($key) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM ciudad"
                . " WHERE CIU_ID='" . $key . "'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }

    function update(Ciudad $c) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE ciudad"
                . " SET CIU_NOM='" . $c->getCIU_NOM() . "', "
                . "CIU_ABR='" . $c->getCIU_ABR() . "'"
                . " WHERE CIU_ID='" . $c->getCIU_ID() . "'";
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
        $sql = "SELECT CIU_ID,CIU_NOM,CIU_ABR FROM ciudad "
                . "WHERE CIU_ID='" . $key . "'";
        $result = $link->query($sql);
        $lista = array();
        while ($reg = mysqli_fetch_array($result)) {
            $c = new Ciudad();
            $c->setCIU_ID($reg[0]);
            $c->setCIU_NOM($reg[1]);
            $c->setCIU_ABR($reg[2]);
            $lista[] = $c;
        }
        $link->close();
        return $lista;
    }

}
?>