<?php

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
class AvionDAO implements operaciones{
    //put your code here
    function create(AVION $a) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO avion(AVI_ID,AVI_MOD,AVI_CAP,AER_ID)VALUES( '".$a->getAVI_ID()."','".$a->getAVI_MOD()."','".$a->getAVI_CAP()."','".$a->getAER_ID()."')";
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
        $sql = "SELECT A.AVI_MOD,A.AVI_CAP,B.AER_NOM FROM avion A,aerolinea B "
                . "WHERE A.AER_ID=B.AER_ID "
                . "ORDER BY AVI_ID";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>MODELO</td><td>CAPACIDAD</td><td>AEROLINEA</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td></tr> \n";
        }
        $link->close();
    }
    
    function delete($id) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM avion"
                . " WHERE AVI_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function update($id,$aerId){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE avion"
                . " SET AER_ID='".$aerId."'"
                . " WHERE AVI_ID='".$id."'";
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
        $sql = "SELECT AVI_MOD,AVI_CAP FROM avion order by AVI_ID "
                . "WHERE AVI_ID='".$key."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>MODELO</td><td>CAPACIDAD</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }

}
//$hola=new AvionDAO();
//$hola->create(1, "AXT800", "150", 1);
//$hola->readall();