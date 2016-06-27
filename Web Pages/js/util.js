$(document).ready(function(){
    $("#primero").hide();
    
});
$(document).ready(function () {
    $("#opcionii").click(function () {
        $("#rutaii").hide();
    });
    $("#opcioni").click(function () {
        $("#rutaii").show();
    });
//    esconder cajas
    $("#caja1").hide();
    $("#caja3").hide();
    $("#caja4").hide();
    $("#caja5").hide();
    $("#caja6").hide();
    
//    esconder registros
    $("#1").click(function () {
        $("#caja1").hide();
        $("#caja4").hide();
        $("#caja3").hide();
        $("#caja5").hide();
        $("#caja6").hide();
        $("#caja2").show();
    });
    $("#2").click(function () {
        $("#caja2").hide();
        $("#caja3").hide();
        $("#caja4").hide();
        $("#caja5").hide();
        $("#caja6").hide();
        $("#caja1").show();
    });
    $("#3").click(function () {
        $("#caja2").hide();
        $("#caja1").hide();
        $("#caja3").show();
        $("#caja4").hide();
        $("#caja5").hide();
        $("#caja6").hide();
    });
    $("#4").click(function () {
        $("#caja2").hide();
        $("#caja1").hide();
        $("#caja3").hide();
        $("#caja5").hide();
        $("#caja6").hide();
        $("#caja4").show();
    });
    $("#5").click(function () {
        $("#caja2").hide();
        $("#caja1").hide();
        $("#caja3").hide();
        $("#caja4").hide();
        $("#caja6").hide();
        $("#caja5").show();
    });
    $("#6").click(function () {
        $("#caja2").hide();
        $("#caja1").hide();
        $("#caja3").hide();
        $("#caja4").hide();
        $("#caja5").hide();
        $("#caja6").show();
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
    //Configurando el calendario
    $('.datepicker').pickadate({
       selectMonths:false,
       selectYears:2
    });
 });
