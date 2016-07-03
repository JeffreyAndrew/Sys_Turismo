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
        <title>Medio de Pago</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Web Pages/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="Web Pages/css/materialize.css" rel="stylesheet" type="text/css"/>
        <script src="Web Pages/js/materialize.min.js" type="text/javascript"></script>
        <link href="Web Pages/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row" id="carton">
            <center>
                <h1 style="color: #26A69A">Pago Online</h1>
            </center>
            <center>
                <div class="pago">
                    <h4>Tarifa en dólares americanos</h4>
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

                    <br><br><br>
                </div>      
                <div id="presencial carton pago2" class="row">

                    <input type="hidden" name="op" value="4" />

                    <form class="col s10 offset-s1" role="form" method="post" action=""> 

                        <h4>Complete los Campos</h4>

                        <a href="#" id="visa" onclick="Materialize.fadeInImage('#presencial')">Tarjeta de crédito(Solo VISA)</a><br><br><br>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">dialpad</i>
                                <input id="digitotarjeta number"  placeholder="16 dígitos" maxlength="16" type="text" required="" onkeypress="return soloNumeros(event)">
                                <label for="icon_prefix">Numero Tarjeta:</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">today</i>
                                <input id="icon_telephone" required="" type="date" placeholder="expiracion/tarjeta" class="datepicker">
                                <label for="icon_telephone">Fecha de Expiracion:</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="icon_telephone" required="" maxlength="4" type="text" placeholder="4 dígitos" onkeypress="return soloNumeros(event)">
                                <label for="icon_telephone">Codigo Tarjeta</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">perm_identity</i>
                                <input id="icon_telephone" required="" type="text" placeholder="35 dígitos/máximo" maxlength="35" onkeypress="return soloLetras(event)">
                                <label for="icon_telephone">Nombre</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">perm_identity</i>
                                <input id="icon_telephone" required="" placeholder="35 dígitos/máximo" type="text" maxlength="35" onkeypress="return soloLetras(event)">
                                <label for="icon_telephone">Apellidos</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">theaters</i>
                                <input id="calle" required="" type="text" placeholder="Ubicación actual">
                                <label for="calle">Calle</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">business</i>
                                <input id="icon_telephone" required="" placeholder="Actual" type="text" onkeypress="return soloLetras(event)">
                                <label for="icon_telephone">Ciudad</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">language</i>
                                <input id="icon_telephone" required="" type="text" placeholder="Actual" onkeypress="return soloLetras(event)">
                                <label for="icon_telephone">Estado</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">location_on</i>
                                <input id="icon_telephone" required="" maxlength="10" placeholder="10 dígitos/máximo" type="text" onkeypress="return soloNumeros(event)">
                                <label for="icon_telephone">Código Postal</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" required="" placeholder="Celular" maxlength="9" type="text" onkeypress="return soloNumeros(event)">
                                <label for="icon_telephone">Número Teléfono</label>
                            </div>
                            <center>
                                <button class="btn waves-effect waves-light" type="submit" onclick="inputs()" name="action">Enviar
                                    <i class="material-icons right">send</i>
                                </button><br><br><br>
                            </center>
                        </div>
                    </form>
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
