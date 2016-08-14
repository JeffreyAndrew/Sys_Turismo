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
            <form class="col s10 offset-s1" name="reg"  role="form" method="get" action="VentaController.php">
                <input type="hidden" name="op" value="2" />
                <h1 style="text-align: center; color: #26A69A">Buscar Vuelo</h1>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">location_on</i>
                        <select id="origen" name="origen">
                            <option value="" disabled selected>Elegir Origen</option>
                            <?php
                            session_start();
                            ob_start();
                            $list = $_SESSION['lista'];
                            for ($i = 0; $i < count($list); $i++) {
                                $c = new Ciudad();
                                $c = $list[$i];
                                ?>
                                <option id="<?= $c->getCIU_ID() ?>" value="<?= $c->getCIU_ID() ?>"><?= $c->getCIU_NOM() ?></option>
                            <?php } ?>
                        </select>
                        <label>Origen</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">location_on</i>
                        <select id="destino" name="destino">
                            <option value="" disabled selected>Elegir Destino</option>
                            <?php
                            for ($i = 0; $i < count($list); $i++) {
                                $c = new Ciudad();
                                $c = $list[$i];
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
                <center>
                    <button class="btn waves-effect waves-light" type="submit">Registrar
                        <i class="material-icons right">send</i>
                    </button>
                </center>
            </form>
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
