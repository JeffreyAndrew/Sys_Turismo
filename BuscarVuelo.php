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
        <title>Busca Vuelo</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Web Pages/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="Web Pages/css/materialize.css" rel="stylesheet" type="text/css"/>
        <script src="Web Pages/js/materialize.min.js" type="text/javascript"></script>
        <link href="Web Pages/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="caja2" class="row">
            <form class="col s10 offset-s1" name="reg"  role="form" method="post" action="">
                <input type="hidden" name="op" value="1" />
                <h1 style="text-align: center; color: #26A69A">Registra Vuelo</h1>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">location_on</i>
                        <select id="origen">
                            <option value="" disabled selected>Elegir Origen</option>
                            <?php
                            $aO = new CiudadDAO();
                            $lista = $aO->readall();
                            for ($i = 0; $i < count($lista); $i++) {
                                $c = new Ciudad();
                                $c = $lista[$i];
                                ?>
                                <option id="<?= $c->getCIU_ID() ?>" value="<?= $c->getCIU_ID() ?>"><?= $c->getCIU_NOM() ?></option>
                            <?php } ?>
                        </select>
                        <label>Origen</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">location_on</i>
                        <select id="destino">
                            <option value="" disabled selected>Elegir Destino</option>
                            <?php
                            for ($i = 0; $i < count($lista); $i++) {
                                $c = new Ciudad();
                                $c = $lista[$i];
                                ?>
                                <option id="<?= $c->getCIU_ID() ?>" value="<?= $c->getCIU_ID() ?>"><?= $c->getCIU_NOM() ?></option>
                            <?php } ?>
                        </select>
                        <label>Destino</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input style="margin-bottom: 30px" required=""  id="opcioni" name="opcionii" type="radio" class="with-gap validate">
                        <label for="opcioni">Ida-Vuelta</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input  id="opcionii" name="opcionii" required="" type="radio" class="validate with-gap">
                        <label style="margin-bottom: 30px" for="opcionii">Ida</label>
                    </div>    
                    <div class="input-field col s12 m6">
                        <input id="rutai" name="rutai" type="date" required="" class="calendar">
                        <label style="margin-bottom: 30px" for="rutai">Ida</label>
                    </div>
                    <div class="input-field col s12 m6 rutaii">
                        <input id="rutaii" name="rutaii" type="date" class="datepicker2">
                        <label for="rutaii">Vuelta</label>
                    </div>
                </div>
            </form>
            <center>
                <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                    <i class="material-icons right">send</i>
                </button>
            </center>
        </div>

        <!--  Scripts-->


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
