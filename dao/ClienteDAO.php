<?php
include './dto/ClienteDTO.php';
include './interfaces/ClienteInterface.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteDAO
 *
 * @author CESAR
 */
class ClienteDAO implements ClienteInterface{
    //put your code here
    function create(CLIENTE $c) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "CALL PR_INSERT_CLI('".$c->getCLI_NOM()."','".$c->getCLI_APP()."','".$c->getCLI_APM()."','".$c->getCLI_DNI()."','".$c->getCLI_TIP()."')";
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
        $sql = "SELECT CLI_ID,CLI_NOM,CLI_APP,CLI_APM,CLI_DNI,CLI_TIP FROM cliente order by CLI_ID";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $c=new CLIENTE();
            $c->setCLI_ID($reg[0]);
            $c->setCLI_NOM($reg[1]);
            $c->setCLI_APP($reg[2]);
            $c->setCLI_APM($reg[3]);
            $c->setCLI_DNI($reg[4]);
            $c->setCLI_TIP($reg[5]);
            $lista[]=$c;
        }
        $link->close();
        return $lista;
    }
    
    function delete($key) {
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "DELETE FROM cliente"
                . " WHERE CLI_ID='".$key."'";
        if ($link->query($sql) === TRUE) {
            $r=1;
        } else {
            echo "Error: " . $sql . "<br>" . $link->error;
        }
        $link->close();
        return $r;
    }
    function update(CLIENTE $c){
        $link1 = new Conexion();
        $link = $link1->getConnection();
        $sql = "UPDATE cliente"
                . " SET CLI_NOM='".$c->getCLI_NOM()."',CLI_APP='".$c->getCLI_APP()."',CLI_APM='".$c->getCLI_APM()."',CLI_DNI='".$c->getCLI_DNI()."',CLI_TIP='".$c->getCLI_TIP()."'"
                . " WHERE CLI_ID='".$c->getCLI_ID()."'";
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
        $sql = "SELECT CLI_ID,CLI_NOM,CLI_APP,CLI_APM,CLI_DNI,CLI_TIP FROM cliente order by CLI_ID "
                . "WHERE CLI_ID='".$key."'";
        $result = $link->query($sql);
        $lista=array();
        while ($reg = mysqli_fetch_array($result)) {
            $c=new CLIENTE();
            $c->setCLI_ID($reg[0]);
            $c->setCLI_NOM($reg[1]);
            $c->setCLI_APP($reg[2]);
            $c->setCLI_APM($reg[3]);
            $c->setCLI_DNI($reg[4]);
            $c->setCLI_TIP($reg[5]);
            $lista[]=$c;
        }
        $link->close();
        return $lista;
    }

}
//$hola=new ClienteDAO();
//$c=new CLIENTE();
//$c->setCLI_NOM("Juan");
//$hola->create($c);
//$a=Array();
//$a=$hola->readall();
//echo $a[0]->getCLI_NOM();
//echo $hola->delete(1);
