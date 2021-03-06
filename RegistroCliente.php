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
        <title>Registro Cliente</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Web Pages/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="Web Pages/css/materialize.css" rel="stylesheet" type="text/css"/>
        <script src="Web Pages/js/materialize.min.js" type="text/javascript"></script>
        <link href="Web Pages/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="carton" class="row ">
            <form class="col s10 offset-s1"  role="form" method="get" action="VentaController.php"> 

                <input type="hidden" name="op" value="4" />

                <h1 style="text-align: center; color: #26A69A">Registro Cliente</h1>

                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nombre"  maxlength="35" onkeypress="return soloLetras(event)" required="" name="nombre" type="text" >
                        <label for="nombre">Nombres</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="apellidop" name="app" maxlength="35" onkeypress="return soloLetras(event)" required="" type="text" >
                        <label for="apellidop">Apellido Paterno</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="apellidom" name="apm" maxlength="35" onkeypress="return soloLetras(event)" required="" type="text" >
                        <label for="apellidom">Apellido Materno</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">perm_identify</i>
                        <select name="tipo">
                            <option value="Adulto">Adulto</option>
                            <option value="Niño">Niño</option>
                            <option value="Bebé">Bebe</option>
                        </select>
                        <label>Pasajero(s)</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">store</i>
                        <input id="direccion" required="" name="direccion" type="text" >
                        <label for="direccion">Dirección</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" required="" type="email" >
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone</i>
                        <input id="miCampo2" required="" maxlength="9" name="telefono" type="text" onkeypress="return soloNumeros(event)">
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">store</i>
                        <input id="dni" required="" maxlength="8" name="dni" type="text" onkeypress="return soloNumeros(event)">
                        <label for="dni">Dni</label>
                    </div>
                    <center>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                            <i class="material-icons right">send</i>
                        </button>
                    </center>
                </div>
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
