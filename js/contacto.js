




$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});


function validar() {
          
     var nombre = $("#nombre").val();
     var email = $("#email").val();
     var asunto = $("#asunto").val();
     var contenido = $("#contenido").val();
                                  

     if(nombre == ""){
        alert("Ingrese su nombre");
            return false;
     }else if (email == ""){
        alert("Ingrese su email");
             return false;
     }else if (asunto == ""){
        alert("Ingrese el asunto");
             return false;
     }else if (contenido == ""){
        alert("Ingrese su mensaje");
             return false;
               
     }else{
              
        return true;
    }
         
}


function color() {
    $("#nombre").focus(function(){
        $("#nombre").css("background-color", "#CCEEFF");
    });
    $("#nombre").blur(function(){
        $("#nombre").css("background-color", "#ffffff");
    });
    $("#email").focus(function(){
        $("#email").css("background-color", "#CCEEFF");
    });
     $("#email").blur(function(){
        $("#email").css("background-color", "#CCEEFF");
    });
    $("#asunto").focus(function(){
        $("#asunto").css("background-color", "#ffffff");
    });
    $("#asunto").blur(function(){
        $("#asunto").css("background-color", "#CCEEFF");
    });
     $("#contenido").focus(function(){
        $("#contenido").css("background-color", "#ffffff");
    });
    $("#contenido").blur(function(){
        $("#contenido").css("background-color", "#CCEEFF");
    });
}
 

