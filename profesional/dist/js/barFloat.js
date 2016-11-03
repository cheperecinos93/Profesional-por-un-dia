//MOSTRAR AREA DE MENSAJES PANTALLA COMPLETA
function barFloatshow(contenido,bton){
    $("#textoanimado").hide();
    $("#continuar").hide();
    $("#textoanimado").html(contenido);
    $("#continuar").html(bton);
    $(".contenedorFloat").show('fade', {direction: 'left'}, 800, function(){
        $("#textoanimado").show('fade',1000,function(){
            $("#continuar").show('fade',1000);
        });
    }).removeClass("bar-close").addClass("bar-open");
}
//OCULTAR AREA DE MENSAJES PANTALLA COMPLETA
function barFloathide(){
    $(".contenedorFloat").hide('fade', {direction: 'left'}, 1500).removeClass("bar-open").addClass("bar-close");    
}
//BOTON PARA OCULTAR AREA DE MENSAJES PANTALLA COMPLETA 
$(document).ready(function(){       
    $("#continuar").click(function(){
        $(".contenedorFloat").hide('fade', {direction: 'left'}, 1500).removeClass("bar-open").addClass("bar-close");  
    });
});