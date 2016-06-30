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
                <div class="itinerario">
                    <h4>Selecciona tu Vuelo</h4>
                    <?php
                    session_start();
                    ob_start();
                    $list = $_SESSION['lista'];
                    $info = $_SESSION['eleccion'];
                    $list3 = $_SESSION['lista3'];
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
                                    <td>14:25<strong>(LIM)</strong></td>
                                    <td>15:45<strong>(CUZ)</strong></td>
                                    <td>01:20 hrs.</td>
                                    <td><a role="button" class="red btn-large btn-floating" value="<?= $v->getVUE_ID() ?>" ><i class="large material-icons">done</i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <br/><br/>
                    <p>Vuelta 15 de Julio: Cusco/Lima</p>
                    <form >
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
                                <tr>
                                    <td>Airbus 320</td>
                                    <td>14:25<strong>(LIM)</strong></td>
                                    <td>15:45<strong>(CUZ)</strong></td>
                                    <td>01:20 hrs.</td>
                                    <td><input name="group1" class="with-gap" type="radio" id="a"><label for="a"></label></td>
                                </tr>
                                <tr>
                                    <td>Airbus 320</td>
                                    <td>14:25<strong>(LIM)</strong></td>
                                    <td>15:45<strong>(CUZ)</strong></td>
                                    <td>01:20 hrs.</td>
                                    <td><input name="group1" class="with-gap" type="radio" id="b"><label for="b"></label></td>
                                </tr>
                                <tr>
                                    <td>Airbus 320</td>
                                    <td>14:25<strong>(LIM)</strong></td>
                                    <td>15:45<strong>(CUZ)</strong></td>
                                    <td>01:20 hrs.</td>
                                    <td><input name="group1" class="with-gap" type="radio" id="c"><label for="c"></label></td>
                                </tr>
                            </tbody>                       
                        </table>
                    </form>
                </div>
                <div class="itinerario">
                    <table class="table-responsive striped">
                        <thead>
                            <tr>
                                <th>Tarifa:</th>
                                <th>Tasas y/o Impuestos</th>
                                <th>Tarifa:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$442</td>
                                <td>$94.49</td>
                                <td>$536.49 por pasajero</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
