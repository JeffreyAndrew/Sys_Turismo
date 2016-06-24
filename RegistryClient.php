<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Web Pages/css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="Web Pages/css/materialize.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="caja2" class="row">
            <form class="col s10 offset-s1"  role="form" method="post" action="">
                <input type="hidden" name="op" value="1" />
                <h1 style="text-align: center; color: #26A69A">Comprar Vuelo</h1>
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
                        <input style="margin-bottom: 30px" id="opcioni" name="opcionii" type="radio" class="with-gap validate">
                        <label for="opcioni">Ida-Vuelta</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input  id="opcionii" name="opcionii" type="radio" class="validate with-gap">
                        <label style="margin-bottom: 30px" for="opcionii">Ida</label>
                    </div>    
                    <div class="input-field col s12 m6">
                        <input id="rutai" name="rutai" type="date" class="datepicker">
                        <label style="margin-bottom: 30px" for="rutai">Ida</label>
                    </div>
                    <div class="input-field col s12 m6" id="rutaii">
                        <input id="rutaii" name="rutaii" type="date" class="datepicker">
                        <label for="rutaii">Vuelta</label>
                    </div>
                    <center>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                            <i class="material-icons right">send</i>
                        </button>
                    </center>
                </div>
            </form>


            <center>
                <div class="caja2">
                    <button class="btn waves-effect waves-light"  type="submit" id="boton">Siguiente
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </center>

        </div>
        <div id="caja1" class="row ">
            <form class="col s10 offset-s1"  role="form" method="post" action=""> 
                <input type="hidden" name="op" value="1" />
                <h1 style="text-align: center; color: #26A69A">Registro Cliente</h1>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nombre" name="nombre" type="text" class="validate">
                        <label for="nombre">Nombres</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="apellido" name="apellido" type="text" class="validate">
                        <label for="apellido">Apellidos</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">store</i>
                        <input id="direccion" name="direccion" type="text" class="validate">
                        <label for="direccion">Dirección</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone</i>
                        <input id="telefono" name="telefono" type="number" class="validate">
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">store</i>
                        <input id="dni" name="dni" type="text" class="validate">
                        <label for="dni">Dni</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <label for="inacimiento" >Fecha de Nacimiento</label>
                        <input for="nacimiento" id="inacimiento" type="date" class="datepicker">
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

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="Web Pages/js/materialize.min.js" type="text/javascript"></script>
        <script>
            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15 // Creates a dropdown of 15 years to control year
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
