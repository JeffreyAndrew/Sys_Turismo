<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="Web Pages/css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="Web Pages/css/materialize.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>
            
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
