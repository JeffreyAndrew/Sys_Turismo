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
        <title>Precio Itenerario</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Web Pages/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="Web Pages/css/materialize.css" rel="stylesheet" type="text/css"/>
        <script src="Web Pages/js/materialize.min.js" type="text/javascript"></script>
        <link href="Web Pages/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row" id="carton">
            <center>
                <h1 style="color: #26A69A">Itinerario, Precio y Cabina</h1>
            </center>
            <form method="get" action="VentaController.php">
                <center>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">perm_identify</i>
                        <select name="tipo">
                            <option value="1">Economica</option>
                            <option value="2">Ejecutivo</option>
                            <option value="3">Privado</option>
                            <option value="4">Turista</option>
                            <option value="5">Business</option>
                        </select>
                        <label>Cabina</label>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php
                    session_start();
                    ob_start();
                    $list6 = $_SESSION['lista6'];
                    $list7 = $_SESSION['lista7'];
                    $list8 = $_SESSION['lista8'];
                    $list1 = $_SESSION['lista1'];
                    ?>
                </center>
                <center>
                    <input type="hidden" name="op" value="5" />
                    <input type="hidden" name="vue_id" value="<?=$list6[0]->getVUE_ID()?>" />
                    <div class="itinerario">
                        <h4>Itinerario</h4>  
                        <table class="responsive-table striped">
                            <thead>
                                <tr>
                                    <th data-field="id">Ida</th>
                                    <th data-field="id">Salida</th>
                                    <th data-field="id">Llegada</th>
                                    <th data-field="id">Vuelo</th>
                                    <th data-field="id">Equipaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $list8[0] ?></td>
                                    <td>04:50 <?= $list1[0][0]->getCIU_NOM() ?>(<?= $list1[0][0]->getCIU_ABR() ?>)</td>
                                    <td>06:10 <?= $list1[1][0]->getCIU_NOM() ?>(<?= $list1[1][0]->getCIU_ABR() ?>)</td>
                                    <td><?= $list7[0]->getAVI_MOD() ?></td>
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
                                    <th data-field="id">Equipaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $list8[1] ?></td>
                                    <td>14:45 <?= $list1[1][0]->getCIU_NOM() ?>(<?= $list1[1][0]->getCIU_ABR() ?>)</td>
                                    <td>16:10 <?= $list1[0][0]->getCIU_NOM() ?>(<?= $list1[0][0]->getCIU_ABR() ?>)</td>
                                    <td>LA2030</td>
                                    <td>Máximo 2 piezas de 23Kg en Total    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="itinerario">
                        <h4>Tarifa en dólares americanos</h4>
                        <table class="table-responsive bordered">
                            <thead>
                                <tr>
                                    <th data-field="id">Tarifa:</th>
                                    <th data-field="id">Tasas y/o Impuestos</th>
                                    <th data-field="id">Tarifa:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Económico $<?=$list6[0]->getVUE_PRICE_ECO()?></td>
                                    <td>$94.49</td>
                                    <td>$536.49 por pasajero</td>
                                </tr>
                                <tr>
                                    <td>Ejecutivo $<?=$list6[0]->getVUE_PRICE_EJE()?></td>
                                    <td>$94.49</td>
                                    <td>$536.49 por pasajero</td>
                                </tr>
                                <tr>
                                    <td>Privado $<?=$list6[0]->getVUE_PRICE_PRI()?></td>
                                    <td>$94.49</td>
                                    <td>$536.49 por pasajero</td>
                                </tr>
                                <tr>
                                    <td>Turista $<?=$list6[0]->getVUE_PRICE_TUR()?></td>
                                    <td>$94.49</td>
                                    <td>$536.49 por pasajero</td>
                                </tr>
                                <tr>
                                    <td>Business $<?=$list6[0]->getVUE_PRICE_BUS()?></td>
                                    <td>$94.49</td>
                                    <td>$536.49 por pasajero</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <center>
                            <button class="btn waves-effect waves-light" type="submit" onclick="inputs()" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button><br><br><br>
                        </center>
                    </div>
                </center>
            </form>
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
