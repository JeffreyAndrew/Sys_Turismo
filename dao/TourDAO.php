<?php

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
class TourDTO {
    //put your code here
    function create($id,$nombre) {
        include "../config/Conexion.php";
        $sql = "INSERT INTO tour(TOUR_ID,LUG_ID)VALUES( '".$id."','".$lugId."')";
        if ($link->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }

    function readall() {
        include '../config/Conexion.php';
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
        include "../config/Conexion.php";
        $sql = "DELETE FROM tour"
                . " WHERE TOUR_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function update($id,$nombre){
        include "../config/Conexion.php";
        $sql = "UPDATE tour"
                . " SET LUG_ID='".$nombre."'"
                . " WHERE TOUR_ID='".$id."'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }

        $link->close();
    }
    function searchById($id) {
        include '../config/Conexion.php';
        $sql = "SELECT TOUR_ID,LUG_ID FROM tour order by TOUR_ID "
                . "WHERE TOUR_ID='".$id."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID</td><td>LUGAR ID</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
    function searchByName($nombre) {
        include '../config/Conexion.php';
        $sql = "SELECT TOUR_ID,LUG_ID FROM tour order by TOUR_ID "
                . "WHERE LUG_ID='".$nombre."'";
        $result = $link->query($sql);
        echo "<table border = '1'> \n";
        echo "<tr><td>ID</td><td>LUGAR ID</td></tr> \n";
        while ($reg = mysqli_fetch_array($result)) {
            echo "<tr><td>$reg[0]</td><td>$reg[1]</td></tr> \n";
        }
        $link->close();
    }
}
