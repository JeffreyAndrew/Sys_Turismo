<?php
require_once './dao/AerolineaDAO.php';
require_once './dao/AvionDAO.php';
require_once './dao/CiudadDAO.php';
require_once './dao/ClienteDAO.php';
require_once './dao/Pas_AerDAO.php';
require_once './dao/PasajeDAO.php';
require_once './dao/TourDAO.php';
require_once './dao/VentaDAO.php';
require_once './dao/VueloDAO.php';
if ($_GET) {
    $lista = Array();
    $op = $_GET['op'];
    switch ($op) {
        case 1:
            $aO = new CiudadDAO();
            $lista = $aO->readall();
            session_start();
            ob_start();
            $_SESSION['lista']=$lista;
            header('location: BuscarVuelo.php');
            break;
        case 2:
            $origen = $_GET['origen'];
            $destino = $_GET['destino'];
            $fechaT=$_GET['rutai'];
            $fechaI = $_GET['rutai_submit'];
            $fechaV = $_GET['rutaii_submit'];
            $vuelo = new Vuelo();
            $vuelo->setCIU_ID_O($origen);
            $vuelo->setCIU_ID_D($destino);
            $vuelo->setVUE_FECH($fechaI);
            $v = new VueloDAO();
            $c=new CiudadDAO();
            $avi=new AvionDAO();
            $lista3=Array();
            $lista = $v->read($vuelo);
            for($i=0;$i<count($lista);$i++){
                $lista4=Array();
                $lista4=$avi->read($lista[$i]->getAVI_ID());
                $lista3[]=$lista4;
            }
            $lista1=$c->read($origen);
            $lista2=$c->read($destino);
            session_start();
            ob_start();
            $_SESSION['lista']=$lista;
            $_SESSION['lista3']=$lista3;
            $_SESSION['eleccion']="Ida ".$fechaT.": ".$lista1[0]->getCIU_NOM()."/".$lista2[0]->getCIU_NOM()."";
            header('location: SeleccionaVuelo.php');
            break;
    }
}
