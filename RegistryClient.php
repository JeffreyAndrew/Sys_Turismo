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
        <title>COMPRAR VUELO</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Web Pages/css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="Web Pages/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="Web Pages/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <div class="col s12">
                    <center>
                        <a id="1" href="#" class="breadcrumb">Registra Vuelo</a>
                        <a id="2" href="#" class="breadcrumb">Pasajeros</a>
                        <a id="3" href="#" class="breadcrumb">Vuelos</a>
                        <a id="4" href="#" onclick="Materialize.showStaggeredList" class="breadcrumb">Precio</a>
                        <a id="5" href="#" class="breadcrumb">Pago</a>
                        <a id="6" href="#" class="breadcrumb">Confirmacion</a>
                    </center>
                </div>
            </div>
        </nav>
        <div id="caja2" class="row">
            <form class="col s10 offset-s1"  role="form" method="post" action="">
                <input type="hidden" name="op" value="1" />
                <h1 style="text-align: center; color: #26A69A">Registra Vuelo</h1>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">location_on</i>
                        <select id="origen">
                            <option value="" disabled selected>Elegir Origen</option>
                            <option value="1">Arequipa-Rodriguez Ballón</option>
                            <option value="2">Andahuaylas-Andahuaylas</option>
                            <option value="3">Anta(Huaraz)-Comandante FAP GAG</option>
                            <option value="4">Ayacucho-Coronel FAP AM</option>
                            <option value="5">Cajamarca-Mayor Gral. FAP AR</option>
                            <option value="6">Chimbote-Tnte FAP JMM</option>
                            <option value="7">Cuzco-Alejandro Velazco Astete</option>
                            <option value="8">Chachapoyas-Chachapoyas</option>
                            <option value="9">Chiclayo-Capitán FAP JQG</option>
                            <option value="10">Huánuco-Alférez FAP DFF</option>
                            <option value="11">Iquitos-Coronel FAP FSV</option>
                            <option value="12">Juliaca-Manco Cápac</option>
                            <option value="13">Lima-Internacional Jorge Chavez</option>
                            <option value="14">Pisco-Pisco</option>
                            <option value="15">Piura-Capitan FAP CC</option>
                            <option value="16">Pucallpa-Pucallpa</option>
                            <option value="17">Puerto Maldonado-Padre Aldamiz</option>
                            <option value="18">Tacna-Coronel FAP CC</option>
                            <option value="19">Tarapoto-Tarapoto</option>
                            <option value="20">Tingo Maria-Tingo Maria</option>
                            <option value="21">Trujillo-Capitan FAP CMP</option>
                            <option value="22">Tumbes-Capitan FAP PC</option>
                        </select>
                        <label>Origen</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">location_on</i>
                        <select>
                            <option value="" disabled selected>Elegir Destino</option>
                            <option value="1">Arequipa-Rodriguez Ballón</option>
                            <option value="2">Andahuaylas-Andahuaylas</option>
                            <option value="3">Anta(Huaraz)-Comandante FAP GAG</option>
                            <option value="4">Ayacucho-Coronel FAP AM</option>
                            <option value="5">Cajamarca-Mayor Gral. FAP AR</option>
                            <option value="6">Chimbote-Tnte FAP JMM</option>
                            <option value="7">Cuzco-Alejandro Velazco Astete</option>
                            <option value="8">Chachapoyas-Chachapoyas</option>
                            <option value="9">Chiclayo-Capitán FAP JQG</option>
                            <option value="10">Huánuco-Alférez FAP DFF</option>
                            <option value="11">Iquitos-Coronel FAP FSV</option>
                            <option value="12">Juliaca-Manco Cápac</option>
                            <option value="13">Lima-Internacional Jorge Chavez</option>
                            <option value="14">Pisco-Pisco</option>
                            <option value="15">Piura-Capitan FAP CC</option>
                            <option value="16">Pucallpa-Pucallpa</option>
                            <option value="17">Puerto Maldonado-Padre Aldamiz</option>
                            <option value="18">Tacna-Coronel FAP CC</option>
                            <option value="19">Tarapoto-Tarapoto</option>
                            <option value="20">Tingo Maria-Tingo Maria</option>
                            <option value="21">Trujillo-Capitan FAP CMP</option>
                            <option value="22">Tumbes-Capitan FAP PC</option>
                        </select>
                        <label>Destino</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">perm_identify</i>
                        <select>
                            <option value="1">Adulto</option>
                            <option value="2">Niño</option>
                            <option value="3">Bebe</option>
                        </select>
                        <label>Pasajero(s)</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">perm_identify</i>
                        <select>
                            <option value="1">Economica</option>
                            <option value="2">Ejecutivo</option>
                            <option value="3">Privado</option>
                            <option value="4">Turista</option>
                            <option value="5">Business</option>
                        </select>
                        <label>Cabina</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input style="margin-bottom: 30px" required="" id="opcioni" name="opcionii" type="radio" class="with-gap validate">
                        <label for="opcioni">Ida-Vuelta</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input  id="opcionii" name="opcionii" required="" type="radio" class="validate with-gap">
                        <label style="margin-bottom: 30px" for="opcionii">Ida</label>
                    </div>    
                    <div class="input-field col s12 m6">
                        <input id="rutai" name="rutai" type="date" required="" class="datepicker">
                        <label style="margin-bottom: 30px" for="rutai">Ida</label>
                    </div>
                    <div class="input-field col s12 m6" id="rutaii">
                        <input id="rutaii" name="rutaii" type="date" required="" class="datepicker">
                        <label for="rutaii">Vuelta</label>
                    </div>
                    <center>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                            <i class="material-icons right">send</i>
                        </button>
                    </center>
                </div>
            </form>

        </div>
        <div id="caja1" class="row ">
            <form class="col s10 offset-s1"  role="form" method="post" action=""> 
                <input type="hidden" name="op" value="1" />
                <h1 style="text-align: center; color: #26A69A">Registro Cliente</h1>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nombre" required="" name="nombre" type="text" class="validate">
                        <label for="nombre">Nombres</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="apellido" required="" name="apellido" type="text" class="validate">
                        <label for="apellido">Apellidos</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">store</i>
                        <input id="direccion" required="" name="direccion" type="text" class="validate">
                        <label for="direccion">Dirección</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" required="" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone</i>
                        <input id="telefono" required="" maxlength="9" name="telefono" type="number" class="validate">
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">store</i>
                        <input id="dni" required="" maxlength="8" name="dni" type="number" class="validate">
                        <label for="dni">Dni</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <label for="inacimiento" >Fecha de Nacimiento</label>
                        <input for="nacimiento" required="" id="inacimiento" type="date" class="datepicker">
                    </div>
                    <div class="input-field col s12 m6">
                        <select name="sexo">
                            <option value="" disabled selected>Elegir Sexo</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                        </select>
                        <label>Sexo</label>
                    </div>
                    <center>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                            <i class="material-icons right">send</i>
                        </button>
                    </center>
                </div>
            </form>
        </div>
        <div id="caja3" class="row">
            <center>
                <h1 style="color: #26A69A">¡Selecciona tus Vuelos!</h1>
            </center>
            <center>
                <div class="itinerario">
                    <h4>Itinerario</h4>            
                    <table class="table-responsive striped">
                        <thead>
                            <tr>
                                <th data-field="id">Ida</th>
                                <th data-field="id">Vuelta</th>
                                <th data-field="id">Pasajeros</th>
                                <th data-field="id">Cabina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lima-Cusco 3/06</td>
                                <td>Cusco-Lima 11/06</td>
                                <td>1 adulto</td>
                                <td>Economica</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="itinerario">
                    <h4>Selecciona tu Vuelo</h4>
                    <p>Ida Domingo 26 de Junio: Lima/Cusco</p>
                    <table class="table-responsive striped">
                        <thead>
                            <tr>
                                <th data-field="id">Vuelta</th>
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
                                <td><a role="button" class="red btn-large btn-floating" ><i class="large material-icons">done</i></a></td>
                            </tr>
                            <tr>
                                <td>Airbus 320</td>
                                <td>14:25<strong>(LIM)</strong></td>
                                <td>15:45<strong>(CUZ)</strong></td>
                                <td>01:20 hrs.</td>
                                <td><a role="button" class="red btn-large btn-floating" ><i class="large material-icons">done</i></a></td>
                            </tr>
                            <tr>
                                <td>Airbus 320</td>
                                <td>14:25<strong>(LIM)</strong></td>
                                <td>15:45<strong>(CUZ)</strong></td>
                                <td>01:20 hrs.</td>
                                <td><a role="button" class="red btn-large btn-floating" ><i class="large material-icons">done</i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <br/><br/>
                    <p>Vuelta 15 de Julio: Cusco/Lima</p>
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
                                <td><a role="button" class="red btn-large btn-floating" ><i class="large material-icons">done</i></a></td>
                            </tr>
                            <tr>
                                <td>Airbus 320</td>
                                <td>14:25<strong>(LIM)</strong></td>
                                <td>15:45<strong>(CUZ)</strong></td>
                                <td>01:20 hrs.</td>
                                <td><a role="button" class="red btn-large btn-floating" ><i class="large material-icons">done</i></a></td>
                            </tr>
                            <tr>
                                <td>Airbus 320</td>
                                <td>14:25<strong>(LIM)</strong></td>
                                <td>15:45<strong>(CUZ)</strong></td>
                                <td>01:20 hrs.</td>
                                <td><a role="button" class="red btn-large btn-floating" ><i class="large material-icons">done</i></a></td>
                            </tr>
                        </tbody>
                    </table>
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
        <div class="row" id="caja4">
            <center>
                <h1 style="color: #26A69A">Confirma tu Itinerario y precio</h1>
            </center>
            <center>
                <div class="itinerario">
                    <h4>Itinerario</h4>            
                    <table class="table-responsive striped">
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
                                <td>Viernes 29 de Julio</td>
                                <td>04:50 Lima(LIM)</td>
                                <td>06:10 Cusco(CUZ)</td>
                                <td>LA2025</td>
                                <td>Economica</td>
                                <td>Máximo 2 piezas de 23Kg en Total    </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table-responsive striped">
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
                                <td>Martes 02 de Agosto</td>
                                <td>14:45 Lima(LIM)</td>
                                <td>16:10 Cusco(CUZ)</td>
                                <td>LA2030</td>
                                <td>Economica</td>
                                <td>Máximo 2 piezas de 23Kg en Total    </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="itinerario">
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
                </div>
                <div>
                    <form>
                        <center>
                            <button class="btn waves-effect waves-light" type="button" name="action">Confirmar
                                <i class="material-icons right">send</i>
                            </button>
                        </center>
                    </form>
                </div>
            </center>
        </div>
        <div class="row" id="caja5">
            <center>
                <h1 style="color: #26A69A">Selecciona tu medio de Pago  </h1>
            </center>
            <center>
                <div class="itinerario">
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
                    </table><br><br><br>
                    <h4>Elige el medio de Pago</h4>
                    <a href="#" id="visa" onclick="Materialize.fadeInImage('#presencial')">Tarjeta de crédito(Solo VISA)</a><br><br><br>

                    <div id="presencial">
                        <form> 
                            <div class="input-field col s6">
                                <i class="material-icons prefix">dialpad</i>
                                <input id="digitotarjeta" min="1" max="16" type="number" required="" class="validate">
                                <label for="icon_prefix">Numero Tarjeta:</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">today</i>
                                <input id="icon_telephone" required="" type="date" class="validate datepicker">
                                <label for="icon_telephone">Fecha de Expiracion:</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">lock_outline</i>
                                <input id="icon_telephone" required="" maxlength="4" type="number" class="validate">
                                <label for="icon_telephone">Codigo de verificaciòn:</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">perm_identity</i>
                                <input id="icon_telephone" required="" type="text" class="validate">
                                <label for="icon_telephone">Nombre del Titular</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">perm_identity</i>
                                <input id="icon_telephone" required="" type="text" class="validate">
                                <label for="icon_telephone">Apellidos</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">theaters</i>
                                <input id="icon_telephone" required="" type="text" class="validate">
                                <label for="icon_telephone">Calle</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">business</i>
                                <input id="icon_telephone" required="" type="text" class="validate">
                                <label for="icon_telephone">Ciudad</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">language</i>
                                <input id="icon_telephone" required="" type="text" class="validate">
                                <label for="icon_telephone">Estado</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">location_on</i>
                                <input id="icon_telephone" required="" maxlength="10" type="text" class="validate">
                                <label for="icon_telephone">Código Postal</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" required="" maxlength="9" type="number" class="validate">
                                <label for="icon_telephone">Número Teléfono</label>
                            </div>
                            <center>
                                <button class="btn waves-effect waves-light" type="submit" onclick="inputs()" name="action">Enviar
                                    <i class="material-icons right">send</i>
                                </button><br><br><br>
                            </center>
                        </form>
                    </div>

                    <a href="#" id="online" onclick="Materialize.fadeInImage('#tarjeta')">Presencial/Banca on-line</a><br><br>

                    <div id="tarjeta">
                        <form>

                            <div>
                                <input class="with-gap" name="group3" type="radio" id="test5" checked />
                                <label for="test5"></label>
                                <img src="Web Pages/images/bcp-logo.png" alt="" style="width: 150px; height: 100px"/>
                            </div>
                            <div>
                                <input class="with-gap" name="group3" type="radio" id="test6" checked />
                                <label for="test6"></label>
                                <img src="Web Pages/images/logo-scotiabank.png" alt="" style="width: 150px; height: 100px"/>
                            </div>
                            <div>
                                <input class="with-gap" name="group3" type="radio" id="test7" checked />
                                <label for="test7"></label>
                                <img src="Web Pages/images/logo-bbva.png" alt="" style="width: 150px; height: 100px;"/>
                            </div>  
                        </form>

                    </div>

                </div>
            </center>
        </div>
        <div class="row" id="caja6">
            <center>
                <h1 style="color: #26A69A">Confirma tus Datos</h1>
            </center>  
            <center>
                <div class="itinerario">
                    <h4>Itinerario</h4>  
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
                                <td>Viernes 29 de Julio</td>
                                <td>04:50 Lima(LIM)</td>
                                <td>06:10 Cusco(CUZ)</td>
                                <td>LA2025</td>
                                <td>Economica</td>
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
                                <td>Martes 02 de Agosto</td>
                                <td>14:45 Lima(LIM)</td>
                                <td>16:10 Cusco(CUZ)</td>
                                <td>LA2030</td>
                                <td>Economica</td>
                                <td>Máximo 2 piezas de 23Kg en Total    </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="itinerario">
                    <center>
                        <h4>Pasajeros</h4>
                    </center>
                    <table class="responsive-table striped">
                        <thead>
                            <tr>
                                <th data-field="id">Tipo</th>
                                <th data-field="id">Nombre</th>
                                <th data-field="id">Apellidos</th>
                                <th data-field="id">Documento de Identidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CABRO</td>
                                <td>Cesar</td>
                                <td>El cabro Valerio</td>
                                <td>NO apto para cabros</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </center>
            <center>
                <button class="btn waves-effect waves-light" type="submit" name="action">Confirmar
                    <i class="material-icons right">send</i>
                </button><br><br><br>
            </center>
        </div>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="Web Pages/js/materialize.min.js" type="text/javascript"></script>
        <script>
                        $('.datepicker').pickadate({
                            selectMonths: true, // Creates a dropdown to control month
                            selectYears: 15,
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
