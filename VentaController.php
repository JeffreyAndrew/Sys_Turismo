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
    $cli = new ClienteDAO();
    $op = $_GET['op'];
    $c = new CLIENTE();
    switch ($op) {
        case 1:
            $aO = new CiudadDAO();
            $lista = $aO->readall();
            session_start();
            ob_start();
            $_SESSION['lista'] = $lista;
            header('location: BuscarVuelo.php');
            break;
        case 2:
            $origen = $_GET['origen'];
            $destino = $_GET['destino'];
            $fechaTI = $_GET['rutai'];
            $fechaTV = $_GET['rutaii'];
            $fechaI = $_GET['rutai_submit'];
            $fechaV = $_GET['rutaii_submit'];
            $vueloI = new Vuelo();
            $vueloI->setCIU_ID_O($origen);
            $vueloI->setCIU_ID_D($destino);
            $vueloI->setVUE_FECH($fechaI);
            $v = new VueloDAO();
            $c = new CiudadDAO();
            $avi = new AvionDAO();
            $lista3 = Array();
            $lista = $v->read($vueloI);
            for ($i = 0; $i < count($lista); $i++) {
                $lista4 = $avi->read($lista[$i]->getAVI_ID());
                $lista3[] = $lista4;
            }
            $lista1[] = $c->read($origen);
            $lista1[] = $c->read($destino);
            session_start();
            ob_start();
            $_SESSION['lista'] = $lista;
            $_SESSION['lista1'] = $lista1;
            $_SESSION['lista2'] = $lista2;
            $_SESSION['lista3'] = $lista3;
            $_SESSION['eleccion'] = "Ida " . $fechaTI . ": " . $lista1[0][0]->getCIU_NOM() . "/" . $lista1[1][0]->getCIU_NOM() . "";
            if ($fechaTV != "") {
                $vueloD = new Vuelo();
                $vueloD->setCIU_ID_O($destino);
                $vueloD->setCIU_ID_D($origen);
                $vueloD->setVUE_FECH($fechaV);
                $lista2 = $v->read($vueloD);
                for ($i = 0; $i < count($lista2); $i++) {
                    $lista4 = $avi->read($lista[$i]->getAVI_ID());
                    $lista5[] = $lista4;
                }
                $_SESSION['lista5'] = $lista5;
                $_SESSION['eleccion2'] = "Vuelta " . $fechaTV . ": " . $lista1[1][0]->getCIU_NOM() . "/" . $lista1[0][0]->getCIU_NOM() . "";
            }
            header('location: SeleccionaVuelo.php');
            break;
        case 3:
            $id = $_GET['group1'];
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $tipo = $_GET['tipo'];
            $address = $_GET['direccion'];
            $email = $_GET['email'];
            $telefono = $_GET['telefono'];
            $dni = $_GET['dni'];
            $c->setCLI_NOM($nombre);
            $c->setCLI_APP($apellido);
            $c->setCLI_DNI($dni);
            $c->setCLI_TIP($tipo);
            header('location: RegistroCliente.php');
            break;
        case 4:
            header('location: PrecioItenerario.php');
            break;
        case 5:
            header('location: SeleccionaPago.php');
            break;
        case 6:
            header('location: Confirmacion.php');
            break;
    }
}
