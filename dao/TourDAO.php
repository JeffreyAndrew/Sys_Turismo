<?php
include './config/Conexion.php';
include './dto/TourDTO.php';
include './interfaces/TourInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TourDTO
 *
 * @author CESAR
 */
class TourDAO implements TourInterface{
    //put your code here
    function create(TOUR $t) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "INSERT INTO tour(TOUR_ID,LUG_ID)VALUES( '".$t->getTOUR_ID()."','".$t->getLUG_ID()."')";
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
        $sql = "SELECT TOUR_ID,LUG_ID FROM tour order by TOUR_ID";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID</td><td>LUGAR ID</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
    
    function delete($id) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM tour"
                . " WHERE TOUR_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function update(TOUR $t){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE tour"
                . " SET LUG_ID='".$t->getLUG_ID()."'"
                . " WHERE TOUR_ID='".$t->getTOUR_ID()."'";
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
        $sql = "SELECT TOUR_ID,LUG_ID FROM tour order by TOUR_ID "
                . "WHERE TOUR_ID='".$key."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID</td><td>LUGAR ID</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }

}
