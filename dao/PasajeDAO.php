<?php

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
class PasajeDAO implements operaciones{
    //put your code here
    function create(PASAJE $p) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO pasaje(PAS_ID,CLI_ID,PAS_COD)VALUES( '".$p->getPAS_ID()."','".$p->getCLI_ID()."','".$p->getPAS_COD()."')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function readall() {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "SELECT * FROM pasaje order by PAS_ID";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID</td><td>Nombre</td><td>CÓDIGO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td></tr> \n";
        }
        $link->close();
    }
    
    function delete($id) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM pasaje"
                . " WHERE PAS_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function update(PASAJE $p){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE pasaje"
                . " SET PAS_COD='".$p->getPAS_COD()."',CLI_ID='".$p->getCLI_ID()."'"
                . " WHERE PAS_ID='".$p->getPAS_ID()."'";
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
        $sql = "SELECT * FROM pasaje order by PAS_ID "
                . "WHERE PAS_ID='".$key."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID</td><td>Nombre</td><td>CÓDIGO</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td><td>$reg[2]</td></tr> \n";
        }
        $link->close();
    }

}
