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
    
    $("#caja1").hide();
    
    $("#boton").click(function () {
        $("#caja2").hide();
        $("#caja1").show();
    });
 });
