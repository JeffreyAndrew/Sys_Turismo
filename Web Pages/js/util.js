$(document).ready(function () {
    $("#primero").hide();

});
$(document).ready(function () {
    $("#opcionii").click(function () {
        $(".rutaii").hide();
    });
    $("#opcioni").click(function () {
        $(".rutaii").show();
    });

    //esconde medios de pago
    $("#presencial").hide();
    $("#tarjeta").hide();

    //mostrar medios de pago
    $("#visa").click(function () {
        $("#presencial").show();
        $("#tarjeta").hide();
    });
    $("#online").click(function () {
        $("#presencial").hide();
        $("#tarjeta").show();
    });
    var a = 0;

});
//validando formularios
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false

    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}
function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "0123456789";
    especiales = "8-37-39-46";

    tecla_especial = false

    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}
$("#hola").click(function(){
    $("#mensaje").animate({
        opacity:1
    },5000,function(){
        $("#finalform").submit();
    });
});