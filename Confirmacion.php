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
<html>
    <head>
        <meta charset="UTF-8">
        <title>Confirmacion</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Web Pages/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="Web Pages/css/materialize.css" rel="stylesheet" type="text/css"/>
        <script src="Web Pages/js/materialize.min.js" type="text/javascript"></script>
        <link href="Web Pages/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row" id="carton">
            <center>
                <h1 style="color: #26A69A">Confirma tus Datos</h1>
            </center>  
            <center>
                <div class="itinerario">
                    <h4>Itinerario</h4>
                    <?php
                        session_start();
                        ob_start();
                        $list6 = $_SESSION['lista6'];
                        $list7 = $_SESSION['lista7'];
                        $list8 = $_SESSION['lista8'];
                        $list1 = $_SESSION['lista1'];
                        $pas_aer = $_SESSION['pas_aer'];
                        $c = $_SESSION['c'];
                    ?>
                    <table class="responsive-table striped">
                        <thead>
                            <tr>
                                <th data-field="id">Ida</th>
                                <th data-field="id">Salida</th>
                                <th data-field="id">Llegada</th>
                                <th data-field="id">Vuelo</th>
                                <th data-field="id">Cabina</th>
                                <th data-field="id">Equipaje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $list8[0] ?></td>
                                <td>04:50 <?= $list1[0][0]->getCIU_NOM() ?>(<?= $list1[0][0]->getCIU_ABR() ?>)</td>
                                <td>06:10 <?= $list1[1][0]->getCIU_NOM() ?>(<?= $list1[0][0]->getCIU_ABR() ?>)</td>
                                <td><?= $list7[0]->getAVI_MOD() ?></td>
                                <td><?= $pas_aer->getPAS_AER_TIP() ?></td>
                                <td>Máximo 2 piezas de 23Kg en Total    </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="responsive-table striped">
                        <thead>
                            <tr>
                                <th data-field="id">Vuelta</th>
                                <th data-field="id">Salida</th>
                                <th data-field="id">Llegada</th>
                                <th data-field="id">Vuelo</th>
                                <th data-field="id">Cabina</th>
                                <th data-field="id">Equipaje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $list8[1] ?></td>
                                <td>14:45 <?= $list1[1][0]->getCIU_NOM() ?>(<?= $list1[1][0]->getCIU_ABR() ?>)</td>
                                <td>16:10 <?= $list1[0][0]->getCIU_NOM() ?>(<?= $list1[0][0]->getCIU_ABR() ?>)</td>
                                <td>LA2030</td>
                                <td><?= $pas_aer->getPAS_AER_TIP() ?></td>
                                <td>Máximo 2 piezas de 23Kg en Total    </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="itinerario">
                    <center>
                        <h4>Pasajero</h4>
                    </center>
                    <table class="responsive-table striped">
                        <thead>
                            <tr>
                                <th data-field="id">Tipo</th>
                                <th data-field="id">Nombre</th>
                                <th data-field="id">Apellidos</th>
                                <th data-field="id">DNI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $c->getCLI_TIP() ?></td>
                                <td><?= $c->getCLI_NOM() ?></td>
                                <td><?= $c->getCLI_APP() . " " . $c->getCLI_APM() ?></td>
                                <td><?= $c->getCLI_DNI() ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </center>
            <form method="get" action="VentaController.php" id="finalform">
                <input type="hidden" name="op" value="7">
                <center>
                    <button class="btn waves-effect waves-light" id="hola" name="action">Confirmar
                        <i class="material-icons right">send</i>
                    </button><br><br><br>
                </center>
                <div id="mensaje" class="modal-content" style="opacity:0;">
                    <h1>Compra Exitosa!!!!</h1>
                </div>
            </form>
            <form method="get" action="VentaController.php">
                <input type="hidden" name="op" value="8">
                <center>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Cancelar
                        <i class="material-icons right">send</i>
                    </button><br><br><br>
                </center>
            </form>
        </div>

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
