






function mostrar() {
    
   var tipo = $('#seleccionar').val();
 

if (tipo==0) {
    $('#estatura').hide();
    $('#peso').hide();    
    $('#edad').hide();
   
  }
  if (tipo==1) {
    $('#estatura').show();
    $('#peso').hide();    
    $('#edad').hide();
   
  }
  if (tipo==2) {
    $('#peso').show();
    $('#estatura').hide();
    $('#edad').hide();  
   
  }
  if (tipo==3) {
    $('#edad').show();
    $('#peso').hide();
    $('#estatura').hide();  
   

  }

}

