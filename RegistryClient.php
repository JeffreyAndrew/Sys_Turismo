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
        <div class="row ">  
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
                    <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                        <i class="material-icons right">send</i>
                    </button>
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
    </body>
</html>
