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
            $lista8[] = $fechaTI;
            $fechaTV = $_GET['rutaii'];
            $lista8[] = $fechaTV;
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
            $_SESSION['lista3'] = $lista3;
            $_SESSION['lista8'] = $lista8;
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
                $_SESSION['lista2'] = $lista2;
                $_SESSION['lista5'] = $lista5;
                $_SESSION['eleccion2'] = "Vuelta " . $fechaTV . ": " . $lista1[1][0]->getCIU_NOM() . "/" . $lista1[0][0]->getCIU_NOM() . "";
            }
            header('location: SeleccionaVuelo.php');
            break;
        case 3:
            $id = $_GET['group1'];
            session_start();
            ob_start();
            $_SESSION['id'] = $id;
            header('location: RegistroCliente.php');
            break;
        case 4:
            $nombre = $_GET['nombre'];
            $app = $_GET['app'];
            $apm = $_GET['apm'];
            $tipo = $_GET['tipo'];
            $address = $_GET['direccion'];
            $email = $_GET['email'];
            $telefono = $_GET['telefono'];
            $dni = $_GET['dni'];
            $c->setCLI_NOM($nombre);
            $c->setCLI_APP($app);
            $c->setCLI_APM($apm);
            $c->setCLI_DNI($dni);
            $c->setCLI_TIP($tipo);
            session_start();
            ob_start();
            $id = $_SESSION['id'];
            $lista = $_SESSION['lista'];
            $_SESSION['c'] = $c;
            $v = new VueloDAO();
            $avi = new AvionDAO();
            $lista6 = $v->readId($id);
            $avi_id = $lista[0]->getAVI_ID();
            $lista7 = $avi->read($avi_id);
            $_SESSION['lista6'] = $lista6;
            $_SESSION['lista7'] = $lista7;
            header('location: PrecioItenerario.php');
            break;
        case 5:
            $tipo=$_GET['tipo'];
            $vue_id=$_GET['vue_id'];
            $v=new VueloDAO();
            $result=$v->readId($vue_id);
            $pas_aer=new Pas_Aer();
            $pas_aer->setVUE_ID($vue_id);
            if($tipo==1){
                $tip="Económico";
            }if($tipo==2){
                $tip="Ejecutivo";
            }if($tipo==3){
                $tip="Privado";
            }if($tipo==4){
                $tip="Turista";
            }if($tipo==5){
                $tip="Business";
            }
            session_start();
            ob_start();
            $_SESSION['result']=$result;
            $pas_aer->setPAS_AER_TIP($tip);
            $_SESSION['pas_aer']=$pas_aer;
            header('location: SeleccionaPago.php');
            break;
        case 6:
            header('location: Confirmacion.php');
            break;
        case 7:
            session_start();
            ob_start();
            $c=$_SESSION['c'];
            $cli=new ClienteDAO();
            $cli->create($c);
            $listac=$cli->readDni($c->getCLI_DNI());
            $pas_aer=$_SESSION['pas_aer'];
            $pas_aer->setCLI_ID($listac[0]->getCLI_ID());
            $aer=new Pas_AerDAO();
            $aer->create($pas_aer);
            $listap=$aer->readByDni($pas_aer);
            $p=new PASAJE();
            $pas=new PasajeDAO();
            $p->setPAS_AER_ID($listap[0]->getPAS_AER_ID());
            $lista=$_SESSION['lista'];
            $p->setPAS_FECH($lista[0]->getVUE_FECH());
            $pas->create($p);
            $listapas=$pas->read2($p);
            $venta=new Venta();
            $venta->setCLI_ID($listap[0]->getCLI_ID());
            $venta->setPAS_ID($listapas[0]->getPAS_ID());
            $ven=new VentaDAO();
            $ven->create($venta);
            header('location: index.php');
            break;
        case 8:
            header('location: index.php');
            break;
    }
}
