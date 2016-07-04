<?php
include './dao/AerolineaDAO.php';
include './dao/AvionDAO.php';
include './dao/CiudadDAO.php';
include './dao/ClienteDAO.php';
include './dao/Pas_AerDAO.php';
include './dao/PasajeDAO.php';
include './dao/TourDAO.php';
include './dao/VentaDAO.php';
include './dao/VueloDAO.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Seleccionar Vuelo</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Web Pages/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="Web Pages/css/materialize.css" rel="stylesheet" type="text/css"/>
        <script src="Web Pages/js/materialize.min.js" type="text/javascript"></script>
        <link href="Web Pages/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="caja3" class="row">
            <center>
                <h1 style="color: #26A69A">¡Selecciona tus Vuelos!</h1>
            </center>
            <center>
                <form method="get" action="VentaController.php">
                    <input type="hidden" name="op" value="3" />
                    <div class="itinerario">
                        <h4>Selecciona tu Vuelo</h4>
                        <?php
                        session_start();
                        ob_start();
                        $list = $_SESSION['lista'];
                        $list1 = $_SESSION['lista1'];
                        $list2=$_SESSION['lista2'];
                        $info = $_SESSION['eleccion'];
                        $info2= $_SESSION['eleccion2'];
                        $list3 = $_SESSION['lista3'];
                        $list5=$_SESSION['lista5'];
                        ?>
                        <p><?= $info ?></p>
                        <table class="table-responsive striped">
                            <thead>
                                <tr>
                                    <th data-field="id">Vuelo</th>
                                    <th data-field="id">salida</th>
                                    <th data-field="id">Llegada</th>
                                    <th data-field="id">Duración</th>
                                    <th data-field="id">Seleccion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($list); $i++) {
                                    $v = new Vuelo();
                                    $a = new AVION();
                                    $list4 = Array();
                                    $v = $list[$i];
                                    $a = $list3[$i][0];
                                    ?>
                                    <tr>
                                        <td><?= $a->getAVI_MOD() ?></td>
                                        <td>14:25<strong>(<?=$list1[0][0]->getCIU_ABR()?>)</strong></td>
                                        <td>15:45<strong>(<?=$list1[1][0]->getCIU_ABR()?>)</strong></td>
                                        <td>01:20 hrs.</td>
                                        <td><input name="group1" class="with-gap" type="radio" id="a<?= $v->getVUE_ID() ?>" value="<?= $v->getVUE_ID() ?>"><label for="a<?= $v->getVUE_ID() ?>"></label></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br/><br/>
                        <p><?= $info2 ?></p>
                        <table class="table-responsive striped">
                            <thead>
                                <tr>
                                    <th data-field="id">Vuelos</th>
                                    <th data-field="id">salida</th>
                                    <th data-field="id">Llegada</th>
                                    <th data-field="id">Duración</th>
                                    <th data-field="id">Seleccion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($list2); $i++) {
                                    $v = new Vuelo();
                                    $a = new AVION();
                                    $list4 = Array();
                                    $v = $list2[$i];
                                    $a = $list5[$i][0];
                                    ?>
                                    <tr>
                                        <td><?= $a->getAVI_MOD() ?></td>
                                        <td>14:25<strong>(<?=$list1[1][0]->getCIU_ABR()?>)</strong></td>
                                        <td>15:45<strong>(<?=$list1[0][0]->getCIU_ABR()?>)</strong></td>
                                        <td>01:20 hrs.</td>
                                        <td><input name="group2" class="with-gap" type="radio" id="a<?= $v->getVUE_ID() ?><?= $v->getVUE_ID() ?>" value="<?= $v->getVUE_ID() ?>"><label for="a<?= $v->getVUE_ID() ?><?= $v->getVUE_ID() ?>"></label></td>
                                    </tr>
                                <?php } ?>
                            </tbody>                       
                        </table>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit">Registrar
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </center>            
        </div>
        <!--scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="Web Pages/js/materialize.min.js" type="text/javascript"></script>
        <script>
            $('.calendar').pickadate({
                monthsFull: ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'],
                monthsShort: ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic'],
                weekdaysFull: ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'],
                weekdaysShort: ['dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb'],
                today: 'hoy',
                clear: 'borrar',
                close: 'cerrar',
                firstDay: 1,
                format: 'dddd d !de mmmm !de yyyy',
                formatSubmit: 'yyyy/mm/dd',
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year
                min: true
            });
            $('.datepicker2').pickadate({
                monthsFull: ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'],
                monthsShort: ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic'],
                weekdaysFull: ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'],
                weekdaysShort: ['dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb'],
                today: 'hoy',
                clear: 'borrar',
                close: 'cerrar',
                firstDay: 1,
                format: 'dddd d !de mmmm !de yyyy',
                formatSubmit: 'yyyy-mm-dd',
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year
                min: true
            });
            $('.datepicker').pickadate({
                monthsFull: ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'],
                monthsShort: ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic'],
                weekdaysFull: ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'],
                weekdaysShort: ['dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb'],
                today: 'hoy',
                clear: 'borrar',
                close: 'cerrar',
                firstDay: 1,
                format: 'dddd d !de mmmm !de yyyy',
                formatSubmit: 'yyyy-mm-dd',
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year
                min: true
            });
        </script>   
        <script>
            $(document).ready(function () {
                $('select').material_select();
            });
        </script>
        <script src="Web Pages/js/util.js" type="text/javascript"></script>
    </body>
</html>
