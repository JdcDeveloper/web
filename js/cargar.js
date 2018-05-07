
$.ajax({
  method: "POST",
  url: "cargar_dia.php"  
})
  .done(function( msg ) {

    $("#dia").html(msg);
    
  });



$.ajax({
  method: "POST",
  url: "cargar_mes.php"  
})
  .done(function( msg ) {   
    $("#mes").html(msg);
    
  });

  $.ajax({
  method: "POST",
  url: "cargar_ano.php"  
})
  .done(function( msg ) {   
    $("#ano").html(msg);
    
  });






